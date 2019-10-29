<?php
/*
Template Name: Portfolio
Template Post Type: post, page, product
*/
?>

<?php get_header(); ?>

<div class="container portfolio-tabs">
    <div class="row">
        <div class="col-lg-10 offset-lg-1 col-12 offset-0">
            <div class="row">
                <div class="col-12">
                    <ul class="nav mt-5" id="tabPortfolio" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link portfolio-tabs__link pl-0 pr-0 active" id="coopTab" data-toggle="tab"
                               href="#coop" role="tab"
                               aria-controls="coop" aria-selected="true">Корпоративные сайты</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link portfolio-tabs__link pl-0 pr-0" id="shopsTab" data-toggle="tab"
                               href="#shops" role="tab" aria-controls="shops"
                               aria-selected="true">Интернет-магазины</a>
                        </li>
                    </ul>

                    <div class="row portfolio-tabs-tags">
                        <div class="col-12 col-lg-6">
                            <h3 class="portfolio-tabs-tags__header">Готовый к SEO-продвижению</h3>
                            <p class="portfolio-tabs-tags__content">Объедините работу клиентской базы, складского учета,
                                бухгалтерии и производства <...> в единую централизованную систему</p>
                        </div>
                        <div class="col-12 col-lg-6">
                            <h3 class="portfolio-tabs-tags__header">Готовый к SEO-продвижению</h3>
                            <p class="portfolio-tabs-tags__content">Объедините работу клиентской базы, складского учета,
                                бухгалтерии и производства <...> в единую централизованную систему</p>
                        </div>
                    </div>

                    <div class="row portfolio-tabs-tags">
                        <div class="col-12 col-lg-6">
                            <h3 class="portfolio-tabs-tags__header">Готовый к SEO-продвижению</h3>
                            <p class="portfolio-tabs-tags__content">Объедините работу клиентской базы, складского учета,
                                бухгалтерии и производства <...> в единую централизованную систему</p>
                        </div>
                        <div class="col-12 col-lg-6">
                            <h3 class="portfolio-tabs-tags__header">Готовый к SEO-продвижению</h3>
                            <p class="portfolio-tabs-tags__content">Объедините работу клиентской базы, складского учета,
                                бухгалтерии и производства <...> в единую централизованную систему</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container mb-5">

    <div class="row">
        <div class="col-lg-10 offset-lg-1 col-12 offset-0">

            <?php $catquery = new WP_Query('cat=19&posts_per_page=14'); // portfolio  ?>

            <?php while ($catquery->have_posts()) :
                $catquery->the_post(); ?>

                <div class="row portfolio-header">
                    <div class="col-6 m-auto">
                        <h3 class="portfolio-header__content m-0"><?php the_title(); ?></h3>
                    </div>
                    <div class="col-6 text-right m-auto">
                        <a class="portfolio-header__site"
                           href="<?php echo get_post_meta(get_the_ID(), 'website', true); ?>"><?php echo get_post_meta(get_the_ID(), 'website', true); ?></a>
                    </div>
                </div>

                <div class="row portfolio">
                    <div class="col">
                        <p class="portfolio__title"><?php echo get_post_meta(get_the_ID(), 'biscat', true); ?></p>
                        <p class="portfolio__tags">Проектировка + Разработка + Дизайн</p>
                    </div>
                </div>

                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <?php
                        global $post;
                        $gallery = get_post_gallery_images($post);
                        // Loop through each image in each gallery
                        foreach ($gallery

                                 as $image_url): ?>
                            <div class="swiper-slide">
                                <img src="<?= $image_url ?>" alt="">
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>

                <div class="row portfolio-content">
                    <div class="col portfolio-content__text">
                        <?php the_content(); ?>
                    </div>
                </div>

            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
        </div>
    </div>
</div>
<script src="/wp-content/themes/richbee/inc/assets/js/swiper.min.js"></script>

<script>
    var swiper = new Swiper('.swiper-container', {
        slidesPerView: 3,
        spaceBetween: 30,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });
</script>

<?php get_footer(); ?>
