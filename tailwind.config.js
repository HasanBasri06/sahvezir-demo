/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors:{
        'darkBlue':'#010326'
      },
      height:{
        '5Y':'500px',
        '6.5Y':'650px',
        '8Y':'800px'
      },
      fontFamily:{
        'ultra':'Ultra'
      }
    },
  },
  plugins: [],
}