import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */

const colors = require('tailwindcss/colors');

export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/*/.blade.php',
        './node_modules/flowbite/*/.js',
        './src/*/.{html,js}',
        './index.html', 
        './src/*/.{vue,js,ts,jsx,tsx}'
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', 'Inter var', ...defaultTheme.fontFamily.sans], // Gabungkan menjadi satu
            },
        },
    },

    plugins: [
        // require('daisyui'), // Uncomment jika perlu daisyUI
        require('flowbite-typography'),
        require('flowbite/plugin'),
       // require('daisyui'),
    ],
};