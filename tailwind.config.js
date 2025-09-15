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
        primary: '#1E3A8A',
        secondary: '#3B82F6',
        accent: '#F59E0B',
        neutral: '#374151',
        background: '#F9FAFB',
        surface: '#FFFFFF',
      }
    },
  },
  plugins: [
    require('flowbite/plugin'),
  ],
};