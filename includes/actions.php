<?php
defined('ABSPATH') || exit;

function prr_activar(){

}

function prr_desactivar(){

}

register_activation_hook(__FILE__,'prr_activar');
register_deactivation_hook(__FILE__,'prr_desactivar');
?>