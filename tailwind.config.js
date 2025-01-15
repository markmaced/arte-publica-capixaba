const theme = require('./theme.json');
const tailpress = require("@jeffreyvr/tailwindcss-tailpress");

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './*.php',
        './**/*.php',
        './resources/css/*.css',
        './resources/js/*.js',
        './safelist.txt'
    ],
    theme: {
        container: {
            padding: {
                DEFAULT: '1rem',
                sm: '2rem',
                lg: '0rem'
            },
        },
        extend: {
            // colors: tailpress.colorMapper(tailpress.theme('settings.color.palette', theme)),
            fontSize: tailpress.fontSizeMapper(tailpress.theme('settings.typography.fontSizes', theme)),
            colors: {
                'custom-gray': '#6B6B6B',
                'medium-gray': '#E6E6E6',
                'light-gray': '#F0F0F0',
                'logo-blue': '#378CCA',
                'title-gray': '#272727',
                'subtitle-gray': '#4D4D4D',
                'grafitti': '#666666',
                'preto-50': '#808080',
                'preto-60': '#666666'
            },
            fontFamily: {
                lato: ['Lato', 'sans-serif'],
                inter: ['Inter', 'sans-serif'],
            },
            boxShadow: {
                'soft-shadow': '0px 3px 16px 0px rgba(139, 139, 139, 0.2)',
                'common-shadow': '0px 4px 8px 0px #00000033',
            },
            height: {
                'custom': '26.25rem'
            }
        },
        screens: {
            'xs': '480px',
            'sm': '600px',
            'md': '782px',
            'tainacan': '1146px',
            'tainacan-lg': '1506px',
            'lg': tailpress.theme('settings.layout.contentSize', theme),
            'xl': tailpress.theme('settings.layout.wideSize', theme),
            '2xl': '1440px'
        }
    },
    plugins: [
        tailpress.tailwind
    ],
    variants: { extend: { display: ["group-hover"] } }
};
