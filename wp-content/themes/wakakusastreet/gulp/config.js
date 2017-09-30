var path = require('path');

var dest = './'; // 出力先ディレクトリ
var src = './';  // ソースディレクトリ
var relativeSrcPath = path.relative('.', src); // 後々、つかいます

module.exports = {
  src: src,
  dest: dest,

  // 各タスクごとの設定をこの下に追加していく
  // stylus
  stylus: {
    src: [
      src + '/assets/stylus/**/!(_)*'
    ],
    dest: dest + '/',
    output: 'style.css',  // 出力ファイル名
    autoprefixer: {
      browsers: ['last 2 versions']
    },
    minify: false
  },

  // watch
  watch: {
    //js: relativeSrcPath + '/js/**',
    styl: src + '/assets/stylus/**'
    //jade: relativeSrcPath + '/www/**',
    //www: relativeSrcPath + '/www/**'
  },
}
