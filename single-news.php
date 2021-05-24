<?php get_header(); ?>

<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ?>/assets/css/single-news.css" />

<?php if ( is_single() ) { ?>

<div class="post-container">
    <h1 id="title"><?php the_title(); ?></h1>

    <div id="content">
        <?php the_content(); ?>
    </div>
</div>

        

<?php
    //the_title();
        // the_author();
        // the_post_thumbnail();
        // the_content();
    }
    get_footer();
?>
    