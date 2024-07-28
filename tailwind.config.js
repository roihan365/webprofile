import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./node_modules/flowbite/**/*.js",
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            fontSize: {
                'h1': ['44px', {
                    lineHeight: '58px'
                }],
                'h2': ['36px', {
                    lineHeight: '48px'
                }],
                'h3': ['28px', {
                    lineHeight: '38px'
                }],
                'h5': ['20px', {
                    lineHeight: '26px'
                }],
                'p': ['16px', {
                    lineHeight: '24px'
                }],
            },
            colors: {
                ne: {
                    0: '#FCFDFD',
                    10: '#FAFAFB',
                    20: '#F7F8F9',
                    30: '#F4F5F6',
                    40: '#F2F3F4',
                    50: '#EFF0F2',
                    60: '#BFC0C2',
                    70: '#8F9091',
                    80: '#606061',
                    90: '#303030',
                },
                pr: {
                    0: '#D9DCF0',
                    10: '#B0B7E0',
                    20: '#8791D1',
                    30: '#5F6CC1',
                    40: '#3646B1',
                    50: '#0D21A1',
                    60: '#0A1A81',
                    70: '#081461',
                    80: '#050D40',
                    90: '#030720',
                },
            },
        },
    },

    plugins: [
        forms,
        require('flowbite/plugin')
    ],
};
