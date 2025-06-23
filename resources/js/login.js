console.log('halo ini dari login')

document.addEventListener('DOMContentLoaded', () => {
  $('#form-login').on('submit', function (e) {
    e.preventDefault();
    window.isLoading = true;

    const form = $(this);
    const data = form.serialize() + '&action=custom_user_login&security=' + script_vars.ajax_nonce;

    $.post(script_vars.ajaxurl, data)
      .done(function (res) {
        if (res.success) {
          alert(res.data.message || 'Login berhasil');
          location.reload();
        } else {
          alert(res.data.message || 'Login gagal');
        }
      })
      .fail(function () {
        alert('Terjadi kesalahan koneksi.');
      })
      .always(function () {
        window.isLoading = false;
        location.href = '/'
      });
  });
});
