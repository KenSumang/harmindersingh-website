/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './**/*.php',
    '!./node_modules/**',
    './assets/js/**/*.js',
  ],
  theme: {
    screens: {
      sm: '575px',
      md: '767px',
      lg: '991px',
      xl: '1199px',
      '2xl': '1280px',
      '3xl': '1540px',
    },
    extend: {
      colors: {
        primary: '#0A1930',
        'light-primary': '#486284',
        'extra-light-primary': '#8CA2C0',
        'blue-accent': '#003366',
        'gold-accent': '#c5a059',
        'secondary-white': '#f4f4f4',
      },
      fontFamily: {
        Playfair: ['Playfair Display', 'serif'],
        DMSans: ['DM Sans', 'sans-serif'],
        Lato: ['Lato', 'sans-serif'],
        Montserrat: ['Montserrat', 'sans-serif'],
      },
    },
  },
  plugins: [],
}