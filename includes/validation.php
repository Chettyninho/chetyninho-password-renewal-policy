<?php

if (!defined('ABSPATH')) {
    exit;
}

add_action('validate_password_reset', function ($errors, $user) {

    if (is_wp_error($user)) {
        return;
    }

    $new_password = isset($_POST['pass1'])
        ? sanitize_text_field(wp_unslash($_POST['pass1']))
        : '';

    if ($new_password === '') {
        return;
    }

    if (wp_check_password($new_password, $user->user_pass, $user->ID)) {
        $errors->add(
            'password_reused',
            __('Your new password cannot be the same as your current password.', 'password-renewal-enforcement')
        );
    }

}, 10, 2);