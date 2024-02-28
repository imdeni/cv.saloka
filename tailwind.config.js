/** @type {import('tailwindcss').Config} */
module.exports = {
  purge: ['./index.html', './src/**/*.{vue,js,ts,jsx,tsx}'],
  darkMode: false, // or 'media' or 'class'
  theme: {
    fontFamily: {
      sans: [
        "sans-serif",
        {
          fontFeatureSettings: '"cv11", "ss01"',
          fontVariationSettings: '"opsz" 32'
        },
      ],
      sans2: [
        "cursive",
        {
          fontFeatureSettings: '"cv11", "ss01"',
          fontVariationSettings: '"opsz" 32'
        },
      ],
    },

    extend: {
      width: {
        '%': '90%',
      },
      height: {
        '90%': '90%',
      },
      colors: {
        'saloka-hijau': '#169870',
        'saloka-orange': '#f39f19',
        'hitam': '#181818',
        'merah-gelap':'#8b1700',
      },
    },
  },
  variants: {
    extend: {},
  },
  plugins: [
    require('tailwindcss-animated'),
  ],
}


