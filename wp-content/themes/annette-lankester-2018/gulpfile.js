const gulp = require('gulp'),
      scss = require('gulp-sass'),
      concat = require('gulp-concat'),
      cleancss = require('gulp-clean-css'),
      autoprefix = require('autoprefixer'),
      postcss = require('gulp-postcss'),
      uglifyjs = require('gulp-uglify'),
      babel = require('gulp-babel');

const config = {
  paths: {
    scss: './scss/**/*.scss',
    js: './js/**/*.js'
  },
  autoprefix: {
    versions: 'last 4 versions',
  }
}

gulp.task('default', () => {
  gulp.watch('./build/scss/**/*.scss', ['sass']);
  gulp.watch('./build/JS/**/*.js', ['scripts']);
  gulp.watch('./**/**/*.php').on('change', BrowserSync.reload);
})

gulp.task('scss', () => {
  gulp.src(config.paths.scss)
    .pipe(sass().on('error' , console.error(error)))
    .pipe(concat('styles.min.css'))
    .pipe(postcss[autoprefix()])
    .pipe(cleancss())
    .pipe(gulp.dest('/dist/css'))
    .pipe(BrowserSync.stream());
})

gulp.task('js', () => {
  gulp.src(config.paths.js)
    .pipe(babel({
      presets: ['env']
    }))
    .on('error', console.error(error))
    .pipe(concat('scripts.min.js'))
    .pipe(uglifyjs())
    .pipe(gulp.dest('/dist/js'))
    .pipe(BrowserSync.stream())
})