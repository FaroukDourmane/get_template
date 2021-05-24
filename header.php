<?php
    // Contact options
    $contact_settings_options = get_option( 'contact_settings_option_name' ); // Array of All Options
    $twitter = $contact_settings_options['twitter_0'];
    $facebook = $contact_settings_options['facebook_1'];
    $linkedin = $contact_settings_options['linkedin_2'];
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />

    <!-- Call style.css -->
    <link type="text/css" rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" />

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php //wp_head(); ?>
    
    <title> <?php bloginfo('name'); ?> </title>
</head>
<body>

<div class="get-header-container">    
    <div class="header-wrapper">
        <!-- Left Navbar -->
        <div class="left-nav">
            <!-- Logo -->
            <a class="logo" href="#"> <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.jpg" /> </a>

            <!-- Mobile buttons -->
            <div class="mobile-buttons">
                <a href="#"> <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/ar.svg" /> Arabic </a>
                <a href="#" class="mobile-menu-toggler"> &nbsp; <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/menu.svg" /> &nbsp; </a>
            </div>

            <!-- Social Media -->
            <div class="social">
                
                <?php if ($linkedin): ?>
                    <a href="<?=$twitter?>" target="_blank"> <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/linkedin.svg" /> </a>
                <?php endif; ?>

                <?php if ($facebook): ?>
                    <a href="<?=$facebook?>" target="_blank"> <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/facebook.svg" /> </a>
                <?php endif; ?>

                <?php if ($twitter): ?>
                    <a href="<?=$twitter?>" target="_blank"> <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/twitter.svg" /> </a>
                <?php endif; ?>
            </div>
        </div>

        <!-- Header content -->
        <div class="header-content">
            <!-- Sidebar -->
            <div class="header-sidebar">
                <ul class="header-menu">
                    <li> <a href="#"> Home </a> </li>
                    <li> <a href="#"> Business Sectors </a> </li>
                    <li> <a href="#" class="toggle-news-widget"> News & Events </a> </li>
                    <li> <a href="#"> About us </a> </li>
                </ul>

                <div class="header-buttons">
                    <a href="#"> <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/contact.svg" /> Contact sales </a>
                    <a href="#"> <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/ar.svg" /> Arabic </a>
                </div>

                <!-- News & Events Box -->
                <?php get_template_part('template-parts/header/header-box'); ?>
            </div>

            <!-- Header content -->
            <div class="content">
                <h1>GET GROUP HOLDINGS LTD.</h1>
                <h3>Leaders & innovators for digital solutions</h3>

                <div class="header-btns">
                    <a href="#"> Learn More </a>
                    <a href="#" class="outline"> Contact us </a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_template_part('template-parts/header/header-mobile-menu'); ?>