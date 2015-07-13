var Request = require('./Request');

var fs = require('fs');
var getExtension = require('../util/getExtension');
var getPath = require('../util/getPath');
var getQueryData = require('./getQueryData');
var http = require('http');

var WEBROOT = __dirname + '/../../root';

var HTTPServer = function(config) {
  this._config = config;
};

HTTPServer.prototype.start = function() {
  var requestHandler = this.requestHandler.bind(this);
  var port = this._config.port;
  http.createServer(requestHandler).listen(port);
};

HTTPServer.prototype.requestHandler = function(request, response) {
  var config = this._config;
  var path = getPath(request.url);

  if (config.endpoints[path]) {
    var endpoint = config.endpoints[path];
    this.handleEndpoint(endpoint, request, response, path);
    return;
  }

  this.serveFile(path, response);
},

HTTPServer.prototype.serveFile = function(path, response) {
  var config = this._config;

  if (config.redirects[path]) {
    path = config.redirects[path];
  }

  var filepath = WEBROOT + path;
  if (!fs.existsSync(filepath)) {
    path = '/index.html';
    filepath = WEBROOT + path;
  }

  var checkFile = fs.realpathSync(filepath);
  var rootDir = fs.realpathSync(WEBROOT);
  if (checkFile.indexOf(rootDir) !== 0) {
    this.serve404(response);
    return;
  }

  var extension = getExtension(path);
  var extensionData = config.getExtensionData(extension);
  response.writeHead(200, {
    'Access-Control-Allow-Origin': '*',
    'Content-Type': extensionData.contentType
  });
  var contents = fs.readFileSync(filepath, extensionData.binary ? 'binary' : 'utf8');
  response.end(contents, extensionData.binary ? 'binary' : 'utf8');
};

HTTPServer.prototype.handleEndpoint = function(endpoint, request, response, path) {
  var serveFile = this.serveFile.bind(this, path, response);
  getQueryData(request, function(queryData) {
    var endpointRequest = new Request(queryData, request, response, serveFile);
    if (!endpoint.respond) {
      console.error('endpoint for "' + path + '" does not implement respond');
      endpointRequest.error('Error loading path "' + path + '"');
      return;
    }
    endpoint.respond(endpointRequest);
  });
};

HTTPServer.prototype.serve404 = function(response) {
  response.writeHead(404);
  response.end();
};

module.exports = HTTPServer;
