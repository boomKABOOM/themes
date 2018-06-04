var gulp = require('gulp');
var sass = require('gulp-sass');

gulp.task('default', function(){
  gulp.start('sass');
});

gulp.task('sass', function(){
  return gulp.src('include/scss/**/*.scss')
   .pipe(sass())
   .on('error', function (err) {
      console.log(err.toString());
      this.emit('end');
    })
   .pipe(gulp.dest('include/css'))
});


gulp.task('watch', function(){
  gulp.watch('include/scss/**/*.scss', ['sass']);
  console.log('still watching');
});
