<?php
if (!function_exists('icon_scripts_setup')) :
    function icon_scripts_setup()
    {
        $release_version = '1.0.7';
        wp_enqueue_script('main', get_theme_file_uri('/assets/js/app.min.js'), [], $release_version);

    }
endif;
add_action('wp_footer', 'icon_scripts_setup');
function php_script()
{
    ?>
    <script defer>
        <?php $isEn = get_locale(); ?>
        const lang = '<?php echo $isEn; ?>';
        const isEn = lang === 'en' ? true : false;
        let path = '<?php echo get_template_directory_uri(); ?>';
    </script>
    <?php
}

// Добавляем хук для выполнения функции в head
add_action('wp_footer', 'php_script');