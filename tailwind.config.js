import defaultTheme from 'tailwindcss/defaultTheme';
const defaultTheme = require('tailwindcss/defaultTheme')

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
        'node_modules/flowbite/**/*.js',
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ['InterVariable', ...defaultTheme.fontFamily.sans],
            },
            blur: {
                'custom': '0.5px',
            },
            mixBlendMode: {
                'blend-with-background': 'multiply',
            },
            textShadow: {
                'purple': '0px 2px 4px rgba(128, 0, 128, 0.5)', 
            },
            dropShadow:{
                'purple': '0px 2px 4px rgba(128, 0, 128, 0.5)',
                'white': '0px 2px 4px rgba(255, 255, 255, 1)',
            },
            
            animation: {
                fadeIn: 'fadeIn 3s ease-out',
                'slide-in-left': 'slideInLeft 0.5s ease-out forwards',
                'slide-out-left': 'slideOutLeft 0.5s ease-in forwards',
                'slide-in-right': 'slideInRight 0.5s ease-out forwards',
                'slide-out-right': 'slideOutRight 0.5s ease-in forwards',
            },
            keyframes: {
                fadeIn: {
                    '0%': { opacity: '0' },
                    '100%': { opacity: '1' },
                },
                slideInLeft: {
                  '0%': { transform: 'translateX(100%)', opacity: '0' },
                  '100%': { transform: 'translateX(0)', opacity: '1' },
                },
                slideOutLeft: {
                  '0%': { transform: 'translateX(0)', opacity: '1' },
                  '100%': { transform: 'translateX(-100%)', opacity: '0' },
                },
                slideInRight: {
                  '0%': { transform: 'translateX(-100%)', opacity: '0' },
                  '100%': { transform: 'translateX(0)', opacity: '1' },
                },
                slideOutRight: {
                  '0%': { transform: 'translateX(0)', opacity: '1' },
                  '100%': { transform: 'translateX(100%)', opacity: '0' },
                },
            },
            fontFamily: {
                sans: ['InterVariable', ...defaultTheme.fontFamily.sans],
            },
        },
    },
    plugins: [
        require('flowbite/plugin'),
        require('tailwindcss-textshadow'),
        require('@tailwindcss/forms'),
        function ({ addComponents }) {
            addComponents({
              '.group-focus .dropdown-pages': {
                display: 'block',
              },
            });
        },
    ],
};
