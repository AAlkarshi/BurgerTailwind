/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./index.php"],
  theme: {
    extend: {

      colors: {
        primary:"#E7272D",
        secondary:"#FBB217",
      },

      fontFamily: {
        arvo: ['Arvo', 'serif'],
        lato: ['Lato', 'sans-serif'],
      },


    },
  },
  plugins: [],
}

