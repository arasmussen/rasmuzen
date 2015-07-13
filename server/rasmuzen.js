var HTTPServer = require('./webserver/HTTPServer');
var ServerConfig = require('./webserver/ServerConfig');

var webserver = new HTTPServer(ServerConfig);
webserver.start();
