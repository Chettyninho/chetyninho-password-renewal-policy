<?php
/*
Plugin Name: Chetyninho Password Renewal Policy
Text Domain: chetyninho-password-renewal-policy
Plugin URI: https://github.com/Chettyninho/password-renewal-enforcement
Description: This plugin enhances WordPress security by enforcing a password reset policy. It requires users to change their password through the password recovery process, adding an extra layer of protection to user accounts.
Version: 1.0
Author: Chettyninho
Author URI: https://github.com/Chettyninho
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html
*/



if (!defined('ABSPATH')) {
    exit; // Evita el acceso directo al archivo
}

// Hooks de activación/desactivación
require_once plugin_dir_path(__FILE__) . 'includes/actions.php';

//Add validation functionalities
require_once plugin_dir_path(__FILE__) . 'includes/validation.php';

?>