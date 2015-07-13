var ServerConfig = {
  extensions: {
    'html': {contentType: 'text/html', binary: false},
    'css': {contentType: 'text/css', binary: false},
    'eot': {contentType: 'application/vnd.ms-fontobject', binary: false},
    'js': {contentType: 'application/javascript', binary: false},
    'gif': {contentType: 'image/gif', binary: true},
    'ico': {contentType: 'image/x-icon', binary: true},
    'jpeg': {contentType: 'image/jpeg', binary: true},
    'jpg': {contentType: 'image/jpeg', binary: true},
    'otf': {contentType: 'font/x-font-opentype', binary: true},
    'png': {contentType: 'image/png', binary: true},
    'svg': {contentType: 'image/svg+xml', binary: true},
    'ttf': {contentType: 'application/x-font-ttf', binary: true},
    'woff': {contentType: 'application/font-woff', binary: true},
    'other': {contentType: 'text/plain', binary: false},
  },

  getExtensionData: function(extension) {
    if (!this.extensions[extension]) {
      return this.extensions.other;
    }
    return this.extensions[extension];
  },

  redirects: {
    '/': '/index.html',
  },

  endpoints: {
  },

  port: 8002,
};

module.exports = ServerConfig;
