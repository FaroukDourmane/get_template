<?php 

$args = array(
    'post_type'=> 'news',
    'order'    => 'ASC',
    'posts_per_page' => '3',
);              

$the_query = new WP_Query( $args );
?>

<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/css/header-box.css" />

<div class="header-box-container">
    <div class="box-links">
        <a href="#" class="active"> News </a>
        <a href="#"> Events </a>
    </div>

    <div class="box-content">
        <?php
            if($the_query->have_posts() ) : 
                while ( $the_query->have_posts() ) : 
                $the_query->the_post(); 
        ?>
            <div class="box-article">
                <a href="<?php the_permalink(); ?>" class="hidden-link"></a>
                <div class="cover" style="background-image:url(<?php echo get_the_post_thumbnail_url(); ?>);"></div>
                <div class="article-content">
                    <h5><?php the_title(); ?></h5>
                    <div class="excerpt"><?php the_excerpt(); ?></div>
                </div>
            </div>
        <?php
                endwhile; 
                wp_reset_postdata();
            else: 
            endif;
        ?>
    </div>
</div>
