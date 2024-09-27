<?php
/**
 * Plugin Name: Anime Viewer Plugin
 * Description: Un plugin básico para visualizar y organizar episodios de anime.
 * Version: 1.0
 * Author: FxxMorgan
 */

// Evita el acceso directo
if (!defined('ABSPATH')) {
    exit;
}

// Incluimos los archivos necesarios
require_once plugin_dir_path(__FILE__) . 'includes/anime-cpt.php';  // Custom Post Types para Anime
require_once plugin_dir_path(__FILE__) . 'includes/anime-shortcode.php';  // Shortcode para mostrar anime

// Función que se ejecuta al activar el plugin
function anime_viewer_activate() {
    anime_create_custom_post_type();
    flush_rewrite_rules();
}
register_activation_hook(__FILE__, 'anime_viewer_activate');

// Función que se ejecuta al desactivar el plugin
function anime_viewer_deactivate() {
    flush_rewrite_rules();
}
register_deactivation_hook(__FILE__, 'anime_viewer_deactivate');
