// Copyright (c) Andrew Rasmussen 2013 All Rights Reserved

var requirejs = require('requirejs');

requirejs.config({
  nodeRequire: require,
  baseUrl: __dirname + '/../..',
  paths: {
    socket: 'server/socket',
    db: 'server/db'
  }
});

requirejs(['socket/server'], function(server) {
  process.chdir(__dirname);
  server.main();
});
