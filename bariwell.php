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

function bariwell_enqueue_assets() {
    wp_enqueue_style('bariwell-modal-style', BARIWELL_URL . 'assets/modal.css', array(), '1.4.2', 'all');
    wp_enqueue_style('bariwell-form-style', BARIWELL_URL . 'assets/form.css', array(), '1.4.2', 'all');
    wp_enqueue_script('bariwell-script', BARIWELL_URL . 'assets/script.js', array('jquery'), '1.4.2', true);
}
add_action('wp_enqueue_scripts', 'bariwell_enqueue_assets');

add_action('wp_footer', function() {
    $surgery_link = get_option('bariwell_surgery_link', '');
    ?>
    <script>
        var bariwellOptions = {
            surgeryLink: "<?php echo esc_js($surgery_link); ?>"
        };
    </script>
    <?php
});


// Diğer dosyaları dahil et
require_once BARIWELL_PATH . 'includes/settings.php';
require_once BARIWELL_PATH . 'includes/calculator.php';
?>
