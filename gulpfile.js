var gulp = require ('gulp'),
	gutil = require ('gulp-util'), 
	compass = require ('gulp-compass'), 
	concat = require('gulp-concat');

var jsSources = [
'development/customtheme-master/js/bootstrap.min.js','development/customtheme-master/js/main.min.js'
];

var sassSources = [
'development/customtheme-master/sass/style.scss'];

// gulp.task('log', function () {
// 	gutil.log('workflow demonstration');
// });

// gulp.task('coffee', function () {
// 	gulp.src('components/coffee/tagline.coffee').pipe (coffee({ bare: true})).on('error',gutil.log)
// });

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


// gulp.task('all', ['js', 'compass']);

gulp.task('all', gulp.parallel('js', 'compass'));

