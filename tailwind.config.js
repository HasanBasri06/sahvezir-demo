/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      boxShadow: {
        'rS': 'inset 25px 0px 0 0px rgba(177,225,250,1)',
        'Rs': '2px 0px 4px 0 rgba(0,0,0,0.1)'
      },
      backgroundImage:{
        'footerImg': "url('/images/footer.jpg')"
      },
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