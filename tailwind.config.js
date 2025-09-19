/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
        colors: {
            'primary': '#a48041',
            'primary-dark': '#6d552b',
            'danger': '#d9534f',
            'info': '#5bc0de',
            'warning': '#f0ad4e',
            'success': '#dff0d8',
        },
        fontFamily: {
            'sans': ['Lato', 'sans-serif'],
            'serif': ['Merriweather', 'serif'],
            'cursive': ['Berkshire Swash', 'cursive'],
        }
    },
  },
  plugins: [],
}
