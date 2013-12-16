define(['fs', 'module', 'path'], function(fs, module, path) {
  var dirname = path.dirname(module.uri);

  var IndexRequestHandler = function(request, response) {
    this.request = request;
    this.response = response;
  };

  IndexRequestHandler.prototype.handle = function() {
    var content = '';

    content += fs.readFileSync(dirname + '/../views/header.html', 'utf8');
    content += fs.readFileSync(dirname + '/../views/index.html', 'utf8');
    content += fs.readFileSync(dirname + '/../views/footer.html', 'utf8');

    this.response.writeHead(200, {'Content-Type': 'text/html'});
    this.response.end(content, 'utf8');
  };

  return IndexRequestHandler;
});
