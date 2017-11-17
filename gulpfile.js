var gulp = require('gulp'); 

var concat = require('gulp-concat');
var minifyCss = require('gulp-minify-css');
var plumber = require('gulp-plumber');
var uglify = require('gulp-uglify');
var rename = require('gulp-rename');

// 定义源代码的目录和编译压缩后的目录
var homeCssSrc = 'Public/home/css',
    homeJsSrc = 'Public/home/js',
    homeCssDist = 'Public/home/css',
    homeJsDist = 'Public/home/js',

    adminCssSrc = 'Public/admin/css',
    adminJsSrc = 'Public/admin/js',
    adminCssDist = 'Public/admin/css',
    adminJsDist = 'Public/admin/js';

// 压缩css、js
gulp.task('homeCss', function() {
	gulp.src(homeCssSrc+'/*.css')
		.pipe(minifyCss())
		.pipe(gulp.dest(homeCssDist));
});

gulp.task('homeJs', function() {
	gulp.src(homeJsSrc+'/*.js')
		.pipe(plumber())
		.pipe(uglify())
		.pipe(gulp.dest(homeJsDist));
});

gulp.task('adminCss', function() {
	gulp.src(adminCssSrc+'/*.css')
		.pipe(minifyCss())
		.pipe(gulp.dest(adminCssDist));
});

gulp.task('adminJs', function() {
	gulp.src(homeJsSrc+'/*.js')
		.pipe(plumber())
		.pipe(uglify())
		.pipe(gulp.dest(adminJsDist));
});

// 默认任务
gulp.task('default', function(){
    gulp.run('homeCss', 'homeJs', 'adminCss', 'adminJs');
});


