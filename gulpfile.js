var gulp = require ('gulp'),
	gutil = require ('gulp-util'), 
	concat = require('gulp-concat');

var jsSources = [
'development/customtheme-master/js/bootstrap.min.js','development/customtheme-master/js/main.min.js'
];

// gulp.task('log', function () {
// 	gutil.log('workflow demonstration');
// });

// gulp.task('coffee', function () {
// 	gulp.src('components/coffee/tagline.coffee').pipe (coffee({ bare: true})).on('error',gutil.log)
// });

gulp.task('js', function () {
	gulp.src(jsSources).pipe(concat('script.js')).pipe(gulp.dest('development/customtheme-master/js'))
});