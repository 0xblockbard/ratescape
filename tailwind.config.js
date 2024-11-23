const colors = require('tailwindcss/colors');

module.exports = {
    purge: {
        content: [
            './resources/**/*.blade.php',
            './resources/**/*.js',
            './resources/**/*.vue',
            'node_modules/vue-tailwind/dist/*.js'
        ],
        options: {
            keyframes: true,
        }
    },
    darkMode: 'class', // or 'media' or 'class'
    theme: {
        screens: {
            'sm': '640px',
            // => @media (min-width: 640px) { ... }

            'md': '768px',
            // => @media (min-width: 768px) { ... }

            'lg': '1024px',
            // => @media (min-width: 1024px) { ... }

            'xl': '1280px',
            // => @media (min-width: 1280px) { ... }
            '2xl': '1560px',
            // => @media (min-width: 1560px) { ... }
            '3xl': '1840px',
            // => @media (min-width: 1840px) { ... }
        },
        borderWidth: {
            DEFAULT: '1px',
            '0': '0',
            '2': '2px',
            '3': '3px',
            '4': '4px',
            '6': '6px',
            '8': '8px',
        },
        extend: {
            scale: {
                '-1': '-1'
            },
            animation: {
                'right-to-left-back': 'moveRightToLeftAndBack 6s ease-in-out infinite',
                'top-to-down-back': 'moveTopToDownAndBack 6s ease-in-out infinite',
                'mint-machine': 'moveDiagonallyAndBack 6s ease-in-out infinite, genesisPondAnimation 3s ease-in-out infinite alternate',
            },
            transitionProperty: {
                'width': 'width'
            },
            gridTemplateRows: {
                'auto': 'auto',
                'fr': 'minmax(0, 1fr)',  // Add this line
            },
            gridTemplateColumns: {
                // Simple 16 column grid
                '16': 'repeat(16, minmax(0, 1fr))',
            },
            gridColumn: {
                'span-10': 'span 10 / span 10',
                'span-11': 'span 11 / span 11',
                'span-12': 'span 12 / span 12',
                'span-13': 'span 13 / span 13',
                'span-14': 'span 14 / span 14',
                'span-15': 'span 15 / span 15',
                'span-16': 'span 16 / span 16',
            },
            gridColumnStart: {
                '13': '13',
                '14': '14',
                '15': '15',
                '16': '16',
                '17': '17',
            },
            gridColumnEnd: {
                '13': '13',
                '14': '14',
                '15': '15',
                '16': '16',
                '17': '17',
            },
            colors: {
                rose: colors.rose,
                orange: colors.orange,
                sky: colors.sky,
                fuchsia: colors.fuchsia,
                blue: colors.blue,
                teal: colors.teal,
                cyan: colors.cyan,
                amber: colors.amber,
                rose: colors.rose,
                "neongreen": {
                    '50': '#99ff8a',
                    '100': '#86ff76',
                    '200': '#73ff62',
                    '300': '#60ff4e',
                    '400': '#4dff3a',
                    '500': '#39FF14', // Base color
                    '600': '#35e612',
                    '700': '#31cc10',
                    '800': '#2db30e',
                    '900': '#29a00c',
                  },
                "electricblue": {
                    '50': '#b3d4ff', 
                    '100': '#a0c9ff',
                    '200': '#8dbdff',
                    '300': '#7ab2ff',
                    '400': '#67a6ff',
                    '500': '#007BFF', // Base color
                    '600': '#006fe6',
                    '700': '#0063cc',
                    '800': '#0057b3',
                    '900': '#004b99',
                },
                'darkslate': {
                    '50': '#4a4a5e', // Lighter shade
                    '100': '#424254',
                    '200': '#3a3a4a',
                    '300': '#323240',
                    '400': '#2a2a36',
                    '500': '#1F1F2E', // Base color
                    '600': '#1b1b29',
                    '700': '#171724',
                    '800': '#13131f',
                    '900': '#0f0f1a', // Darker shade
                },
                'bracken': "#543C23",
                'paper': "#fae7d6",
                'cream': {
                    '50': '#FFFFFF',
                    '100': '#FDFCFA',
                    '200': '#FAF7F2',
                    '300': '#F7F3EB',
                    '400': '#F5F0E5',
                    '500': '#F4F1DE',
                    '600': '#EDE8D8',
                    '700': '#E5DFD1',
                    '800': '#DED6CA',
                    '900': '#D6CDC3',
                },
                'navy': {
                    '50': '#F2F4F8',
                    '100': '#E1E6EF',
                    '200': '#B2C2DA',
                    '300': '#839DC5',
                    '400': '#5478B0',
                    '500': '#25539B',
                    '600': '#1F4687',
                    '700': '#193870',
                    '800': '#132A59',
                    '900': '#0E1C42',
                },       
                'sienna': {
                    '50': '#fdeeeb',
                    '100': '#fbded7',
                    '200': '#f7bdb0',
                    '300': '#f29c89',
                    '400': '#ed7b62',
                    '500': '#E07A5F',
                    '600': '#d36754',
                    '700': '#b85948',
                    '800': '#9d4b3c',
                    '900': '#823d30',
                },
                'light-yellow-brown': '#e89e8a',
                'graphite': {
                    '50': '#E8E9ED',
                    '100': '#C7C9D3',
                    '200': '#A6A9B9',
                    '300': '#86899F',
                    '400': '#656985',
                    '500': '#3D405B',
                    '600': '#32334D',
                    '700': '#27283F',
                    '800': '#1C1D31',
                    '900': '#111123',
                },
                "charcoal": {
                    '50': '#a6b1b8', // Lighter shade
                    '100': '#96a3ab',
                    '200': '#86959e',
                    '300': '#768791',
                    '400': '#667984',
                    '500': '#36454F', // Base color
                    '600': '#313f49',
                    '700': '#2c3943',
                    '800': '#27233d',
                    '900': '#221d37', // Darker shade
                },
                'lightgray': {
                    '50': '#f9f9f9', 
                    '100': '#f6f6f6',
                    '200': '#f3f3f3',
                    '300': '#f0f0f0',
                    '400': '#ededed',
                    '500': '#D3D3D3', // Base color
                    '600': '#bfbfbf',
                    '700': '#ababab',
                    '800': '#979797',
                    '900': '#838383',
                },
            },
            fontSize: {
                'xss' : '0.5rem',
                'md': '.935rem',
                'ss': '.8rem'
            },
            fontFamily: {
                'bebas': ['Bebas Neue', 'sans-serif'],
                'roboto': ['Roboto', 'sans-serif'],
                'montserrat': ['Montserrat', 'sans-serif'],
                'bellMt': ['Bell MT', 'sans-serif'],
                'irishGrover': ['Irish Grover', 'sans-serif'],
                'electrolize': ['Electrolize', 'sans-serif']
            },
            height: {
                '10p': '10%',
                '20p': '20%',
                '30p': '30%',
                '40p': '40%',
                '50p': '50%',
                '60p': '60%',
                '70p': '70%',
                '80p': '80%',
                '90p': '90%'
            },
            width: {
                '18': '4.5rem',
                '52': '13rem !important',
                '10p': '10%',
                '20p': '20%',
                '30p': '30%',
                '40p': '40%',
                '50p': '50%',
                '60p': '60%',
                '70p': '70%',
                '80p': '80%',
                '90p': '90%'
            }
        },
    },
    variants: {
        extend: {
            backgroundColor: ["checked"],
            borderColor: ["checked"],
            inset: ["checked"],
            opacity: ['disabled'],
            cursor: ['disabled'],
            zIndex: ["hover", "active"],
            fill: ['hover', 'focus', 'group-hover'],
            display: ['group-hover'],
            typography: ['dark'],
            fontWeight: ["hover", "focus"]
        },
    },
    plugins: [
        require('@tailwindcss/forms'),
        require('@tailwindcss/aspect-ratio'),
        require('@tailwindcss/typography')
    ],
}
