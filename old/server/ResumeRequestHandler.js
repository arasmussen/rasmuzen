define(['fs', 'module', 'path'], function(fs, module, path) {
  var dirname = path.dirname(module.uri);

  var ResumeReqestHandler = function(request, response) {
    this.request = request;
    this.response = response;
  };

  ResumeReqestHandler.prototype.handle = function() {
    var content = '';

    content += fs.readFileSync(dirname + '/../views/resume.html', 'utf8');

    this.response.writeHead(200, {'Content-Type': 'text/html'});
    this.response.end(content, 'utf8');
  };

  return ResumeReqestHandler;
});
