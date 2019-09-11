<?php
/*
Template Name: Portfolio
Template Post Type: post, page, product
*/
?>

<?php get_header(); ?>

<div class="container mb-5 third-block position-relative portfolio">
    <img class="position-absolute richbee" src="/wp-content/themes/richbee/images/RICHBEE.png" alt="">
    <div class="row">
        <div class="col">
            <h2 class="sub text-center">
                Наши работы
            </h2>
            <h1 class="new text-center">
                Портфолио
            </h1>
        </div>
    </div>
    <?php $catquery = new WP_Query('cat=19&posts_per_page=14'); // portfolio  ?>
    <?php $portfolio_counter = 1; ?>
    <?php $image_size = array(356, 212); // выбор размера превью, выводит ближайшую по размеру в большую сторону?>
    <?php while ($catquery->have_posts()) : $catquery->the_post(); ?>
        <?php if ($portfolio_counter % 2 != 0): ?>
            <div class="row position-relative mt-custom">
                <img class="bg-ellipse" src="/wp-content/themes/richbee/images/Group%203.13.png" alt="">
                <div class="col-12 order-2 order-sm-2 order-md-2 order-lg-0 order-xl-0 col-lg-6 col-xl-6">
                    <div class="bg-left-landing">
                    </div>
                    <div class="img-inside">
                        <div class="position-relative">
                            <img src="/wp-content/themes/richbee/images/macbook-top.png" style="" alt="">
                            <img class="img-inside-mac" src="<?php the_post_thumbnail_url($image_size) ?>" alt="">
                        </div>
                        <img src="/wp-content/themes/richbee/images/macbook-bottom.png" alt="">
                    </div>
                </div>
                <div class="col-11 order-2 order-sm-1 order-md-1 offset-1 order-lg-0 col-lg-5 offset-lg-0">
                    <h2 class="new mt-0"><?php the_title(); ?></h2>
                    <a href="<?php echo get_post_meta(get_the_ID(), 'website', true); ?>" class="text--secondary">
                        <?php echo get_post_meta(get_the_ID(), 'website', true); ?>
                    </a>
                    <div class="description"><?php the_content(); ?></div>
                    <a href="<?php the_permalink() ?>">Подробнее
                        <img src="/wp-content/themes/richbee/svg/back.svg" alt="">
                    </a>
                </div>
            </div>
        <?php elseif ($portfolio_counter % 2 == 0): ?>
            <div class="row mt-custom-2">
                <div class="col-11 order-2 order-sm-1 order-md-1 offset-1 col-lg-5 order-lg-1 offset-lg-1">
                    <h2 class="new mt-0"><?php the_title(); ?></h2>
                    <a href="<?php echo get_post_meta(get_the_ID(), 'website', true); ?>" class="text--secondary">
                        <?php echo get_post_meta(get_the_ID(), 'website', true); ?>
                    </a>
                    <div class="description">
                        <?php the_content(); ?>
                    </div>
                    <a href="<?php the_permalink() ?>">Подробнее
                        <img src="/wp-content/themes/richbee/svg/back.svg" alt="">
                    </a>
                </div>
                <div class="col-lg-6 order-sm-2 order-md-2 right-landing order-lg-2 col-12">
                    <div class="bg-right-landing">
                    </div>
                    <div class="img-inside">
                        <div class="position-relative">
                            <img src="/wp-content/themes/richbee/images/macbook-top.png" style="" alt="">
                            <img class="img-inside-mac" src="<?php the_post_thumbnail_url($image_size) ?>" alt="">
                        </div>
                        <img src="/wp-content/themes/richbee/images/macbook-bottom.png" alt="">
                    </div>
                </div>
            </div>
        <?php endif; ?>
        <?php $portfolio_counter++; ?>
    <?php endwhile; ?>
    <?php wp_reset_postdata(); ?>
    <?php unset($portfolio_counter); ?>
    <?php unset($image_size); ?>
</div>

<?php get_footer(); ?>
