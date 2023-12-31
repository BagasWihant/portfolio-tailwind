/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        screens: {
            'sss': '350px',
            'ssm': '450px',
            'sm': '640px',
            'md': '768px',
            'lg': '1024px',
            'xl': '1280px',
            '2xl': '1536px',
            '3xl': '1920px',
        },
        extend: {
            backgroundImage: (theme) => ({
                'image-dark':
                  "url('/public/img/dark.jpeg')",
                  'image-light':
                  "url('/public/img/logo.png')",
              }),
        },
    },
    plugins: [

      require('@tailwindcss/forms'),
    ],
    darkMode: 'class',

};
