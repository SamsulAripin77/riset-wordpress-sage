document.addEventListener('DOMContentLoaded', () => {
  const form = $('#form-register');
  if (!form.length) return;

  form.on('submit', function (e) {
    e.preventDefault();
    validator.clear();

    const $form = $(this);
    const data = $form.serialize() + '&action=custom_user_register&security=' + script_vars.ajax_nonce;

    $.ajax({
      type: 'POST',
      url: script_vars.ajaxurl,
      data: data,
      dataType: 'json',
      success: function (res) {
        console.log('sukses')
        alert(res.data?.message || (res.success ? 'Pendaftaran berhasil' : 'Pendaftaran gagal'));
        if (res.success) location.reload();
      },
      error: function (xhr) {
        const response = xhr.responseJSON;
        // Tampilkan error global jika ada
        if (response?.data?.message) {
          alert(response.data.message);
        }

        // Tampilkan error per field jika ada
        if (response?.data?.errors) {
         console.log('error nih yeeye')
         window.validator.show(form, response)
        }

        // Jika tidak ada detail error
        if (!response?.data) {
          alert('Terjadi kesalahan koneksi.');
        }
      }
    });
  });

});
