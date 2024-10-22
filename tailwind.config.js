import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
      ],
    theme: {
        
        extend: {
            colors: {
                'light':'#F3F3F3',
                'dark':'#252525',
                'primary-80' : '#498428',
                'primary' : '#336A29',
              },
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
                poppins: ['Poppins', 'sans-serif'],
            },
        },
    },
    plugins: [],
};
