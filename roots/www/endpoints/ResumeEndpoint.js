// Copyright (c) Andrew Rasmussen 2013 All Rights Reserved

define(['basejs', 'fs', 'module', 'path'], function(Base, fs, module, path) {

  var dirname = path.dirname(module.uri);

  return Base.extend({
    constructor: function(request) {
      this.request = request;
    },

    handle: function() {
      var resume = fs.readFileSync(dirname + '/../root/resume.html', 'utf8');
      this.request.respond200(resume);
    }
  });
});
