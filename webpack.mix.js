const mix = require('laravel-mix');
// const postcss = require('postcss-import');
const tailwindcss = require('tailwindcss');
// const autoprefixer = require('autoprefixer');


mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
    .options({
        postCss: [ tailwindcss('./tailwind.config.js') ]
    });
    // .postCss('resources/scss/app.scss', 'public/css', [
    //     require('postcss-import'),
    //     require('tailwindcss'),
    //     require('autoprefixer'),
    // ]);


mix.disableSuccessNotifications();