import gulp from 'gulp';
import sass from 'gulp-sass';
import cleanCSS from 'gulp-clean-css';
import del from 'del';

const paths = {
    styles: {
        src: './resources/scss/style.scss',
        dest: './public/assets/css',
        watch: './resources/scss/**/*.scss'
    }
};

export const clean = () => del([ 'assets/css' ]);

export function styles() {
    return gulp.src(paths.styles.src)
        .pipe(sass())
        .pipe(cleanCSS())
        .pipe(gulp.dest(paths.styles.dest));
}

function watch() {
    gulp.watch(paths.styles.watch, styles);
}

const build = gulp.series(clean, gulp.parallel(styles));
export { build }

const dev = gulp.series(build, gulp.parallel(watch));
export { dev }

gulp.task('default', build);
