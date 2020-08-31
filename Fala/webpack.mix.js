/* global path */
const mix = require('laravel-mix')
const argv = require('yargs').argv

/**
 * Generate input theme folder
 * @param path
 * @returns {string}
 */
function themeFolder(path) {
    argv.env['theme-folder'] = argv.env['theme-folder'] || 'themes/Fala/'
    return argv.env['theme-folder'] + path
}

mix.setPublicPath('public/themes/fala')

/*
 * Webpack configuration
 */
mix.webpackConfig(() => {
    return {
        resolve: {
            modules: [path.resolve(__dirname, 'node_modules'), 'node_modules']
        }
    }
})

/**
 * Mix build process
 */

mix.js([
    __dirname + '/node_modules/aos/dist/aos.js',
    __dirname + '/Assets/scripts/app.js',
    __dirname + '/Assets/scripts/custom.js',
    __dirname + '/Assets/scripts/scroll.js',
    __dirname + '/Assets/scripts/counter.js',
    __dirname + '/Assets/scripts/scroll-top.js',
    __dirname + '/Assets/scripts/affix-scroll-to.js',

    'vendor/proengsoft/laravel-jsvalidation/public/js/jsvalidation.min.js'
], 'public/themes/fala/scripts/app.js')


/**
 * Compile theme sass styles
 */
mix.sass(themeFolder('Assets/scss/app.scss'), 'css')

mix.styles([
    __dirname + '/node_modules/bootstrap/dist/css/bootstrap.min.css',
    __dirname + '/node_modules/bootstrap-social/bootstrap-social.css',
    __dirname + '/node_modules/animate.css/animate.min.css',
    __dirname + '/node_modules/slick-carousel/slick/slick.css',
    __dirname + '/node_modules/slick-carousel/slick/slick-theme.css',
    __dirname + '/node_modules/@fortawesome/fontawesome-free/css/all.css',
    __dirname + '/node_modules/aos/dist/aos.css',
    __dirname + '/node_modules/@fancyapps/fancybox/dist/jquery.fancybox.min.css',
    __dirname + '/Assets/css/fonts.css' // Adding custom fonts
], 'public/themes/fala/css/libraries.css')

/**
 * Copy img directory
 */
mix.copyDirectory(themeFolder('Assets/img'), 'public/themes/fala/img')

/**
 * Copy fonts directory
 */
mix.copyDirectory(themeFolder('Assets/fonts'), 'public/themes/fala/fonts')
    .copy(__dirname + '/node_modules/@fortawesome/fontawesome-free/webfonts', 'public/themes/fala/webfonts')

/**
 * Copy templates for TinyMCE editor
 */
mix.copyDirectory(themeFolder('Assets/admin/templates'), 'public/themes/fala/templates')
