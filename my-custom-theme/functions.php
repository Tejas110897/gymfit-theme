<?php

function gymfit_enqueue_assets() {
    wp_enqueue_style('gymfit-style', get_template_directory_uri() . '/assets/css/style.css', [], '1.0');
    wp_enqueue_script('gymfit-script', get_template_directory_uri() . '/assets/js/main.js', [], '1.0', true);
}
add_action('wp_enqueue_scripts', 'gymfit_enqueue_assets');

function gymfit_register_cpts() {
    register_post_type('trainer', [
        'labels' => ['name' => 'Trainers', 'singular_name' => 'Trainer'],
        'public' => true,
        'has_archive' => false,
        'supports' => ['title', 'editor', 'thumbnail'],
        'show_in_rest' => true,
    ]);
    
    register_post_type('testimonial', [
        'labels' => ['name' => 'Testimonials', 'singular_name' => 'Testimonial'],
        'public' => true,
        'has_archive' => false,
        'supports' => ['title', 'editor', 'thumbnail'],
        'show_in_rest' => true,
    ]);
}
add_action('init', 'gymfit_register_cpts');

add_theme_support('post-thumbnails');
