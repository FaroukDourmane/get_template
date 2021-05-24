<?php
    $js_file = get_template_directory_uri().'/assets/js/header.js';
    $jquery = get_template_directory_uri().'/assets/js/jquery.min.js';

    // Contact settings
    require get_template_directory() . '/inc/contact_settings.php';

    // News
    require get_template_directory() . '/inc/news_settings.php';

    if ( is_admin() )
        $contact_settings = new ContactSettings();
        $news_settings = new NewsSettings();
?>
<script type="text/javascript" src="<?php echo $jquery; ?>"></script>
<script type="text/javascript" src="<?php echo $js_file; ?>"></script>