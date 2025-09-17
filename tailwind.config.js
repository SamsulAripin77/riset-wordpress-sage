module.exports = {
  content: [
    './resources/views/**/*.blade.php', // Blade files
    './resources/scripts/**/*.js',      // Your custom JS
    './node_modules/flowbite/**/*.js',  // Flowbite
  ],
  theme: {
    extend: {
        fontFamily: {
            crimson: ['Crimson Text', 'serif'],
            roboto: ['Roboto']

      },
      colors: {
        primary: '#BFA76A',
        secondary: '#8C7B4F',
        surface: '#F8F5EF',
        background: '#FFFFFF',
      }
    },
  },
  plugins: [
    require('flowbite/plugin'),
  ],
};