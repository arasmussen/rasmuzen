var Request = function(queryData, request, response, serveFile) {
  this._queryData = queryData;
  this._request = request;
  this._response = response;
  this._serveFile = serveFile;
};

Request.prototype.getData = function() {
  return this._queryData;
};

Request.prototype.expireCookie = function(cookieName) {
  this.setCookie(cookieName, '; Expires=Thu, 01 Jan 1970 00:00:00 GMT');
};

Request.prototype.setCookie = function(cookieName, value) {
  if (!this._cookies) {
    this._cookies = {};
  }
  this._cookies[cookieName] = value;
};

Request.prototype.serveFile = function() {
  this._serveFile();
};

Request.prototype.serve404 = function() {
  this._response.writeHead(404);
  this._response.end();
};

Request.prototype.respond = function(data) {
  var headers = {
    'Access-Control-Allow-Origin': '*',
    'Content-Type': 'text/plain',
  };
  var cookies = this._cookies;
  if (cookies) {
    var cookieString = '';
    for (var key in cookies) {
      var value = cookies[key];
      cookieString += key + '=' + value + ';';
    }
    cookieString += ' HttpOnly';
    headers['Set-Cookie'] = cookieString;
  }
  this._response.writeHead(200, headers);
  this._response.end(data, 'utf8');
};

Request.prototype.error = function(message) {
  console.error(message);
  var responseData = {
    error: 'server error',
  };
  this.respond(JSON.stringify(responseData));
};

Request.prototype.fail = function(message) {
  var responseData = {
    error: message,
  };
  this.respond(JSON.stringify(responseData));
};

module.exports = Request;
