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


