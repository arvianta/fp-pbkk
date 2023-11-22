import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                primary: '#A1F65E',
                secondary: '#524FF5',
                dark1: '#6A6A6A',
                dark2: '#2C323A',
                dark3: '#1D2229',
                light1: '#F0F0F0',
            },
        },
    },

    plugins: [forms],
};
