import defaultTheme from "tailwindcss/defaultTheme";
import forms from "@tailwindcss/forms";

/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
    "./storage/framework/views/*.php",
    "./resources/views/**/*.blade.php",
  ],

  theme: {
    extend: {
      colors: {
        "neon-green": "#65FA62",
        "dark-neon-green": "#3D9B3B",
      },
      fontFamily: {
        sans: ["Handjet", ...defaultTheme.fontFamily.sans],
      },
    },
  },

  plugins: [forms],
};
