var gulp        = require('gulp');
var sass        = require('gulp-sass');
var concat      = require('gulp-concat');
var uglify      = require('gulp-uglify');
var flatten     = require('gulp-flatten');
var browserSync = require('browser-sync').create();

var basePaths = {
    src: './src/',
    dest: './statics/'
};

/**
 * All paths
 */
var paths = {
    sass: {
        src: [
            basePaths.src + 'sass/**/*.scss',
            basePaths.src + 'views/**/*.scss'
        ],
        styles: basePaths.src + 'sass/style.scss',
        dest: './'
    },
    scripts: {
        src: [
            basePaths.src + 'libs/angular.js',
            basePaths.src + 'libs/angular-route.js',
            basePaths.src + 'libs/underscore.js',
            basePaths.src + 'app.js',
            basePaths.src + 'config.js',
            basePaths.src + 'views/**/*.js',
            basePaths.src + 'components/**/*.js'
        ],
        dest: basePaths.dest + 'scripts/'
    },
    componentViews: {
        src: [
            basePaths.src + 'components/'
        ],
        dest: basePaths.dest + 'components/'
    },
    views: {
        src: [
            basePaths.src + 'views/'
        ],
        dest: './'
    }
};

/**
 * Copy tasks
 */
var copySass = function() {
    return gulp.src(paths.sass.styles)
        .pipe(sass())
        .pipe(gulp.dest(paths.sass.dest))
        .pipe(browserSync.stream());
};

var copyScripts = function() {
    return gulp.src(paths.scripts.src)
        .pipe(concat('scripts.js'))
        .pipe(uglify())
        .pipe(gulp.dest(paths.scripts.dest))
};

var copyViews = function() {
    return gulp.src(paths.views.src + '**/*.php')
        .pipe(flatten())
        .pipe(gulp.dest(paths.views.dest));
};
var copyComponentViews = function() {
    return gulp.src(paths.componentViews.src + '**/*.html')
        .pipe(flatten())
        .pipe(gulp.dest(paths.componentViews.dest));
};

gulp.task('copy-sass', copySass);
gulp.task('copy-scripts', copyScripts);
gulp.task('copy-views', copyViews);
gulp.task('copy-component-views', copyComponentViews);
gulp.task('copy', ['copy-views', 'copy-component-views', 'copy-sass', 'copy-scripts']);

/**
 * Watch task
 */
var watchTask = function() {
    browserSync.init({
        proxy: "frankiescookbook.dev"
    });
    gulp.watch(paths.sass.src, ['copy-sass']);
    gulp.watch(paths.scripts.src, ['copy-scripts']).on('change', browserSync.reload);
    gulp.watch(paths.views.src + '**/*.php', ['copy-views']).on('change', browserSync.reload);
    gulp.watch(paths.componentViews.src + '**/*.html', ['copy-component-views']).on('change', browserSync.reload);
};

gulp.task('watch', watchTask);

/**
 * Default task
 */
gulp.task('default', ['copy', 'watch']);
