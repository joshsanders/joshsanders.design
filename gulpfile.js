var gulp = require('gulp'),
	uglify = require('gulp-uglify'),
	sass = require('gulp-sass'),
	cleanCSS = require('gulp-clean-css'),
	htmlMin = require('gulp-htmlmin'),
	imageMin = require('gulp-imagemin'),
	sourcemaps = require('gulp-sourcemaps'),
	autoprefixer = require('gulp-autoprefixer'),
	browserSync = require('browser-sync').create();


// vars to handle file pathing
var src_scss = './src/scss/**/*.scss',
	dist_css = './dist/css',

	src_js = './src/js/**/*.js',
	dist_js = './dist/js',
	
	src_index = './src/index.php',
	dist_index = './dist/',
	src_html = './src/work/*.php',
	dist_html = './dist/work/',

	src_partials = './src/partials/**/*.*',
	dist_partials = './dist/partials/',

	src_img = './src/img/**/*',
	dist_img = './dist/img/',
	all_html = './src/**/*.html';



// |=======================================
// | Browswer-sync                   
// |=======================================

// Browser-sync for live reloads
// ---
// Set up a test server and open in browser

gulp.task('serve', function(){
	browserSync.init({
		// server: './dist/'

		proxy: 'localhost:8888/joshsanders.design/dist/'	//this url path proxies to where MAMP is running a local virtual server 
	});
});


// |=======================================
// | HTML Tasks                   
// |=======================================

// Html task for [src -> dist] (should minify for final build, currently just clones to ./dist/)
// ---
// watches directory for changes of desired files and copies to 'dist' folder

gulp.task('html-index', function() {
  return gulp.src( src_index )
    // .pipe(htmlMin({
    // 	collapseWhitespace: true
    // }))
    .pipe(gulp.dest( dist_index ))
    .pipe(browserSync.stream());
});

gulp.task('html-projects', function() {
  return gulp.src( src_html )
    // .pipe(htmlMin({
    // 	collapseWhitespace: true
    // }))
    .pipe(gulp.dest( dist_html ))
    .pipe(browserSync.stream());
});

// gulp.task('html', ['html-index', 'html-projects']);



// |=======================================
// | Partials Task                   
// |=======================================

// Task for [src -> dist] (should minify for final build, currently just clones to ./dist/)

gulp.task('partials', function() {
  return gulp.src( src_partials )
    // .pipe(htmlMin({
    // 	collapseWhitespace: true
    // }))
    .pipe(gulp.dest( dist_partials ))
    .pipe(browserSync.stream());
});




// |=======================================
// | Styles Task                   
// |=======================================

// ---
// Compiles Sass(.scss), generates sourcemaps, minifies outputted css files before sending 
// them to desired destination folder 

gulp.task('styles', function(){

	return gulp.src( src_scss )
		.pipe(sourcemaps.init())
		.pipe(sass().on('error', sass.logError))
		.pipe(autoprefixer())
		.pipe(cleanCSS())
		.pipe(sourcemaps.write())
		.pipe(gulp.dest( dist_css ))
		.pipe(browserSync.stream());

});


// |=======================================
// | IMG Compression                
// |=======================================

// ---
// Compresses images and sends them to `dist/img/...`

gulp.task('img-compress', function() {
	return gulp.src( src_img )
		.pipe(imageMin())
		.pipe(gulp.dest( dist_img ))
		.pipe(browserSync.stream());
});


// |=======================================
// | Scripts Task                   
// |=======================================

// ---
// Minifies js files and sends them to desired destination folder 

gulp.task('scripts', function(){

	return gulp.src( src_js )
		.pipe(sourcemaps.init())
		.pipe(uglify())
		.pipe(gulp.dest( dist_js ))
		.pipe(browserSync.stream());

});


// |=======================================
// | Watch task                   
// |=======================================

// ---
// watches directory for changes, and applies the Styles and Scripts tasks stated above

gulp.task('watch', function(){

	gulp.watch( src_scss, ['styles']);
	// gulp.watch( src_img, ['img-compress']);
	gulp.watch( src_partials, ['partials']);
	gulp.watch( src_js, ['scripts']);
	gulp.watch( src_index, ['html-index']).on('change', browserSync.reload);
	gulp.watch( src_html, ['html-projects']).on('change', browserSync.reload);

});


// Run task (default)
// ---
// run default gulp task with desired tasks

gulp.task('default', ['serve', 'watch']);

