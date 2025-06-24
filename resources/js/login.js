console.log('halo ini dari login')

import {handleFormAjax} from './app.js';

document.addEventListener('DOMContentLoaded', () => {

  handleFormAjax({
      formSelector: '#form-login',
      dataBuilder: ($form) => $form.serialize() + '&action=custom_user_login&security=' + script_vars.ajax_nonce,
    });
});
