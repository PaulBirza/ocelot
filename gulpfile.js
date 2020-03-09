var gulp = require ('gulp'),
	gutil = require ('gulp-util'), 
	compass = require ('gulp-compass'), 
	concat = require('gulp-concat');

	// const { watch } = require('gulp');

var jsSources = [
'development/customtheme-master/js/bootstrap.js','development/customtheme-master/js/main.js'
];

var sassSources = [
'development/customtheme-master/sass/style.scss'];


gulp.task('js', function (done) {
	gulp.src(jsSources).pipe(concat('script.js')).pipe(gulp.dest('development/customtheme-master/js'))
	done();
});


gulp.task('compass', function (done) {
	gulp.src(sassSources).pipe(compass({
		sass:'development/customtheme-master/sass',
		style:'expanded'
	})).on('error', gutil.log).pipe(gulp.dest('development/customtheme-master'))
	done();
});


gulp.task('watch', function() {
    gulp.watch('development/customtheme-master/sass/partials/*.scss', gulp.series('compass'));
});


gulp.task('default', gulp.series('js', 'compass', 'watch'));

