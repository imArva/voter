/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./node_modules/flowbite/**/*.js"
  ],
  theme: {
    extend: {
      colors: {
        primary : '#171923',
        secondary : '#000000',
        tertiary : '#FFFFFF',
      },
    },
  },
  plugins: [
    require('flowbite/plugin')({
      charts: true,
  }),
  ],
}

