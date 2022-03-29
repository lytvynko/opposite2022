const gulp = require('gulp'),
      sass = require('gulp-sass') (require('sass')), 
      //browsersync = require('browser-sync').create(),
      imagemin = require('gulp-imagemin'),
      cleanCss = require('gulp-clean-css');;

function style() {
    //1. Where is my scss file
    return gulp.src("./sass/style.scss")
    //2. pass file through sass compiler
    .pipe(sass().on('error', sass.logError))
    //3. Where to save css file
    .pipe(gulp.dest('./'))
    //4. Stream changes to all browsers
    //.pipe(browsersync.stream());
}  

function image() {
    return gulp.src('./img/mini/*')
    .pipe(imagemin({
        verbose: true
    }))
    .pipe(gulp.dest('./img/mini'));
}
function cssmin() {
    return gulp.src(['style.css'])
        .pipe(cleanCss())
   .pipe(gulp.dest('./'));
}

function watch() {
    // browsersync.init({
    //     server: {
    //         baseDir: './src'
    //     }
    // });
    gulp.watch('./sass/**/*.scss', style);
//     gulp.watch('./**/*.html').on('change', browsersync.reload);
//     gulp.watch('./src/js/**/*.js').on('change', browsersync.reload);
 }
exports.style = style;
exports.image = image;
exports.cssmin = cssmin;
exports.watch = watch;