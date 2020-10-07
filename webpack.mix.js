const mix = require('laravel-mix');
const tailwindcss = require('tailwindcss');

mix.js('assets/js/admin.js', 'assets/dist/js')
    .sass('assets/scss/admin.scss', 'assets/dist/css').options({
        processCssUrls: false
    })
    .sass('assets/scss/modules-v1.scss', 'assets/dist/css').options({
        processCssUrls: false,
        postCss: [ tailwindcss('./tailwind.config.js') ]
    })
    .setPublicPath('assets/dist')
    .webpackConfig({
        externals: {
            "jquery": "jQuery"
        }
    });