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
      }
    },
  },
  plugins: [
    require('flowbite/plugin'),
  ],
};