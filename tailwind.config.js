/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      "colors": {
        "Dark": "#27272e",
        "Primary": "#5956E9",
        "Grey": "#999fae",
        "Accent 01": "#ffdc60",
        "Accent 02": "#fab8c4",
        "Light": "#ecf2f6",
        "Chart 01": "#896ba7",
        "Chart 02": "#badeff",
        "Link": "#2522ba",
      },
    },
  },
  plugins: [
    require('@tailwindcss/container-queries'),
    require('@tailwindcss/forms'),
    require('@tailwindcss/aspect-ratio'),
  ],
}