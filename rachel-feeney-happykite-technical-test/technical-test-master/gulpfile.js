// Init
/**
 * if things don't work make sure to install gulp-cli globally on machine
 */
 const { src, dest, watch, series, parallel } = require('gulp');
 const sourcemaps = require('gulp-sourcemaps');
 const autoprefixer = require('autoprefixer');
 const cssnano = require('cssnano');
 const sass = require('gulp-sass');
 const postcss = require('gulp-postcss');
 const imagemin = require('gulp-imagemin');
 const cache = require('gulp-cache');
 const clean = require('gulp-clean');
 const rename = require('gulp-rename');
 const path = require('path');
 
 // File paths
 const config = {
     dist: 'dist',
     sass: 'assets/sass/**/*.scss',
     _sass_path: 'dist/css',
     css_path:'dist/css-maps/',
     img: 'assets/img/**/*.+(png|jpg|gif|svg)',
     img_path: 'dist/img'
 };
 
 // Tasks
 function compileSass(){
     return src(config.sass)
         .pipe(sourcemaps.init())
         .pipe(sass().on('error', handleCSSError ))
         .pipe(postcss([ autoprefixer(), cssnano() ]))        
         .pipe(rename(function (path) {
             if( ! path.basename.includes( 'style' ) ){ // output styles that aren't style.css to the dist folder
                 path.dirname = config._sass_path ;
             }
         }))
         .pipe(sourcemaps.write(config.css_path))
         .pipe(dest('./')
     );
 }
 
 function imgCompress(){
     return src( config.img )
         .pipe(cache(imagemin({ interlaced: true })))
         .pipe(dest(config.img_path));
 }
 
 function refreshingFiles(){
     return src(config.dist, {read: false})
         .pipe(clean({force: true}));
 }
 
 function watchFiles(){
     watch( config.sass, compileSass );
     watch( config.img, imgCompress );
     console.log('Watching.......');
 }
 
 // error handling
 function handleCSSError (error) {
     console.log(error.message.toString());
     this.emit('end');
 }
 
 // gulp task function export
 exports.default = series(
     parallel(compileSass, imgCompress),
     watchFiles
 );
 exports.watch = watchFiles;
 exports.sass = compileSass;
 exports.img = imgCompress;
 exports.clean = refreshingFiles;