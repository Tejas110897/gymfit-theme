<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <header class="section">
    <h1><?php bloginfo('name'); ?></h1>
    <nav><?php wp_nav_menu(['theme_location' => 'main-menu']); ?></nav>
  </header>
