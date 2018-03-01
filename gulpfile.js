var gulp = require('gulp'),
    gutil = require('gulp-util'),
    concat = require('gulp-concat');

var jsFoundation = [
  '_DEV/_js/F6.2.4/foundation.js',
  '_DEV/_js/F6.2.4/what-input.js',
];

gulp.task('js',function(){
  gulp.src(jsFoundation)
  .pipe(concat('f6.js'))
  .pipe(gulp.dest('_DEV/_js/F6'))
});