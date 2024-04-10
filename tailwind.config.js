/** @type {import('tailwindcss').Config} */
export default {
  content: [
    './resources/**/*.blade.php',
  ],
  theme: {
    extend: {
        colors: {
            neutral: {
                black: '#263238',
                'd-grey': '#4D4D4D',
                grey: '#717171',
                'l-grey': '#89939E',
                'grey-blue': '#ABBED1',
                silver: '#F5F7FA',
                white: '#FFFFFF'
            },
            primary: '#4CAF4F',
            secondary: '#263238',
            info: '#2194F3',
            shade: {
                '100': '#43A046',
                '200': '#388E3B',
                '300': '#237D31',
                '400': '#1B5E1F',
                '500': '#103E13',
            },
            tint: {
                '100': '#66BB69',
                '200': '#81C784',
                '300': '#A5D6A7',
                '400': '#C8E6C9',
                '500': '#E8F5E9',
            },
            warning: '#FBC02D',
            error: '#E53835',
            success: '#2E7D31'
        },
    },
  },
  plugins: [],
}

