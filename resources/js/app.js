import.meta.glob([
  '../images/**',
  '../fonts/**',
]);

import 'flowbite';

import $ from 'jquery';
window.$ = $;
window.jQuery = $;

import Alpine from 'alpinejs'
 
window.Alpine = Alpine
 
Alpine.start()

import '../css/app.scss';


function showFieldError(form, field, msg) {
  const input = form.find(`[name="${field}"]`);
  if (input.length) {
    input.addClass('has-error');
    const errorEl = `<div class="error-text text-sm text-red-600 mt-1">${msg}</div>`;
    input.after(errorEl);
  }
}

const validator = {
  show(form, response) {
    console.log('validasi nih')
    console.log(form)
    console.log(response)
    if (!response?.data?.errors) return;
    Object.entries(response.data.errors).forEach(([field, msg]) => {
      showFieldError(form, field, msg);
    });
  },
  clear() {
    console.log('bersiin nih')
    $('.error-text').remove();
    $('.has-error').removeClass('has-error');
    $('#global-error').remove();
  },
};

// ⚠️ Ini membuat validator global (terlihat dari non-module)
window.validator = validator;



