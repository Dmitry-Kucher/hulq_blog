const gulp = require('gulp');
const postcss = require('gulp-postcss');
const cssnext = require('postcss-cssnext');
const postcssImport = require('postcss-import');

gulp.task('css', () => {
    const plugins = [
        postcssImport,
        cssnext
    ];

    return gulp.src('./styles/style.css')
        .pipe(postcss(plugins))
        .pipe(gulp.dest('./'));
});

gulp.task('watch', () => {
    gulp.watch('./styles/**/*.css', ['css']);
});
