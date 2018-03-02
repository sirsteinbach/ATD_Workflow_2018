var gulp = require('gulp'),
    gutil = require('gulp-util'),
    concat = require('gulp-concat'),
    connect = require('gulp-connect'),
    uglifyJS = require('gulp-uglify'),
    htmlmin = require('gulp-htmlmin');

var jsFoundation = ['_DEV/_js/F6.2.4/foundation.js','_DEV/_js/F6.2.4/what-input.js'];
var phpSources = ['_DEV/**/*.php'];

gulp.task('js',function(){
  gulp.src(jsFoundation)
  .pipe(concat('f6.js'))
  .pipe(uglifyJS())
  .pipe(gulp.dest('_DEV/_js/F6'))
  // .pipe(uglifyJS('f6.js'))
  .pipe(gulp.dest('_PRO/_js/F6'))
  .pipe(connect.reload())
});

gulp.task('php', function(){
  gulp.src(phpSources)
  .pipe(htmlmin({
    caseSensitive: true,
    collapseWhitespace: true,
  }))
  .pipe(gulp.dest('_PRO/'))
  .pipe(connect.reload())
});

gulp.task('connect', function() {
  connect.server({
    port:80,
    root:'_DEV',
    livereload: true
  });
});

gulp.task('watch',function(){
  gulp.watch(jsFoundation,['js']);
  gulp.watch(phpSources,['php']);
});

gulp.task('default',['php','js','connect','watch']);