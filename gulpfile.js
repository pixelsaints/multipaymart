"use strict";

const gulp = require("gulp");
const sass = require("gulp-dart-sass");
const postcss = require("gulp-postcss");
const autoprefixer = require("autoprefixer");
const tailwindcss = require("tailwindcss");
const concat = require("gulp-concat");
const uglify = require("gulp-uglify");
const browserSync = require("browser-sync").create();
const sourcemaps = require("gulp-sourcemaps");
const del = (...args) => import("del").then((mod) => mod.deleteAsync(...args));

/* ---------------------------------------------------
   PATHS
--------------------------------------------------- */

const proxyUrl = "http://localhost:8888/multipaymart/";

const paths = {
  styles: {
    src: "src/scss/**/*.scss",
    dest: "assets/css"
  },

  scripts: {
    vendor: [
      "src/js/vendors/jquery.min.js",
      // "src/js/vendor/swiper-bundle.min.js",
    ],
    init: "src/js/init.js",
    dest: "assets/js"
  },

  watchScripts: "src/assets/**/*.js"
};

/* ---------------------------------------------------
   CLEAN
--------------------------------------------------- */

function clean() {
  return del(["assets/css", "assets/js"]);
}

/* ---------------------------------------------------
   STYLES (Sass + Tailwind + Autoprefixer)
--------------------------------------------------- */

function styles() {
  return gulp
    .src("src/scss/style.scss")
    .pipe(sourcemaps.init())
    .pipe(
      sass.sync({ outputStyle: "expanded" }).on(
        "error",
        sass.logError
      )
    )
    .pipe(
      postcss([
        tailwindcss,
        autoprefixer
      ])
    )
    .pipe(sourcemaps.write("."))
    .pipe(gulp.dest(paths.styles.dest))
    .pipe(browserSync.stream());
}

/* ---------------------------------------------------
   SCRIPTS (Vendor bundle)
--------------------------------------------------- */

function vendorScripts() {
  return gulp.src(paths.scripts.vendor, { allowEmpty: true })
    .pipe(concat("bundle.js"))
    .pipe(gulp.dest(paths.scripts.dest))
    .pipe(browserSync.stream());
}


/* ---------------------------------------------------
   Init SCRIPT
--------------------------------------------------- */

function initScript() {
  return gulp.src(paths.scripts.init)
    .pipe(gulp.dest(paths.scripts.dest))
    .pipe(browserSync.stream());
}


/* ---------------------------------------------------
   SERVE
--------------------------------------------------- */

function serve() {
  browserSync.init({
    proxy: proxyUrl,
    open: false,
    notify: false,
    ghostMode: false
  });

  // Watch SCSS files
  gulp.watch(paths.styles.src, styles);

  // Watch JS files
  gulp.watch(paths.watchScripts, vendorScripts);
  gulp.watch(paths.scripts.init, initScript);

  // Watch PHP files and reload browser
  gulp.watch("./**/*.php").on("change", function (path) {
    styles();
    setTimeout(() => {
      browserSync.reload();
      console.log("PHP file changed:", path);
    }, 100);
  });
}

/* ---------------------------------------------------
   TASKS
--------------------------------------------------- */

exports.clean = clean;
exports.styles = styles;
exports.vendorScripts = vendorScripts;
exports.initScript = initScript;

exports.build = gulp.series(
  clean,
  gulp.parallel(
    styles,
    vendorScripts,
    initScript,
  )
);

exports.default = gulp.series(
  clean,
  gulp.parallel(
    styles,
    vendorScripts,
    initScript,
  ),
  serve
);