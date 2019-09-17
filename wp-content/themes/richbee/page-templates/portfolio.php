<?php
/*
Template Name: Portfolio
Template Post Type: post, page, product
*/
?>

<?php get_header(); ?>
<div class="container mb-5">
    <div class="row">
        <div class="col text-center">
            <h1 class="new mb-4 position-relative">Портфолио
                <div class="singletopp">RICHBEE</div>
            </h1>
        </div>
    </div>
</div>
<div class="container mb-5 portfolio">
    <?php $catquery = new WP_Query('cat=19&posts_per_page=14'); // portfolio  ?>

    <?php while ($catquery->have_posts()) : $catquery->the_post(); ?>
        <div class="porfolio-block mb-5">
            <a href="<?php the_permalink() ?>"><img class="img-protfolio"
                                                    src="<?php the_post_thumbnail_url($image_size) ?>"
                                                    alt="<?php the_title(); ?>"></a>
            <div class="row">
                <div class="col-12 offset-0 col-lg-8 offset-lg-2 mt-5">
                    <h2 class="new mt-0"><?php the_title(); ?></h2>
                    <p class="text--secondary mb-3"><?php echo get_post_meta(get_the_ID(), 'biscat', true); ?> | <?php echo get_post_meta(get_the_ID(), 'website', true); ?></p>
                    <div class="description"><?php the_content(); ?></div>
                    <a href="<?php the_permalink() ?>">Подробнее
                        <img src="/wp-content/themes/richbee/images/back.png" alt="">
                    </a>
                </div>
            </div>
        </div>

    <?php endwhile; ?>
    <?php wp_reset_postdata(); ?>
</div>

<?php get_footer(); ?>
