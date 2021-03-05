var
gulp = require('gulp');
browserSync = require('browser-sync');
sass = require('gulp-sass');
imagemin = require('gulp-imagemin');
concat = require('gulp-concat');
rename = require('gulp-rename');
uglify = require('gulp-uglify-es').default;
purgecss = require('gulp-purgecss');
purgecssWordpress = require('purgecss-with-wordpress');

gulp.task('browser-sync', function () {
  var files = ["dist/wp-content/themes/abas/**/*.php", 'dist/wp-content/themes/abas/css/*.css'];

  browserSync.init(files, {
    proxy: "http://localhost/abas/dist/",
    notify: true,
  });
});

gulp.task('sass', function () {
  return gulp.src(['src/scss/**/*.scss'])
    .pipe(sass({ outputStyle: 'compressed' }).on('error', sass.logError)) // converter o Sass em CSS
    .pipe(gulp.dest('src/css'));
});

gulp.task('purgecss', ['sass'], function () {
  return gulp.src([
    'src/css/*.css',
  ])
    .pipe(purgecss({
      content: ['dist/wp-content/themes/abas/*.php', 'public/wp-content/themes/abas/template_parts/*.php'],
      whitelist: ['btn', 'fixed'],
      whitelistPatterns: [/wp-block-columns/, /^has/, /^depoimento/, /^modal/]
    }))
    .pipe(gulp.dest('dist/wp-content/themes/abas/css'))
});

/* Imagens */
gulp.task('imagemin', function () {
  return gulp.src('src/images/**/*')
    .pipe(imagemin({
      progressive: true,
      svgoPlugins: [
        { removeViewBox: false },
        { cleanupIDs: false }
      ]
    }))
    .pipe(gulp.dest('dist/wp-content/themes/abas/images'));
});

gulp.task('js', function () {
  return gulp.src([
    'src/js/acoes.js',
  ])
    .pipe(concat('scripts.js'))
    .pipe(gulp.dest('src/js'))
    .pipe(rename('scripts.min.js'))
    .pipe(uglify())
    .pipe(gulp.dest('dist/wp-content/themes/abas/js'))
});

gulp.task('watch', function () {
  gulp.watch(['src/scss/**/*.scss'], ['sass', 'purgecss']);
  gulp.watch('src/js/**/*.js', ['js']);
  gulp.watch('src/images/**/*', ['imagemin']);
});

gulp.task('default', ['sass', 'imagemin', 'purgecss', 'js', 'watch', 'browser-sync']);