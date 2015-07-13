$(function() {
  var canvasID = 'canvas';
  var gl;

  function init() {
    var canvas = $('#' + canvasID);
    var context = getWebGLContext(canvas);

    if (context) {
      gl = context;
      setup3DCapableSite();
    } else {
      setupFallbackSite();
    }
  }

  function getWebGLContext(canvas) {
    if (!window.WebGLRenderingContext) {
      console.log("WebGL error: couldn't get context, bad browser");
      return null;
    }

    var context = null;
    var names = ["webgl", "experimental-webgl", "webkit-3d", "moz-webgl"];
    for (var i in names) {
      try {
        context = canvas.getContext(names[i], null);
      } catch(e) {}
      if (context) {
        break;
      }
    }

    if (!context) {
      console.log("WebGL error: couldn't get context, unknown problem");
      return null;
    }

    return context;
  }

  function setupFallbackSite() {
  }

  function setup3DCapableSite(canvas) {
    gl.viewportWidth = canvas.width;
    gl.viewportHeight = canvas.height;
    gl.clearColor(0.5, 0.6, 1.0, 1.0);
    gl.enable(gl.DEPTH_TEST);
    gl.depthFunc(gl.LESS);
    gl.enable(gl.BLEND);
    gl.blendFunc(gl.SRC_ALPHA, gl.ONE_MINUS_SRC_ALPHA);
  }
});
