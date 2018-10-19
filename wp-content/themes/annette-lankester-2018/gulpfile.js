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
  gulp.watch('./scss/**/*.scss', ['scss']);
  gulp.watch('./js/**/*.js', ['scripts']);
})

gulp.task('scss', () => {
  gulp.src(config.paths.scss)
    .pipe(scss().on('error' , scss.logError))
    .pipe(concat('styles.min.css'))
    .pipe(postcss([autoprefix()]))
    .pipe(cleancss())
    .pipe(gulp.dest('./dist/css'))
})

gulp.task('scripts', () => {
  gulp.src(config.paths.js)
    .pipe(babel({
      presets: ['@babel/preset-env']
    }))
    .on('error', error => console.error(error))
    .pipe(concat('scripts.min.js'))
    .pipe(uglifyjs())
    .pipe(gulp.dest('./dist/js'))
})