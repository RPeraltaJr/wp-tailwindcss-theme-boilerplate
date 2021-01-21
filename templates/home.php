<?php
/*
 * Template Name: Home
 * Template Post Type: post, page
 */

$page_setting = [
    "type"      => "page-home",
    "name"      => str_replace('.php', '', basename($_SERVER['PHP_SELF'])),
    "meta"      => (object) [
        "title" => "Home",
        "desc"  => "",
    ],
    "plugins"   => [], 
];

// settings
include __DIR__ . '/../includes/site-settings.php';

// header
\WpTailwindCssThemeBoilerplate\View::render('global/header/header', $page_setting);

// hero
// \WpTailwindCssThemeBoilerplate\View::render('home/hero/hero', get_field("hero"));

// footer
\WpTailwindCssThemeBoilerplate\View::render('global/footer/footer-nav');
\WpTailwindCssThemeBoilerplate\View::render('global/footer/footer', $page_setting);
