import {handleFormAjax} from './app';

document.addEventListener('DOMContentLoaded', () => {  
handleFormAjax({
    formSelector: '#form-register',
    dataBuilder: ($form) => $form.serialize() + '&action=custom_user_register&security=' + script_vars.ajax_nonce,
  });
});
