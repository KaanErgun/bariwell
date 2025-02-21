<?php
/*
Plugin Name: Bariwell
Description: A BMI calculator to determine eligibility for bariatric surgery with customizable link.
Version: 1.4.2
Author: Kaan Ergün
*/

if (!defined('ABSPATH')) {
    exit;
}

// Eklenti yolları
define('BARIWELL_PATH', plugin_dir_path(__FILE__));
define('BARIWELL_URL', plugin_dir_url(__FILE__));

// CSS ve JS dosyalarını yükle
function bariwell_enqueue_assets() {
    wp_enqueue_style('bariwell-style', BARIWELL_URL . 'assets/style.css', array(), '1.4.2', 'all');
    wp_enqueue_script('bariwell-script', BARIWELL_URL . 'assets/script.js', array('jquery'), '1.4.2', true);
}
add_action('wp_enqueue_scripts', 'bariwell_enqueue_assets');

// Diğer dosyaları dahil et
require_once BARIWELL_PATH . 'includes/settings.php';
require_once BARIWELL_PATH . 'includes/calculator.php';
?>
