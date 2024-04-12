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
        fontSize: {
            'headlines-1': ['64px', {
                lineHeight: '76px',
                fontWeight: 600
            }],
            'headlines-2': ['36px', {
                lineHeight: '36px',
                fontWeight: 700
            }],
            'headlines-3': ['28px', {
                lineHeight: '28px',
                fontWeight: 700
            }],
            'headlines-4': ['20px', {
                lineHeight: '28px',
                fontWeight: 600
            }],
            'body-regular-1': ['18px', {
                lineHeight: '28px',
                fontWeight: 400
            }],
            'body-regular-2': ['16px', {
                lineHeight: '24px',
                fontWeight: 400
            }],
            'body-regular-3': ['14px', {
                lineHeight: '20px',
                fontWeight: 400
            }],
            'body-regular-4': ['12px', {
                lineHeight: '16px',
                fontWeight: 400
            }],
            'body-medium-1': ['18px', {
                lineHeight: '28px',
                fontWeight: 500
            }],
            'body-medium-2': ['16px', {
                lineHeight: '24px',
                fontWeight: 500
            }],
            'body-medium-3': ['14px', {
                lineHeight: '20px',
                fontWeight: 500
            }],
            'body-medium-4': ['12px', {
                lineHeight: '16px',
                fontWeight: 500
            }]
        },
        boxShadow: {
            'xs': '0 2px 4px 0 rgba(171, 190, 209, 0.6)',
            'sm': '0 4px 8px 0 rgba(171, 190, 209, 0.4)',
            'md': '0 6px 12px 0 rgba(171, 190, 209, 0.3)',
            'lg': '0 8px 16px 0 rgba(171, 190, 209, 0.4)',
            'xl': '0 16px 32px 0 rgba(171, 190, 209, 0.3)',
        }
    },
  },
  plugins: [],
}

