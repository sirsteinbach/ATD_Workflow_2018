var gulp = require('gulp'),
    gutil = require('gulp-util'),
    gulpIF = require('gulp-if'),
    concat = require('gulp-concat'),
    connect = require('gulp-connect'),
    uglifyJS = require('gulp-uglify'),
    uglifyCSS = require('gulp-uglifycss'),
    rename = require('gulp-rename'),
    replace = require('gulp-replace'),
    htmlmin = require('gulp-htmlmin');

var js_Zurb = ['_DEV/_js/F6.2.4/*.js'],
    jsSpecific = ['_DEV/_js/specific/*.js'],
    css_Zurb = ['_DEV/_css/F6.2.4/*.css'],
    cssSpecific = ['_DEV/_css/specific/*.css'],
    cssADD = ['_DEV/_css/F6.2.4/atd.css'],
    images = ['_DEV/_img/**/*.{jpg,png,gif,svg,ico}'],
    phpSources = ['_DEV/**/*.php'];

gulp.task('js_Zurb',function(){
  gulp.src(js_Zurb)
  .pipe(concat('f6.js'))
  .pipe(gulp.dest('_DEV/_js/F6'))
  .pipe(uglifyJS())
  .pipe(rename({
    suffix: '.min',
  }))
  .pipe(gulp.dest('_PRO/_js/F6'))
  .pipe(connect.reload())
});

gulp.task('js',function(){
  gulp.src(jsSpecific)
  .pipe(uglifyJS())
  .pipe(rename({
    suffix: '.min',
  }))
  .pipe(gulp.dest('_PRO/_js/specific'))
  .pipe(connect.reload())
});

gulp.task('css_Zurb',function(){
  gulp.src(css_Zurb)
  .pipe(gulp.dest('_DEV/_css/F6'))
  .pipe(uglifyCSS())
  .pipe(rename({
    suffix: '.min',
  }))
  .pipe(gulp.dest('_PRO/_css/F6'))
  .pipe(connect.reload())
});

gulp.task('css',function(){
  gulp.src(cssSpecific)
  .pipe(uglifyCSS())
  .pipe(rename({
    suffix: '.min',
  }))
  .pipe(gulp.dest('_PRO/_css/specific'))
  .pipe(connect.reload())
});

gulp.task('php', function(){
  gulp.src(phpSources)
  .pipe(replace('/F6.2.4/', '/F6/'))
  .pipe(replace('.css', '.min.css'))
  .pipe(replace('.js', '.min.js'))
  .pipe(htmlmin({
    caseSensitive: true,
    collapseWhitespace: true,
    removeComments: true,
    removeTagWhitespace: true
  }))
  //Back to Original Jquery
  .pipe(replace('.min.min', '.min'))
  //Back to Original Google Analytics
  .pipe(replace('analytics.min.js', 'analytics.js'))
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

gulp.task('img',function(){
  gulp.src(images)
  .pipe(gulp.dest('_PRO/_img/'))
})

gulp.task('watch',function(){
  gulp.watch(js_Zurb,['js_Zurb']);
  gulp.watch(jsSpecific,['js']);
  gulp.watch(css_Zurb,['css_Zurb']);
  gulp.watch(cssSpecific,['css']);
  gulp.watch(phpSources,['php']);
});

gulp.task('default',['php','js','js_Zurb','css','css_Zurb','img','connect','watch']);