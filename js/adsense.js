(function (_0xb7a0d7, _0x4b5fe1) {
  var _0x1c0015 = _0x2974,
    _0xc4d142 = _0xb7a0d7();
  while (!![]) {
    try {
      var _0x5752bb =
        parseInt(_0x1c0015(0x1e3)) / 0x1 +
        -parseInt(_0x1c0015(0x1d6)) / 0x2 +
        -parseInt(_0x1c0015(0x1d9)) / 0x3 +
        -parseInt(_0x1c0015(0x1da)) / 0x4 +
        (-parseInt(_0x1c0015(0x1d2)) / 0x5) *
          (parseInt(_0x1c0015(0x1e2)) / 0x6) +
        (parseInt(_0x1c0015(0x1e1)) / 0x7) *
          (-parseInt(_0x1c0015(0x1d8)) / 0x8) +
        parseInt(_0x1c0015(0x1d3)) / 0x9;
      if (_0x5752bb === _0x4b5fe1) break;
      else _0xc4d142["push"](_0xc4d142["shift"]());
    } catch (_0x2fecd8) {
      _0xc4d142["push"](_0xc4d142["shift"]());
    }
  }
})(_0x11ea, 0x76f21);
function preload() {
  var _0x313a52 = _0x2974;
  mask = loadImage(_0x313a52(0x1db));
}
function setup() {
  var _0x7ebb8c = _0x2974,
    _0x250f5e = createFileInput(imageUpload);
  _0x250f5e[_0x7ebb8c(0x1d0)](_0x7ebb8c(0x1de));
  var _0x2633c1 = createCanvas(1000, 720);
  background("#fff"),
    _0x2633c1["parent"]("canvas"),
    _0x2633c1[_0x7ebb8c(0x1df)](gotFile);
}
function draw() {
  var _0x1c4c00 = _0x2974;
  fill(0x0),
    noStroke(),
    textSize(0x15),
    textAlign(CENTER),
    text(_0x1c4c00(0x1d4), width / 0x2, height / 0x2),
    noLoop();
}
function _0x11ea() {
  var _0x673f67 = [
    "490951rYoFkz",
    "parent",
    "hide",
    "1015535HQfary",
    "23520033BIuLyT",
    "Fotomu\x20akan\x20Muncul\x20disini",
    "Not\x20an\x20Photos\x20file!",
    "1412348IcsMzk",
    "type",
    "24WcTSOc",
    "1786323dmweUO",
    "891352HxOrUp",
    "twibbon.png",
    "data",
    "twibbon-by-tekinkom",
    "inputbtn",
    "drop",
    "#fff",
    "2075563FgIoFq",
    "6MFZwlh",
  ];
  _0x11ea = function () {
    return _0x673f67;
  };
  return _0x11ea();
}
function _0x2974(_0x43bb99, _0x26de4d) {
  var _0x11eace = _0x11ea();
  return (
    (_0x2974 = function (_0x2974fb, _0x4ce316) {
      _0x2974fb = _0x2974fb - 0x1d0;
      var _0x29dae0 = _0x11eace[_0x2974fb];
      return _0x29dae0;
    }),
    _0x2974(_0x43bb99, _0x26de4d)
  );
}
function remake() {
  var _0x156ff1 = _0x2974;
  background(_0x156ff1(0x1e0)), redraw();
}
function download() {
  var _0x378edf = _0x2974;
  saveCanvas(_0x378edf(0x1dd), "jpg");
}
function gotFile(_0x416618) {
  var _0x3ac844 = _0x2974;
  if (_0x416618[_0x3ac844(0x1d7)] === "image") {
    background(_0x3ac844(0x1e0)), redraw();
    var _0x10f2c2 = createImg(_0x416618[_0x3ac844(0x1dc)])[_0x3ac844(0x1d1)]();
    image(_0x10f2c2, 0x0, 0x0), image(mask, 0x0, 0x0);
  } else println(_0x3ac844(0x1d5));
}
function imageUpload(_0x17e526) {
  var _0x14e228 = _0x2974;
  img = loadImage(_0x17e526[_0x14e228(0x1dc)], function () {
    var _0x44df5c = _0x14e228;
    background(_0x44df5c(0x1e0)),
      redraw(),
      image(img, 0x0, 0x0, width, height),
      image(mask, 0x0, 0x0, width, height);
  });
}
