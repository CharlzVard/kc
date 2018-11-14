var gulp          = require('gulp'),
		gutil         = require('gulp-util' ),
		sass          = require('gulp-sass'),
		browserSync   = require('browser-sync'),
		concat        = require('gulp-concat'),
		uglify        = require('gulp-uglify'),
		cleancss      = require('gulp-clean-css'),
		rename        = require('gulp-rename'),
		autoprefixer  = require('gulp-autoprefixer'),
		notify        = require("gulp-notify"),
		deploy        = require('del'),
		imagemin      = require('gulp-imagemin'),
		pngquant      = require('imagemin-pngquant'),
		cache         = require('gulp-cache'),
		del           = require('del');

gulp.task('browser-sync', function() {
	browserSync({
		// server: {
		// 	baseDir: 'app'
		// },
		notify: false,
		open: false,
		proxy: 'kc-cinema.test', // instead SERVER
		port: 80,
		// online: false, // Work Offline Without Internet Connection
		// tunnel: true, tunnel: "projectname", // Demonstration page: http://projectname.localtunnel.me
	})
});

gulp.task('styles', function() {
	return gulp.src('resources/sass/**/*.sass')
	.pipe(sass({ outputStyle: 'expanded' }).on("error", notify.onError()))
	.pipe(rename({ suffix: '.min', prefix : '' }))
	.pipe(autoprefixer(['last 15 versions']))
	.pipe(cleancss( {level: { 1: { specialComments: 0 } } })) // Opt., comment out when debugging
	.pipe(gulp.dest('public/css'))
	.pipe(browserSync.stream())
});

gulp.task('js', function() {
	return gulp.src([
		// 'resources/libs/bootstrap/bootstrap.min.js',
		'resources/libs/jquery/dist/jquery.min.js',
		'resources/libs/parallax.js/parallax.min.js',
		'resources/libs/animation/animation.min.js',
		'resources/libs/modernizr/modernizr-touch.min.js',
		'resources/libs/fancybox/dist/jquery.fancybox.min.js',
		'resources/libs/owlcarousel/owl.carousel.min.js',
		'resources/libs/md5/md5.min.js',
		'resources/libs/captcha/captcha.js',
		
		'resources/js/common.js', // Always at the end
		])
	.pipe(concat('scripts.min.js'))
	.pipe(uglify()) // Mifify js (opt.)
	.pipe(gulp.dest('public/js'))
	.pipe(browserSync.reload({ stream: true }))
});

gulp.task('img', function() {
	return gulp.src('resources/img/**/*')
	.pipe(cache(imagemin({
		interlaced: true,
		progressive: true,
		svgoPlugins: [{removeViewBox: false}],
		use: [pngquant()]
	})))
	.pipe(gulp.dest('public/img'))
});

gulp.task('fonts', function() {
	return gulp.src('resources/fonts/**/*')
	.pipe(gulp.dest('public/fonts'))
});



gulp.task('clear', function() {
	return cache.clearAll();
});


gulp.task('watch', ['styles', 'js', 'img', 'fonts', 'browser-sync'], function() {
	gulp.watch(['resources/libs/**/*.css', 'resources/sass/**/*.sass'], ['styles']);
	gulp.watch(['resources/libs/**/*.js', 'resources/js/common.js'], ['js']);
	gulp.watch(['resources/img/**/*.jpg', 'resources/img/**/*.png'], ['img']);
	gulp.watch(['resources/fonts/**/*'], ['fonts']);
	gulp.watch('resources/views/**/*.blade.php', browserSync.reload);
});

gulp.task('default', ['watch']);
