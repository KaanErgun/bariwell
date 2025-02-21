<?php
if (!defined('ABSPATH')) {
    exit;
}

function bariwell_calculator_form() {
    ob_start(); ?>
    <div class="bariwell-container">
        <h2>BMI Hesaplayıcı</h2>
        <form id="bariwell-form">
            <label for="height">Boy (cm):</label>
            <input type="number" id="height" name="height" required>
            
            <label for="weight">Kilo (kg):</label>
            <input type="number" id="weight" name="weight" required>

            <input type="submit" value="Hesapla">
        </form>
    </div>
    <?php
    return ob_get_clean();
}

function bariwell_calculator_shortcode() {
    ob_start();
    echo bariwell_calculator_form();
    return ob_get_clean();
}
add_shortcode('bariwell_calculator', 'bariwell_calculator_shortcode');
?>
