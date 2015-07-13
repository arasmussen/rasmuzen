var multiparty = require('multiparty');
var querystring = require('querystring');
var url = require('url');

var getCookies = function(request) {
  var cookies = {};
  if (request.headers.cookie) {
    request.headers.cookie.split(';').forEach(function(cookie) {
      var parts = cookie.split('=');
      cookies[parts[0].trim()] = (parts[1] || '').trim();
    });
  }
  return cookies;
};

var getGetParams = function(request) {
  var urlParts = url.parse(request.url, true);
  return urlParts.query;
};

var getMultipartFormData = function(request, callback) {
  var form = new multiparty.Form();
  var formData = {};
  form.on('part', function(part) {
    if (!part.filename) {
      var value = '';
    } else {
      var file = {
        buffer: new Buffer(part.byteCount),
        byteCount: part.byteCount,
        filename: part.filename,
      };
    }
    var offset = 0;
    part.on('data', function(data) {
      if (!part.filename) {
        value += data;
      } else {
        data.copy(file.buffer, offset);
        offset += data.length;
      }
    });
    part.on('end', function() {
      if (!part.filename) {
        formData[part.name] = decodeURIComponent(value);
      } else {
        formData[part.name] = file;
      }
    });
    part.on('error', function(err) {
      callback(err);
    });
  });
  form.on('close', function() {
    callback(null, formData);
  });
  form.on('error', function(err) {
    callback(err);
  });
  form.parse(request);
};

var getPostData = function(request, callback) {
  var queryString = '';
  request.on('data', function(data) {
    queryString += data;
  });
  request.on('end', function() {
    callback(querystring.parse(queryString));
  });
};

var getQueryData = function(request, callback) {
  var queryData = {};

  var getParams = getGetParams(request);
  for (var i in getParams) {
    queryData[i] = getParams[i];
  }

  var cookies = getCookies(request);
  for (var i in cookies) {
    queryData[i] = cookies[i];
  }

  if (request.headers['content-type'] &&
      request.headers['content-type'].slice(0, 9) == 'multipart') {
    getMultipartFormData(request, function(err, formData) {
      if (err) {
        console.error('Multipart error: ' + err);
        callback(queryData);
        return;
      }

      for (var i in formData) {
        queryData[i] = formData[i];
      }
      callback(queryData);
    });
  } else {
    getPostData(request, function(postData) {
      for (var i in postData) {
        queryData[i] = postData[i];
      }
      callback(queryData);
    });
  }
};

module.exports = getQueryData;
