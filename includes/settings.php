<?php
if (!defined('ABSPATH')) {
    exit;
}

function bariwell_settings_page() {
    add_menu_page(
        'Bariwell Ayarları', 
        'Bariwell', 
        'manage_options', 
        'bariwell-settings', 
        'bariwell_settings_html', 
        'dashicons-calculator', 
        6 
    );
}
add_action('admin_menu', 'bariwell_settings_page');

function bariwell_settings_html() {
    if (!current_user_can('manage_options')) {
        return;
    }

    if (isset($_POST['bariwell_surgery_link'])) {
        update_option('bariwell_surgery_link', sanitize_text_field($_POST['bariwell_surgery_link']));
        echo '<div class="notice notice-success"><p>Ayarlar kaydedildi!</p></div>';
    }

    $surgery_link = get_option('bariwell_surgery_link', 'https://kaanergun.com');
    ?>
    <div class="wrap">
        <h1>Bariwell Ayarları</h1>
        <form method="post">
            <label for="bariwell_surgery_link">Bariatrik Cerrahi Bilgi Linki:</label>
            <input type="url" id="bariwell_surgery_link" name="bariwell_surgery_link" value="<?php echo esc_url($surgery_link); ?>" required>
            <p class="description">Bariatrik cerrahi için uygun olan kullanıcılara gösterilecek link.</p>
            <?php submit_button('Ayarları Kaydet'); ?>
        </form>
    </div>
    <?php
}
?>
