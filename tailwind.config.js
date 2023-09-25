/** @type {import('tailwindcss').Config} */
export default {
    presets: [
        require('./vendor/wireui/wireui/tailwind.config.js')
    ],
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./node_modules/flowbite/**/*.js",
        './vendor/wireui/wireui/resources/**/*.blade.php',
        './vendor/wireui/wireui/ts/**/*.ts',
        './vendor/wireui/wireui/src/View/**/*.php'
    ],
    theme: {
        extend: {
            colors: {
                'uo-blue': '#6500d2',
                'uo-dark-blue': '#2e1d69',
                'uo-yellow': '#f58920',
                'uo-sky': '#2e1d69',
                'uo-red': '#ff4295',
                'uo-green': '#0dbecc',
                'uo-pink': '#ff4295',
            }
        },
        fontFamily: {
            'Rubik': ['\'Rubik\', sans-serif;'],
            'body': ['Rubik'],
        },
    },
    plugins: [
        require('flowbite/plugin')
    ],
}

