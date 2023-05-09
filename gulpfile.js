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
      whitelist: ['btn', 'fixed', 'msg-sucesso', 'consultor', 'fa-brands', 'fa-times', 'fa-instagram', 'fa-search', 'owl-carousel', 'depoimentos__carrossel', 'owl-stage', 'active', 'owl-drag', 'owl-loaded', 'owl-item', 'owl-stage-outer'],
      whitelistPatterns: [/wp-block-columns/, /^has/, /^depoimento/, /^modal/, /fa-times/, /fa-check/, /fa-search/],
      whitelistPatternsChildren: [/form$/, /consultor-modal/, /trial/, /fas/, /buscador/, /sugeridos/, /^owl/, /owl-stage-outer/, /owl-item/, /owl-loaded/, /owl-drag/]
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
    'src/js/blog-form.js'
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

gulp.task('default', [ 'watch', 'browser-sync']);