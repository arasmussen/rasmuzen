var getContentType = function(extension) {
  if (!extension || typeof extension !== 'string') {
    console.error('invalid extension');
    return null;
  }

  var extension = extension.toLowerCase();

  switch (extension) {
    case 'jpg':
    case 'jpeg':
      return 'image/jpeg';

    case 'gif':
      return 'image/gif';

    case 'png':
      return 'image/png';

    default:
      console.error('invalid extension: ' + extension);
      return null;
  }
}

module.exports = getContentType;
