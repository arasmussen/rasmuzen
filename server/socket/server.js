// Copyright (c) Andrew Rasmussen 2013 All Rights Reserved

define([
    'socket.io',
    'db/db'
  ],
  function(io, db) {
    return {
      main: function() {
      },

      start: function() {
        // set up socket connect/disconnect hooks
        io = io.listen(8080);
        io.sockets.on('connection', this.onConnect.bind(this));
        io.sockets.on('disconnect', this.onDisconnect.bind(this));

        // connect to db
        db.connect();
      },

      onConnect: function(socket) {
        this.clientManager.addClient(socket);
        socket.emit('init', {id: socket.id});
        socket.on('disconnect', this.onDisconnect.bind(this, socket));
        socket.on('ping', this.onPing.bind(this, socket));
      },

      onDisconnect: function(socket) {
        this.clientManager.removeClient(socket);
      },

      onPing: function(socket, data) {
        var time = (new Date()).valueOf();
        socket.emit('reply', {
          id: data.id,
          offset: time - data.time
        });
      }
    };
  }
);
