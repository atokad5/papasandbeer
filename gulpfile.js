var 		    gulp = require('gulp'),
					  sass = require('gulp-sass'),
		 browserSync = require('browser-sync').create(),
				    beep = require('beepbeep'),
				 plumber = require('gulp-plumber'),
			sourcemaps = require('gulp-sourcemaps'),
		autoPrefixer = require('gulp-autoprefixer'),


createBeep = function(err){
	beep();
	console.log(err);
	this.emit('end')
},

siteConfig = {
	server: 'http://localhost:8888/papa-og-rosa/',
	sass: 'scss/**/*.scss',
	cssDest: 'assets/css/',
	jsFiles: 'assets/**/*.js',
	siteFiles: '**/*.php'
};


gulp.task('serve', ['sass'], function(){
	browserSync.init({
		proxy: siteConfig.server,
		// notify: false
	})

	gulp.watch(siteConfig.sass, ['sass']);
	gulp.watch(siteConfig.siteFiles).on('change', browserSync.reload)
	gulp.watch(siteConfig.jsFiles).on('change', browserSync.reload)
})

gulp.task('sass', function(){
	return gulp.src(siteConfig.sass)
	.pipe(plumber(createBeep))
	.pipe(sourcemaps.init())
	.pipe(sass())
	.pipe(autoPrefixer({
			browsers: ['> 0.5%', 'last 5 versions']
		}))
	.pipe(sourcemaps.write())
	.pipe(gulp.dest(siteConfig.cssDest))
	.pipe(browserSync.stream())
})

gulp.task('default', ['serve'])