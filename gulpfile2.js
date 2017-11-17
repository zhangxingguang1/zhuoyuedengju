var gulp = require('gulp'); 

var concat = require('gulp-concat');
var plumber = require('gulp-plumber');
var clearnHtml = require("gulp-cleanhtml");
var minifyCss = require('gulp-minify-css');
var uglify = require('gulp-uglify');
var rename = require('gulp-rename');

// 定义源代码的目录和编译压缩后的目录
var html = 'Application/**/view/**';
    css = 'Public/**/css',
    js = 'Public/**/js',
    htmlDist = 'Application/**/view/**',
    cssDist = 'Public/**/css',
    jsDist = 'Public/**/js';


// 压缩html、css、js
gulp.task('html', function() {
	gulp.src(html+'/*.js')
		.pipe(clearnHtml())
		.pipe(gulp.dest(htmlDist));
});

gulp.task('css', function() {
	gulp.src(css+'/*.css')
		.pipe(minifyCss())
		.pipe(gulp.dest(cssDist));
});

gulp.task('js', function() {
	gulp.src(js+'/*.js')
		.pipe(plumber())
		.pipe(uglify())
		.pipe(gulp.dest(jsDist));
});
// 默认任务
gulp.task('default', function(){
    gulp.run('html', 'js', 'css');
});