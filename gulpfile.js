'use strict';

const { src, dest, watch, parallel } = require('gulp');
const sass = require('gulp-sass')(require('sass'));
const notify = require('gulp-notify');
const plumber = require('gulp-plumber');
const browserSync = require('browser-sync').create();
const sassLint = require('gulp-sass-lint');
const postcss = require('gulp-postcss');
const autoprefixer = require('autoprefixer');
const cssdeclsort = require('css-declaration-sorter');
const mqpacker = require('css-mqpacker');
const sourcemaps = require('gulp-sourcemaps');

// SassをコンパイルしてCSSを生成するタスク
const sassBuild = () => {
  return src(['./_src/sass/**/*.scss', './_src/sass/**/*.sass'])
    .pipe(plumber({
      errorHandler: function(err) {
        notify.onError({
          title: 'Sass Build Error',
          message: err.message
        })(err);
        this.emit('end');
      }
    }))
    .pipe(sassLint({
      configFile: '.scss-lint.yml'
    }))
    .pipe(sassLint.format())
    .pipe(sassLint.failOnError())
    .pipe(sourcemaps.init())
    .pipe(sass({outputStyle: 'expanded'}))
    .pipe(postcss([autoprefixer(), cssdeclsort({order: 'smacss'}), mqpacker()]))
    .pipe(sourcemaps.write('./'))
    .pipe(dest('./css'))
    .pipe(notify({
      title: 'Sass Build',
      message: 'Sass build complete'
    }))
    .pipe(browserSync.stream()); // 追加: Sassの変更があったらブラウザをリロード
};

// Sassファイルの変更を監視するタスク
const watchFiles = () => {
  watch(['./_src/sass/**/*.scss', './_src/sass/**/*.sass'], sassBuild); // 修正: sassBuildをwatch対象に追加
  watch(['./css/**/*.css', './**/*.html']).on('change', browserSync.reload);
};

// ブラウザの自動リロードを開始するタスク
const startBrowserSync = () => {
  browserSync.init({
    server: {
      baseDir: "./",
      index: "index.html"
    }
  });
};

// 圧縮したCSSを生成するタスク
const sassRelease = () => {
  return src(['./_src/sass/**/*.scss', './_src/sass/**/*.sass'])
    .pipe(plumber())
    .pipe(sass({outputStyle: 'compressed'}))
    .pipe(postcss([autoprefixer(), cssdeclsort({order: 'smacss'}), mqpacker()]))
    .pipe(dest('./css'));
};

// Gulpのデフォルトタスクにブラウザの自動リロードとSassファイルの監視を並行して実行するよう指定
exports.default = parallel(startBrowserSync, watchFiles);

// 圧縮したCSSを生成するタスクをエクスポート
exports.release = sassRelease;