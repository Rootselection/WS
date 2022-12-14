
const { src, dest, watch, parallel, series }  = require('gulp');
const scss                        = require('gulp-sass');
const concat                      = require('gulp-concat');
const autoprefixer                = require('gulp-autoprefixer');
const uglify                      = require('gulp-uglify');
const imagemin                    = require('gulp-imagemin');
const del                         = require('del');
const rename                      = require('gulp-rename');
const fileinclude                 = require('gulp-file-include');
const browserSync                 = require('browser-sync').create();

function browsersync() {
    browserSync.init({
        server: {
            baseDir: 'app/'
        },
        notify: false
    })
}

function html() {
    return src(['app/html/**/*.html', '!app/html/**/_*.html'])
        .pipe(fileinclude({
            prefix: '@@',
            basepath: '@file'
        }))
        .pipe(dest('./app'))
        // .pipe(browserSync.stream())
        .pipe(browserSync.reload({ stream: true }))
}

function styles() {
    return src('app/scss/*.scss')
    .pipe(scss({outputStyle: 'compressed'}))
    // .pipe(concat())
    .pipe(rename({
        suffix : '.min'
    }))
    .pipe(autoprefixer({
        overrideBrowserslist: ['last 10 versions'],
        grid: 'autoplace'
    }))
    .pipe(dest('app/css'))
    .pipe(browserSync.stream())
}

function scripts(){ 
    return src([
        // 'node_modules/jquery/dist/jquery.js',
        'app/js/main.js'
    ])
    .pipe(concat('main.min.js'))
    .pipe(uglify())
    .pipe(dest('app/js'))
    .pipe(browserSync.stream())
}

function images() {
    return src('app/images/**/*.*')
    .pipe(imagemin([
        imagemin.gifsicle({interlaced: true}),
        imagemin.mozjpeg({quality: 75, progressive: true}),
        imagemin.optipng({optimizationLevel: 5}),
        imagemin.svgo({
            plugins: [
                {removeViewBox: true},
                {cleanupIDs: false}
            ]
        })
    ]))
    .pipe(dest('dist/images'))
}

function build() {
    return src([
        'app/**/*.html',
        'app/css/style.min.css',
        'app/js/main.min.js'
    ], {base: 'app'})
    .pipe(dest('dist'))
}

function cleanDist(){
    return del('dist')
}
// return src(['app/html/**/*.html', '!app/html/**/_*.html'])

function watching() {
    watch(['app/**/*.html', '!app/*.html'], html);
    watch(['app/**/*.scss'], styles);
    watch(['app/js/**/*.js', '!app/js/main.min.js'], scripts);
    // watch(['app/**/*.html']).on('change', browserSync.reload);
}

exports.html           = html;
exports.styles         = styles;
exports.scripts        = scripts;
exports.browsersync    = browsersync;
exports.watching       = watching;
exports.images         = images;
exports.cleanDist      = cleanDist;
exports.build          = series(cleanDist, html, images, build);

exports.default        = parallel(styles, html, scripts, browsersync, watching)

