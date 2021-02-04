const gulp = require("gulp");
const uglifycss = require("gulp-uglifycss");
const rename = require("gulp-rename");

const paths = {
	style: {
		src: "style.css",
		dest: "assets/css/",
	},
};
function cleancss() {
	return gulp
		.src("assets/css/style.css")
		.pipe(uglifycss())
		.pipe(rename("style.min.css"))
		.pipe(gulp.dest("assets/css/"));
}

exports.cleancss = cleancss;
