module.exports = {
  content: [
    './resources/views/**/*.blade.php', // Blade files
    './resources/scripts/**/*.js', // Your custom JS
    './node_modules/flowbite/**/*.js', // Flowbite
  ],
  theme: {
    extend: {
      fontFamily: {
        crimson: ['Crimson Text', 'serif'],
        roboto: ['Roboto'],
        aspec: ['Aspec Range'],
      },
    },
  },
  plugins: [require('flowbite/plugin')],
};
