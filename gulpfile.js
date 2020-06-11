const {src, dest,series, watch, parallel} = require("gulp");
const sass = require("gulp-sass");
const autoprefixer = require("autoprefixer");
const postcss = require("gulp-postcss");
const sourcemaps = require("gulp-sourcemaps");
const concat = require("gulp-concat");

const files = {
	scssPath: "app/scss/**/*.scss",
	jsPath: "app/js/**/*.js"
};

// compile css Task
function scssTask() {
	//1- source file scss
	return src(files.scssPath)
	.pipe(sourcemaps.init()) // initialize sourcemaps first
	.pipe(sass().on("error", sass.logError)) // compile SCSS to CSS
	.pipe(postcss([autoprefixer()].concat())) // PostCSS plugins
	.pipe(sourcemaps.write(".")) // write sourcemaps file in current directory
	 // put final CSS in dist folder
	.pipe(dest("dist/css/"))
	
};

function jsTask() {
	return src([
		files.jsPath
	])
	// .pipe(concat("main.js"))
	.pipe(dest("dist/js/"));
}

function watchTask() {
	watch(
		[files.scssPath, files.jsPath],
		{interval: 1000, usePolling: true}, //Makes docker work
		series(parallel(scssTask, jsTask))
	);
}
exports.default = series(parallel(scssTask, jsTask), watchTask);
