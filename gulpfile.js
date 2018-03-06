var gulp = require('gulp'),
    gutil = require('gulp-util'),
    concat = require('gulp-concat'),
    concatCSS = require('gulp-concat-css'),
    connect = require('gulp-connect'),
    uglifyJS = require('gulp-uglify'),
    uglifyCSS = require('gulp-uglifycss'),
    rename = require('gulp-rename'),
    purgeCSS = require('gulp-css-purge'),    
    replace = require('gulp-replace'),
    htmlmin = require('gulp-htmlmin');

var css_Zurb = ['_DEV/_css/F6/_components/foundation.css','_DEV/_css/F6/_components/atd.css'],
    css_Contact = ['_DEV/_css/specific/_components/inputs.css','_DEV/_css/specific/_components/contactForm.css'],
    css_Fancybox = ['_DEV/_css/fancyBox/_components/*.css'],
    css_Specific = ['_DEV/_css/specific/*.css'],
    js_Zurb = ['_DEV/_js/F6/_components/*.js'],
    js_Contact = ['_DEV/_js/specific/_components/contact.js','_DEV/_js/specific/_components/maskInput.js','_DEV/_js/specific/_components/contactSelects.js'],
    js_Fancybox = ['_DEV/_js/fancyBox/*.js'],
    js_Specific = ['_DEV/_js/specific/*.js'],
    images = ['_DEV/_img/**/*.{jpg,png,gif,svg,ico}'],
    phpSources = ['_DEV/**/*.php'];

gulp.task('css',function(){  
  gulp.src(css_Zurb)
  .pipe(concatCSS('Zurbed.css'))
  .pipe(gulp.dest('_DEV/_css/F6'))
  .pipe(purgeCSS({trim:true,shorten:true,verbose:true}))
  .pipe(uglifyCSS())
  .pipe(rename({suffix:'.min'}))
  .pipe(gulp.dest('_PRO/_css/F6'))
  gulp.src(css_Contact)
  .pipe(concatCSS('contact.css'))
  .pipe(gulp.dest('_DEV/_css/specific'))
  .pipe(purgeCSS())
  .pipe(rename({suffix:'.min'}))
  .pipe(gulp.dest('_PRO/_css/specific')) 
  gulp.src(css_Fancybox)
  .pipe(concatCSS('app3.css'))  
  .pipe(gulp.dest('_DEV/_css/fancyBox'))
  .pipe(purgeCSS({trim:true,shorten:true,verbose:true}))
  .pipe(uglifyCSS())
  .pipe(rename({suffix:'.min'}))
  .pipe(gulp.dest('_PRO/_css/fancyBox'))
  gulp.src(css_Specific)
  .pipe(uglifyCSS())
  .pipe(rename({suffix:'.min'}))
  .pipe(gulp.dest('_PRO/_css/specific'))
});
    
gulp.task('js',function(){    
  gulp.src(js_Zurb)
  .pipe(concat('Zurbed.js'))
  .pipe(gulp.dest('_DEV/_js/F6'))
  .pipe(uglifyJS())
  .pipe(rename({suffix:'.min'}))
  .pipe(gulp.dest('_PRO/_js/F6'))
  gulp.src(js_Contact)
  .pipe(concat('contact.js'))
  .pipe(gulp.dest('_DEV/_js/specific'))
  .pipe(uglifyJS())
  .pipe(rename({suffix:'.min'}))
  .pipe(gulp.dest('_PRO/_js/specific'))
  gulp.src(js_Fancybox)
  .pipe(uglifyJS())
  .pipe(rename({suffix:'.min'}))
  .pipe(gulp.dest('_PRO/_js/fancyBox'))
  gulp.src(js_Specific)
  .pipe(uglifyJS())
  .pipe(rename({suffix:'.min'}))
  .pipe(gulp.dest('_PRO/_js/specific'))
});

gulp.task('php', function(){
  gulp.src(phpSources)
  .pipe(replace('.css','.min.css'))
  .pipe(replace('.js','.min.js'))
  .pipe(htmlmin({caseSensitive:true,collapseWhitespace:true,removeComments:true,removeTagWhitespace:false}))
  //Restore original Jquery.min(-.min)
  .pipe(replace('.min.min', '.min'))
  //Restore original Google Analytics(-.min)
  .pipe(replace('analytics.min.js','analytics.js'))
  .pipe(gulp.dest('_PRO/'))
});

gulp.task('connect',function() {
  connect.server({
    port:8888,
    root:'_DEV',
    livereload: true
  });
});

gulp.task('img',function(){
  gulp.src(images)
  .pipe(gulp.dest('_PRO/_img/'))
})

gulp.task('watch',function(){
  gulp.watch(js_Zurb,['js']);
  // gulp.watch(js_Contact,['js']);
  gulp.watch(js_Fancybox,['js']);
  // gulp.watch(js_Specific,['js']);
  gulp.watch(css_Zurb,['css']);
  // gulp.watch(css_Contact,['css']);
  gulp.watch(css_Fancybox,['css']);
  // gulp.watch(css_Specific,['css']);
  gulp.watch(images,['img']);
  gulp.watch(phpSources,['php']);
});

gulp.task('default',['php','js','css','img','connect','watch']);