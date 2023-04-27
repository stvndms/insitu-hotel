/** @type {import('tailwindcss').Config} */
module.exports = {
   content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    container: {
      center:true,
    },
    extend: {
      colors: {
      'body': '#F5F5F5',
      'orange': '#FF8833',
      'grey': '#7D7D7D',
      'dark': '#222529',
      'red': '#EB1D36',
      'blue': '#1363DF',
      'green': '#0CBC87',
      'gray1': '#F5F5F5',
    },
    fontFamily: {
      'poppins': ['Poppins']
      },
      screens: {
        '2xl': '1320px',
      },
    },
  },
  plugins: [],
}
