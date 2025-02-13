import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            width: {
                '72': '18rem',   // 288px
                '80': '20rem',   // 320px
                '96': '24rem',   // 384px
                '104': '26rem',  // 416px
                '112': '28rem',  // 448px
                '120': '30rem',  // 480px
                '128': '32rem',  // 512px
                '136': '34rem',  // 544px
                '144': '36rem',  // 576px
                '152': '38rem',  // 608px
                '160': '40rem',  // 640px
                '168': '42rem',  // 672px
                '176': '44rem',  // 704px
                '184': '46rem',  // 736px
                '192': '48rem',  // 768px
                '200': '50rem',  // 800px
              },
        },
    },
    plugins: [],
};
