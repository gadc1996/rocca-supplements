let gulp = require("gulp");
let uglifycss = require("gulp-uglifycss");
let rename = require("gulp-rename");

//Sass is parsed with sass compiler
//gulp sass dont work that well
let paths = {
	styles: {
		src: "assets/css/style.css",
		dest: "assets/css",
	},
};

function css() {
	return gulp
		.src(paths.styles.css)
		.pipe(uglifycss())
		.pipe(rename("style.min.css"))
		.pipe(gulp.dest(paths.styles.dest));
}

exports.css = css;
