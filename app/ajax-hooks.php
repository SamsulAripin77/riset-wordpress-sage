<?php

add_action('wp_ajax_nopriv_custom_user_login', 'handle_custom_user_login');
function handle_custom_user_login() {
    // Cek nonce
    $nonce = $_POST['security'] ?? '';
    if (!wp_verify_nonce($nonce, 'ajax_nonce_login')) {
        wp_send_json_error(['message' => 'Permintaan tidak valid.']);
    }

    // Ambil input dan validasi
    $username = sanitize_text_field($_POST['username'] ?? '');
    $password = $_POST['password'] ?? '';

    if (empty($username) || empty($password)) {
        wp_send_json_error(['message' => 'Username dan password wajib diisi.']);
    }

    // Proses login
    $user = wp_signon([
        'user_login'    => $username,
        'user_password' => $password,
        'remember'      => true,
    ], is_ssl());

    if (is_wp_error($user)) {
        wp_send_json_error(['message' => 'Login gagal: ' . $user->get_error_message()]);
    }

    // Sukses
    wp_send_json_success([
        'message' => 'Login berhasil',
        'redirect_url' => home_url(), // Atau arahkan ke halaman dashboard
    ]);
}
