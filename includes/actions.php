<?php
defined('ABSPATH') || exit;

function cprp_activar(){

}

function cprp_desactivar(){

}

register_activation_hook(__FILE__,'cprp_activar');
register_deactivation_hook(__FILE__,'cprp_desactivar');
?>