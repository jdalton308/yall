
var gulp = require('gulp');
var gutil = require('gulp-util');
var sass = require('gulp-sass');
var concat = require('gulp-concat');
var uglify = require('gulp-uglify');
var htmlMin = require('gulp-htmlmin');
var fileInclude = require('gulp-file-include');
var server = require('gulp-server-livereload');

var styleFiles = [
      './src/scss/main.scss'
  ];
var jsFiles = [
  		'node_modules/jquery/dist/jquery.min.js',
  		'./src/js/**/*.js'
	];


gulp.task('styles', function() {
    gulp.src(styleFiles)
        .pipe(concat('style.css'))
        .pipe(sass())
        .pipe(gulp.dest('./'));
});

gulp.task('scripts', function(){
	gulp.src(jsFiles)
		.pipe(concat('app.js'))
		.pipe(uglify())
		.pipe(gulp.dest('./js/'))
		.on('error', gutil.log);
});

gulp.task('watch', function(){
    gulp.watch(['./src/scss/**/*.scss'], ['styles']);
    gulp.watch(['./src/js/**/*.js'], ['scripts']);
});

gulp.task('build', ['styles', 'scripts']);

gulp.task('default', ['build', 'watch']);