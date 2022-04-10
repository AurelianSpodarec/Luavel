const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
            maxWidth: {
                '8xl'  : '86rem',
                '9xl'  : '90rem',
                '10xl' : '94rem',
            },
            colors: {
                brand: {
                    '500' : 'orange'
                }
            },

        },
    },

    plugins: [require('@tailwindcss/forms')],
};

// text-brand
// bg-color-brand

// Brand Blue: 5900ff