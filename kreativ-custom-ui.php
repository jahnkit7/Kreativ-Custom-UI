<?php
/**
 * Plugin Name: Kreativ Custom UI
 * Description: Injecte automatiquement le fichier custom-ui.php dans le design frontend de NBDesigner.
 * Version: 1.0.0
 * Author: Kreativ
 */

register_activation_hook(__FILE__, 'kreativ_custom_ui_patch_nbdesigner');

function kreativ_custom_ui_patch_nbdesigner() {
    $nb_file = WP_PLUGIN_DIR . '/web-to-print-online-designer/views/nbdesigner-frontend-modern.php';
    $include_code = "<?php include_once WP_PLUGIN_DIR . '/kreativ-custom-ui/custom-ui.php'; ?>";

    if (file_exists($nb_file)) {
        $content = file_get_contents($nb_file);

        // Éviter les doublons
        if (strpos($content, $include_code) === false) {
            // Injecter juste avant la balise </body>
            $updated = str_replace('</body>', $include_code . "\n</body>", $content);
            file_put_contents($nb_file, $updated);
        }
    }
}
