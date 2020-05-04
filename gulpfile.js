const autoprefixer  = require('gulp-autoprefixer')
// const babel         = require('gulp-babel')
const plumber       = require('gulp-plumber')
const browserSync   = require('browser-sync')
const concat        = require('gulp-concat')
const connect       = require('gulp-connect-php')
const cssnano       = require('gulp-cssnano')
const gulp          = require('gulp')
const sass          = require('gulp-sass')
const sourcemaps    = require('gulp-sourcemaps')
const uglify        = require('gulp-uglify')

function styles(done) {
  gulp
    .src('./scss/**/*.scss')
    .pipe(plumber())
    .pipe(sourcemaps.init())
    .pipe(sass().on('error', sass.logError))
      .pipe(autoprefixer('last 2 version'))
      // .pipe(cssnano())
    .pipe(sourcemaps.write())
    .pipe(gulp.dest("./css/"))
  done()
}

function scripts(done) {
  gulp
    .src([
      './javascript/*',
    ])
    .pipe(plumber())
    .pipe(sourcemaps.init())
    .pipe(concat('main.js'))
    // .pipe(babel({
    //   presets: [
        // '@babel/preset-env',
        // "env"
        // {
        //     "targets": {
        //         "browsers": ["last 2 versions", "ie >= 11"],
        //     },
            // "useBuiltIns": "usage"
        // }
    //   ]
    // }))
    // .pipe(uglify())
    .pipe(sourcemaps.write())
    .pipe(gulp.dest("./js"))
  done()
 }

// function scripts(done) {
//   gulp
//     .src(
//       [
//         './scripts/script.js',
//         './scripts/secondScript.js'
//       ]
//     )
//     .pipe(concat('main.js'))
//     // .pipe(babel({
//     //   presets: ['env']
//     // }))
//     .pipe(gulp.dest("./js"))
//   done()
// }

function watchFiles() {
  gulp.watch('./scss/**/*.scss', gulp.series(styles, browserSyncReload))
  gulp.watch('./javascript/**/*.js', gulp.series(scripts, browserSyncReload))
  gulp.watch([
      './**/*.html',
      './**/*.php'
    ],
    browserSyncReload)
}

function browserSyncServer() {
  connect.server({
    port: 8010,
    keepalive: true,
  });
  browserSync.init({
    proxy: '127.0.0.1:8010',
  })
}

function browserSyncReload(done) {
  browserSync.reload();
  done();
}

gulp.task('styles', styles)
gulp.task('scripts', scripts)
gulp.task('watch', gulp.parallel(browserSyncServer, watchFiles))

gulp.task('default', gulp.series(styles, scripts, gulp.parallel(browserSyncServer, watchFiles)))
