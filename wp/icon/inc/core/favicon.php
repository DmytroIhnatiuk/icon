<?php
function add_favicons()
{
    ?>
    <link rel="apple-touch-icon" sizes="57x57"
          href="<?php echo get_template_directory_uri() . '/assets/icons/apple-icon-57x57.png' ?>">
    <link rel="apple-touch-icon" sizes="60x60"
          href="<?php echo get_template_directory_uri() . '/assets/icons/apple-icon-60x60.png' ?>">
    <link rel="apple-touch-icon" sizes="72x72"
          href="<?php echo get_template_directory_uri() . '/assets/icons/apple-icon-72x72.png' ?>">
    <link rel="apple-touch-icon" sizes="76x76"
          href="<?php echo get_template_directory_uri() . '/assets/icons/apple-icon-76x76.png' ?>">
    <link rel="apple-touch-icon" sizes="114x114"
          href="<?php echo get_template_directory_uri() . '/assets/icons/apple-icon-114x114.png' ?>">
    <link rel="apple-touch-icon" sizes="120x120"
          href="<?php echo get_template_directory_uri() . '/assets/icons/apple-icon-120x120.png' ?>">
    <link rel="apple-touch-icon" sizes="144x144"
          href="<?php echo get_template_directory_uri() . '/assets/icons/apple-icon-144x144.png' ?>">
    <link rel="apple-touch-icon" sizes="152x152"
          href="<?php echo get_template_directory_uri() . '/assets/icons/apple-icon-152x152.png' ?>">
    <link rel="apple-touch-icon" sizes="180x180"
          href="<?php echo get_template_directory_uri() . '/assets/icons/apple-icon-180x180.png' ?>">
    <link rel="icon" type="image/png" sizes="192x192"
          href="<?php echo get_template_directory_uri() . '/assets/icons/android-icon-192x192.png' ?>">
    <link rel="icon" type="image/png" sizes="96x96"
          href="<?php echo get_template_directory_uri() . '/assets/icons/android-icon-96x96.png' ?>">
    <link rel="manifest" href="<?php echo get_template_directory_uri() . '/assets/icons/manifest.json' ?>">

    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage"
          content="<?php echo get_template_directory_uri() . '/assets/icons/ms-icon-144x144.png' ?>">
    <meta name="theme-color" content="#ffffff">
    <?php
}
add_action('wp_head', 'add_favicons', '1');