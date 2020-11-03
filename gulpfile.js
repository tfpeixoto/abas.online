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
    .pipe(gulp.dest('dist/wp-content/themes/abas/css'));
});

// gulp.task('purgecss', ['sass'], function () {
//   return gulp.src([
//     'src/css/*.css',
//   ])
//     .pipe(purgecss({
//       content: ['dist/wp-content/themes/abas/*.php', 'public/wp-content/themes/abas/template_parts/*.php']
//       // whitelist: [],
//       // whitelistPatterns: []
//     }))
//     .pipe(gulp.dest('dist/wp-content/themes/abas/css'))
// });

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
    // 'src/js/components/jquery-3.5.1.min.js',
    // 'src/js/components/popper-1.16.1.min.js',
    // 'src/js/components/bootstrap-4.5.0.min.js',
    // 'src/js/components/jquery.mask-1.14.16.min.js',
    // 'src/js/components/jquery.validate-1.19.2.min.js',
    'src/js/acoes.js',
  ])
    .pipe(concat('scripts.js'))
    .pipe(gulp.dest('src/js'))
    .pipe(rename('scripts.min.js'))
    .pipe(uglify())
    .pipe(gulp.dest('dist/wp-content/themes/abas/js'))
});

gulp.task('watch', function () {
  gulp.watch(['src/scss/**/*.scss'], ['sass']);
  gulp.watch('src/js/**/*.js', ['js']);
  gulp.watch('src/images/**/*', ['imagemin']);
});

gulp.task('default', ['sass', 'imagemin', 'js', 'watch', 'browser-sync']);