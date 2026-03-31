<?php
// Configuración del tema omontes
function omontes_theme_setup() {
    load_theme_textdomain('omontes', get_template_directory() . '/languages');
    add_theme_support('title-tag');
    register_nav_menus(array(
        'header-menu' => __('Menú Superior', 'omontes')
    ));
}
add_action('after_setup_theme', 'omontes_theme_setup');

// Carga de activos
function omontes_theme_assets() {
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Libre+Franklin:wght@400;500;700&display=swap', false);
    wp_enqueue_style('main-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'omontes_theme_assets');

// Tiempo de lectura internacionalizado
function omontes_reading_time() {
    $content = get_post_field('post_content', get_the_ID());
    $word_count = str_word_count(strip_tags($content));
    $readingtime = ceil($word_count / 200);
    
    return sprintf(
        _n('%s min de lectura', '%s min de lectura', $readingtime, 'omontes'),
        $readingtime
    );
}
?>