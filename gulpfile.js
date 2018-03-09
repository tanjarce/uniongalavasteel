const gulp = require('gulp')
const browserSync = require('browser-sync')
const sass = require('gulp-sass')
const postcss = require('gulp-postcss')
const sourcemaps = require('gulp-sourcemaps')
const autoprefixer = require('autoprefixer')

// browser-sync

gulp.task('serve', ['sass'], () => {
    browserSync.init({
        proxy: "http://uniongalvasteel.dev.com",
        // port: 8080  
        // server: './app'
    })

    gulp.watch(['assets/scss/**/*.scss'], ['sass'])
    gulp.watch('application/**/**/*').on('change', browserSync.reload)
    gulp.watch('assets/js/**/*.js').on('change', browserSync.reload)
})


// compile sass to css with sourcemaps and auto prefix it

gulp.task('sass',() => {
    gulp.src('assets/scss/*.scss')
    .pipe(sourcemaps.init())
    .pipe(sass({
        // outputStyle: 'compressed'
        // includePaths: ['src/scss']
    })
    .on('error', sass.logError))
    .pipe(postcss([autoprefixer({grid: true})]))
    .pipe(sourcemaps.write('.'))
    .pipe(gulp.dest('assets/css'))
    .pipe(browserSync.stream())
})

gulp.task('default', ['serve']);