<?php

add_action('wp_ajax_nopriv_custom_user_login', 'handle_custom_user_login');
function handle_custom_user_login()
{
    // Cek nonce
    $nonce = $_POST['security'] ?? '';
    if (!wp_verify_nonce($nonce, 'ajax_nonce_login')) {
        wp_send_json_error(['message' => 'Permintaan tidak valid.'], 400);
    }

    // Ambil input dan validasi
    $email = sanitize_text_field($_POST['email'] ?? '');
    $password = $_POST['password'] ?? '';

    $errors = validate_fields([
        'email' => ['required', 'email'],
        'password' => ['required', 'min:6'],
    ]);

    if (!empty($errors)) {
        wp_send_json_error([
            'errors'  => $errors,
        ], 422);
    }


    // Proses login
    $user = wp_signon([
        'user_login'    => $email,
        'user_password' => $password,
        'remember'      => true,
    ], is_ssl());

    if (is_wp_error($user)) {
        wp_send_json_error(['message' => 'Login gagal: ' . wp_strip_all_tags($user->get_error_message()),400]);
    }

    // Sukses
    wp_send_json_success([
        'message' => 'Login berhasil',
    ]);
}


add_action('wp_ajax_nopriv_custom_user_register', 'handle_custom_user_register');
function handle_custom_user_register()
{
    $nonce_action = 'ajax_nonce_register';
    if (!isset($_POST['security']) || !wp_verify_nonce($_POST['security'], $nonce_action)) {
        wp_send_json_error(['message' => 'Akses tidak sah'], 400);
    }

    $email    = sanitize_email($_POST['email'] ?? '');
    $password = $_POST['password'] ?? '';
    $password_confirmation  = $_POST['password_confirmation'] ?? '';

    $errors = validate_fields([
        'email' => ['required', 'email'],
        'password' => ['required', 'min:6'],
        'password_confirmation' => ['required', 'same:password'],
    ]);

    if (!empty($errors)) {
        wp_send_json_error([
            'errors'  => $errors,
        ], 422);
    }

    // ⚠️ Error bisnis (duplicated user)
    if (username_exists($email) || email_exists($email)) {
        wp_send_json_error(['message' => 'Username atau email sudah digunakan.'], 400); // Conflict
    }

    // 🚀 Registrasi dan login
    $user_id = wp_create_user($email, $password, $email);

    if (is_wp_error($user_id)) {
        wp_send_json_error(['message' => 'Terjadi kesalahan saat membuat akun.'], 500);
    }

    // Auto-login
    wp_set_current_user($user_id);
    wp_set_auth_cookie($user_id);
    do_action('wp_login', $email, get_user_by('id', $user_id));

    wp_send_json_success(['message' => 'Pendaftaran berhasil.']);
}


function validate_fields(array $rules): array
{
    $errors = [];

    foreach ($rules as $field => $fieldRules) {
        $value = trim($_POST[$field] ?? '');

        foreach ($fieldRules as $rule) {
            if ($rule === 'required' && $value === '') {
                $errors[$field] = 'Field wajib diisi.';
                break;
            }

            if ($rule === 'email' && !filter_var($value, FILTER_VALIDATE_EMAIL)) {
                $errors[$field] = 'Format email tidak valid.';
                break;
            }

            if (str_starts_with($rule, 'min:')) {
                $min = (int) explode(':', $rule)[1];
                if (strlen($value) < $min) {
                    $errors[$field] = "Minimal $min karakter.";
                    break;
                }
            }

            if (str_starts_with($rule, 'max:')) {
                $max = (int) explode(':', $rule)[1];
                if (strlen($value) > $max) {
                    $errors[$field] = "Maksimal $max karakter.";
                    break;
                }
            }

            if (str_starts_with($rule, 'same:')) {
                $targetField = explode(':', $rule)[1];
                $targetValue = trim($_POST[$targetField] ?? '');
                if ($value !== $targetValue) {
                    $errors[$field] = "Field ini harus sama dengan $targetField.";
                    break;
                }
            }
        }
    }

    return $errors;
}
