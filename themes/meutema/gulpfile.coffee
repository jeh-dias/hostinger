gulp = require 'gulp'

$ = require('gulp-load-plugins')({
  pattern: ['gulp-*', 'run-sequence']
});

sources =
  sass: 'assets/sass/*.scss'

destinations =
  css: 'assets/css'

###
  Compile SASS files

###
gulp.task 'style', ->
  gulp.src(sources.sass)
  .pipe($.sass({compass: true, style: 'expanded'}))
  .on('error', $.sass.logError)
  .pipe(gulp.dest(destinations.css))

###
  Keep watching files for changes to update them automatically
###
gulp.task 'watch', ->
  gulp.watch sources.sass, ['style']

gulp.task 'build', ['style']

###
  Default command to run when calling just "gulp"
###
gulp.task 'default', ['watch']
