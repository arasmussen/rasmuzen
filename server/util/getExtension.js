var getExtension = function(urlString) {
  if (!urlString || typeof urlString !== 'string') {
    return null;
  }

  // foobar
  var lastDot = urlString.lastIndexOf('.');
  if (lastDot === -1) {
    return null;
  }

  // foobar.jpg
  var questionMark = urlString.indexOf('?');
  if (questionMark === -1) {
    return urlString.substr(lastDot + 1).toLowerCase();
  }

  // foobar.jpg?foo=bar
  return urlString.substr(lastDot + 1, questionMark - lastDot - 1).toLowerCase();
};

module.exports = getExtension;
