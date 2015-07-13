// Copyright (c) Andrew Rasmussen 2013 All Rights Reserved

define([
    'roots/www/endpoints/ResumeEndpoint'
  ],
  function(ResumeEndpoint) {
    return {
      // loads B when A is requested
      aliases: {
        '/': '/index',
        '/favicon.ico': '/img/favicon.ico',
      },

      globalFiles: {
        css: ['reset'],
        js: [
          'jquery-1.8.2',
          'analytics'
        ]
      },

      pageSpecificFiles: {
        css: {
          '/index': [
            'index',
            'smoothness/jquery-ui-1.9.0.custom.min',
            'theme'
          ],
          '/new': ['new']
        },
        js: {
          '/index': [
            'index',
            'jquery-ui-1.9.0.custom.min',
            'rainbow-custom.min'
          ],
          '/new': ['new']
        }
      },

      endpoints: {
        '/resume': ResumeEndpoint
      },

      // sends a 302 redirect from A to B
      redirects: {}
    };
  }
);
