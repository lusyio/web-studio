<?php
/*
Template Name: main-landing
Template Post Type: post, page, product
*/
?>

<?php get_header(); ?>

<div class="container first-block mb-5">
    <div class="row">
        <div class="col-12 col-lg-6">
            <h2 class="first-block__header">
                Студия <br class="d-sm-none d-block"> веб-разработки
            </h2>
            <p class="first-block__content">Разрабатываем системы управления и автоматизации для бизнеса, корпоративные
                сайты и
                интернет-магазины</p>
            <div class="row">
                <div class="col-lg-9 col-12">
                    <a href="/brief/" class="btn w-100 first-block__btn">
                        Расчитать стоимость онлайн <img src="/wp-content/themes/richbee/svg/calculator.svg" class="ml-4"
                                                        alt="">
                    </a>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-6 p-md-unset p-0">
            <div class="first-block-card">
                <p class="first-block-card-header">История о том, <a href="/portfolio/rubezh-system/"
                                                                     class="first-block-card-header__link">как
                        мы производство щебня оцифровывали</a></p>
                <p class="first-block-card-content">EPR-система для <span>ООО "Рубеж В"</span></p>
                <p class="first-block-card-link"><a href="/portfolio/rubezh-system/">Читать подробнее...</a></p>
                <img class="first-block-card-img" src="/wp-content/themes/richbee/images/newstyle/rubezh-v.png" alt="">
            </div>
        </div>
    </div>
</div>
</div>
</div>

<?php get_template_part( 'template-parts/service-loop', 'service-loop' ); ?>

<?php get_template_part( 'template-parts/youtube-block', 'youtube-block' ); ?>


<div class="container conteiner-portfolio-main">
    <div class="row">
        <div class="container third-block position-relative">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 col-12 offset-0">
                    <h2 class="third-block__header">
                        Примеры последних реализованных проектов
                    </h2>
                </div>
            </div>
        </div>
        <div class="container portfolio-tabs portfolio-tabs-main">

            <div class="row">
                <div class="col-lg-10 offset-lg-1 col-12 offset-0">
                    <div class="row">
                        <div class="col-12">
                            <ul class="nav" id="tabPortfolio" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link portfolio-tabs__link pl-0 pr-0 active" id="allTab"
                                       data-toggle="tab"
                                       href="#all" role="tab"
                                       aria-controls="coop" aria-selected="true">Все проекты</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link portfolio-tabs__link pl-0 pr-0" id="coopTab" data-toggle="tab"
                                       href="#coop" role="tab"
                                       aria-controls="coop" aria-selected="true">Корпоративные сайты</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link portfolio-tabs__link pl-0 pr-0" id="shopsTab" data-toggle="tab"
                                       href="#shops" role="tab" aria-controls="shops"
                                       aria-selected="true">Интернет-магазины</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link portfolio-tabs__link pl-0 pr-0" id="serviceTab" data-toggle="tab"
                                       href="#service" role="tab" aria-controls="service"
                                       aria-selected="true">Сервисы</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-content">
            <div class="container mb-5 tab-pane show active" id="all" role="tabpanel" aria-labelledby="allTab">
                <div class="row">
                    <div class="col-lg-10 offset-lg-1 col-12 offset-0">

                        <?php $catquery = new WP_Query('cat=19&posts_per_page=14'); // portfolio  ?>
                        <?php $portfolio_counter = 1; ?>
                        <?php while ($catquery->have_posts()) :
                            $catquery->the_post(); ?>

                            <div class="row portfolio-header">
                                <div class="col-sm-6 col-12 m-auto position-relative">
                                    <div class="portfolio-header__icon"
                                         style="background: url(<?php echo get_post_meta(get_the_ID(), 'icon', true); ?>);"></div>
                                    <a href="<?php the_permalink() ?>"
                                       class="h3 portfolio-header__content m-0"><?php the_title(); ?></a>
                                </div>
                                <div class="col-sm-6 col-12 text-sm-right text-left m-sm-auto mt-3">
                                    <a class="portfolio-header__site d-sm-block d-none"
                                       href="<?php echo get_post_meta(get_the_ID(), 'website', true); ?>">
                                        <?php
                                        $url = get_post_meta(get_the_ID(), 'website', true);;
                                        $domain = parse_url($url, PHP_URL_HOST);
                                        echo $domain;
                                        ?>
                                    </a>
                                </div>
                                <div class="col-12">
                                    <hr class="portfolio-header__hr">
                                </div>
                            </div>

                            <div class="row portfolio">
                                <div class="col d-sm-block d-flex justify-content-between">
                                    <p class="portfolio__title d-sm-block d-none"><?php echo get_post_meta(get_the_ID(), 'biscat', true); ?></p>
                                    <a class="portfolio-header__site d-sm-none d-flex"
                                       href="<?php echo get_post_meta(get_the_ID(), 'website', true); ?>">
                                        <?php
                                        $url = get_post_meta(get_the_ID(), 'website', true);;
                                        $domain = parse_url($url, PHP_URL_HOST);
                                        echo $domain;
                                        ?>
                                    </a>
                                    <p class="portfolio__tags d-sm-block d-flex"><?php echo get_post_meta(get_the_ID(), 'tags', true); ?></p>
                                </div>
                            </div>

                            <div class="position-relative">
                                <div class="swiper-button-next swiper-button-next__all"></div>
                                <div class="swiper-button-prev swiper-button-prev__all"></div>
                                <div class="swiper-container-all">
                                    <div class="swiper-slide__bg"></div>
                                    <div class="swiper-wrapper">
                                        <?php
                                        global $post;
                                        $gallery = get_post_gallery_images($post);
                                        // Loop through each image in each gallery
                                        foreach ($gallery

                                                 as $image_url): ?>
                                            <div class="swiper-slide">
                                                <img data-toggle="modal" data-target="#portfolioModal"
                                                     src="<?= $image_url ?>" alt="">
                                            </div>
                                        <?php endforeach; ?>
                                        <div class="swiper-slide swiper-slide__last">
                                        </div>
                                    </div>
                                    <div class="swiper-pagination-all portfolio-bullets d-sm-none d-block"></div>
                                </div>
                            </div>

                            <div class="row portfolio-content">
                                <div class="col-lg-9 col-12 portfolio-content__text">
                                    <p class="portfolio__title d-sm-none d-block"><?php echo get_post_meta(get_the_ID(), 'biscat', true); ?></p>
                                    <?php the_content(); ?>
                                </div>
                            </div>
                            <?php if ($portfolio_counter == 2): ?>

                            <div class="row mt-custom-3">
                                <div class="col">
                                    <a href="/portfolio/#all" class="btn btn-see-all">
                                        Посмотреть все работы <img class="ml-4"
                                                                   src="/wp-content/themes/richbee/svg/landing-pageportfolio.svg"
                                                                   alt="">
                                    </a>
                                </div>
                            </div>
                            <?php break; ?>
                        <?php endif; ?>
                            <?php $portfolio_counter++; ?>
                        <?php endwhile; ?>
                        <?php wp_reset_postdata(); ?>
                        <?php unset($portfolio_counter); ?>
                    </div>
                </div>
            </div>

            <div class="container mb-5 tab-pane" id="coop" role="tabpanel" aria-labelledby="coopTab">
                <div class="row">
                    <div class="col-lg-10 offset-lg-1 col-12 offset-0">

                        <?php $catquery = new WP_Query('cat=32&posts_per_page=14'); // portfolio  ?>
                        <?php $portfolio_counter = 1; ?>
                        <?php while ($catquery->have_posts()) :
                            $catquery->the_post(); ?>

                            <div class="row portfolio-header">
                                <div class="col-sm-6 col-12 m-auto position-relative">
                                    <div class="portfolio-header__icon"
                                         style="background: url(<?php echo get_post_meta(get_the_ID(), 'icon', true); ?>);"></div>
                                    <a href="<?php the_permalink() ?>"
                                       class="h3 portfolio-header__content m-0"><?php the_title(); ?></a>
                                </div>
                                <div class="col-sm-6 col-12 text-sm-right text-left m-sm-auto mt-3">
                                    <a class="portfolio-header__site d-sm-block d-none"
                                       href="<?php echo get_post_meta(get_the_ID(), 'website', true); ?>">
                                        <?php
                                        $url = get_post_meta(get_the_ID(), 'website', true);;
                                        $domain = parse_url($url, PHP_URL_HOST);
                                        echo $domain;
                                        ?>
                                    </a>
                                </div>
                                <div class="col-12">
                                    <hr class="portfolio-header__hr">
                                </div>
                            </div>

                            <div class="row portfolio">
                                <div class="col d-sm-block d-flex justify-content-between">
                                    <p class="portfolio__title d-sm-block d-none"><?php echo get_post_meta(get_the_ID(), 'biscat', true); ?></p>
                                    <a class="portfolio-header__site d-sm-none d-flex"
                                       href="<?php echo get_post_meta(get_the_ID(), 'website', true); ?>">
                                        <?php
                                        $url = get_post_meta(get_the_ID(), 'website', true);;
                                        $domain = parse_url($url, PHP_URL_HOST);
                                        echo $domain;
                                        ?>
                                    </a>
                                    <p class="portfolio__tags d-sm-block d-flex"><?php echo get_post_meta(get_the_ID(), 'tags', true); ?></p>
                                </div>
                            </div>

                            <div class="position-relative">
                                <div class="swiper-button-next swiper-button-next__coop"></div>
                                <div class="swiper-button-prev swiper-button-prev__coop"></div>
                                <div class="swiper-container-coop">
                                    <div class="swiper-slide__bg"></div>
                                    <div class="swiper-wrapper">
                                        <?php
                                        global $post;
                                        $gallery = get_post_gallery_images($post);
                                        // Loop through each image in each gallery
                                        foreach ($gallery

                                                 as $image_url): ?>
                                            <div class="swiper-slide">
                                                <img data-toggle="modal" data-target="#portfolioModal"
                                                     src="<?= $image_url ?>" alt="">
                                            </div>
                                        <?php endforeach; ?>
                                        <div class="swiper-slide swiper-slide__last">
                                        </div>
                                    </div>
                                    <div class="swiper-pagination-coop portfolio-bullets d-sm-none d-block"></div>
                                </div>
                            </div>

                            <div class="row portfolio-content">
                                <div class="col-lg-9 col-12 portfolio-content__text">
                                    <p class="portfolio__title d-sm-none d-block"><?php echo get_post_meta(get_the_ID(), 'biscat', true); ?></p>
                                    <?php the_content(); ?>
                                </div>
                            </div>
                            <?php if ($portfolio_counter == 2): ?>

                            <div class="row mt-custom-3">
                                <div class="col">
                                    <a href="/portfolio/#coop" class="btn btn-see-all">
                                        Посмотреть все работы <img class="ml-4"
                                                                   src="/wp-content/themes/richbee/svg/landing-pageportfolio.svg"
                                                                   alt="">
                                    </a>
                                </div>
                            </div>
                            <?php break; ?>
                        <?php endif; ?>
                            <?php $portfolio_counter++; ?>
                        <?php endwhile; ?>
                        <?php wp_reset_postdata(); ?>
                        <?php unset($portfolio_counter); ?>
                    </div>
                </div>
            </div>

            <div class="container mb-5 tab-pane" id="shops" role="tabpanel" aria-labelledby="shopsTab">
                <div class="row">
                    <div class="col-lg-10 offset-lg-1 col-12 offset-0">

                        <?php $catquery = new WP_Query('cat=33&posts_per_page=14'); // portfolio  ?>
                        <?php $portfolio_counter = 1; ?>
                        <?php while ($catquery->have_posts()) :
                            $catquery->the_post(); ?>

                            <div class="row portfolio-header">
                                <div class="col-sm-6 col-12 m-auto position-relative">
                                    <div class="portfolio-header__icon"
                                         style="background: url(<?php echo get_post_meta(get_the_ID(), 'icon', true); ?>);"></div>
                                    <a href="<?php the_permalink() ?>"
                                       class="h3 portfolio-header__content m-0"><?php the_title(); ?></a>
                                </div>
                                <div class="col-sm-6 col-12 text-sm-right text-left m-sm-auto mt-3">
                                    <a class="portfolio-header__site d-sm-block d-none"
                                       href="<?php echo get_post_meta(get_the_ID(), 'website', true); ?>">
                                        <?php
                                        $url = get_post_meta(get_the_ID(), 'website', true);;
                                        $domain = parse_url($url, PHP_URL_HOST);
                                        echo $domain;
                                        ?>
                                    </a>
                                </div>
                                <div class="col-12">
                                    <hr class="portfolio-header__hr">
                                </div>
                            </div>

                            <div class="row portfolio">
                                <div class="col d-sm-block d-flex justify-content-between">
                                    <p class="portfolio__title d-sm-block d-none"><?php echo get_post_meta(get_the_ID(), 'biscat', true); ?></p>
                                    <a class="portfolio-header__site d-sm-none d-flex"
                                       href="<?php echo get_post_meta(get_the_ID(), 'website', true); ?>">
                                        <?php
                                        $url = get_post_meta(get_the_ID(), 'website', true);;
                                        $domain = parse_url($url, PHP_URL_HOST);
                                        echo $domain;
                                        ?>
                                    </a>
                                    <p class="portfolio__tags d-sm-block d-flex"><?php echo get_post_meta(get_the_ID(), 'tags', true); ?></p>
                                </div>
                            </div>

                            <div class="position-relative">
                                <div class="swiper-button-next swiper-button-next__shops"></div>
                                <div class="swiper-button-prev swiper-button-prev__shops"></div>
                                <div class="swiper-container-shops">
                                    <div class="swiper-slide__bg"></div>
                                    <div class="swiper-wrapper">
                                        <?php
                                        global $post;
                                        $gallery = get_post_gallery_images($post);
                                        // Loop through each image in each gallery
                                        foreach ($gallery

                                                 as $image_url): ?>
                                            <div class="swiper-slide">
                                                <img data-toggle="modal" data-target="#portfolioModal"
                                                     src="<?= $image_url ?>" alt="">
                                            </div>
                                        <?php endforeach; ?>
                                        <div class="swiper-slide swiper-slide__last">
                                        </div>
                                    </div>
                                    <div class="swiper-pagination-shops portfolio-bullets d-sm-none d-block"></div>
                                </div>
                            </div>

                            <div class="row portfolio-content">
                                <div class="col-lg-9 col-12 portfolio-content__text">
                                    <p class="portfolio__title d-sm-none d-block"><?php echo get_post_meta(get_the_ID(), 'biscat', true); ?></p>
                                    <?php the_content(); ?>
                                </div>
                            </div>
                            <?php if ($portfolio_counter == 2): ?>

                            <div class="row mt-custom-3">
                                <div class="col">
                                    <a href="/portfolio/#shops" class="btn btn-see-all">
                                        Посмотреть все работы <img class="ml-4"
                                                                   src="/wp-content/themes/richbee/svg/landing-pageportfolio.svg"
                                                                   alt="">
                                    </a>
                                </div>
                            </div>
                            <?php break; ?>
                        <?php endif; ?>
                            <?php $portfolio_counter++; ?>
                        <?php endwhile; ?>
                        <?php wp_reset_postdata(); ?>
                        <?php unset($portfolio_counter); ?>
                    </div>
                </div>
            </div>

            <div class="container mb-5 tab-pane" id="service" role="tabpanel" aria-labelledby="serviceTab">
                <div class="row">
                    <div class="col-lg-10 offset-lg-1 col-12 offset-0">

                        <?php $catquery = new WP_Query('cat=34&posts_per_page=14'); // portfolio  ?>
                        <?php $portfolio_counter = 1; ?>
                        <?php while ($catquery->have_posts()) :
                            $catquery->the_post(); ?>
                            <div class="row portfolio-header">
                                <div class="col-sm-6 col-12 m-auto position-relative">
                                    <div class="portfolio-header__icon"
                                         style="background: url(<?php echo get_post_meta(get_the_ID(), 'icon', true); ?>);"></div>
                                    <a href="<?php the_permalink() ?>"
                                       class="h3 portfolio-header__content m-0"><?php the_title(); ?></a>
                                </div>
                                <div class="col-sm-6 col-12 text-sm-right text-left m-sm-auto mt-3">
                                    <a class="portfolio-header__site d-sm-block d-none"
                                       href="<?php echo get_post_meta(get_the_ID(), 'website', true); ?>">
                                        <?php
                                        $url = get_post_meta(get_the_ID(), 'website', true);;
                                        $domain = parse_url($url, PHP_URL_HOST);
                                        echo $domain;
                                        ?>
                                    </a>
                                </div>
                                <div class="col-12">
                                    <hr class="portfolio-header__hr">
                                </div>
                            </div>

                            <div class="row portfolio">
                                <div class="col d-sm-block d-flex justify-content-between">
                                    <p class="portfolio__title d-sm-block d-none"><?php echo get_post_meta(get_the_ID(), 'biscat', true); ?></p>
                                    <a class="portfolio-header__site d-sm-none d-flex"
                                       href="<?php echo get_post_meta(get_the_ID(), 'website', true); ?>">
                                        <?php
                                        $url = get_post_meta(get_the_ID(), 'website', true);;
                                        $domain = parse_url($url, PHP_URL_HOST);
                                        echo $domain;
                                        ?>
                                    </a>
                                    <p class="portfolio__tags d-sm-block d-flex"><?php echo get_post_meta(get_the_ID(), 'tags', true); ?></p>
                                </div>
                            </div>

                            <div class="position-relative">
                                <div class="swiper-button-next swiper-button-next__service"></div>
                                <div class="swiper-button-prev swiper-button-prev__service"></div>
                                <div class="swiper-container-service">
                                    <div class="swiper-slide__bg"></div>
                                    <div class="swiper-wrapper">
                                        <?php
                                        global $post;
                                        $gallery = get_post_gallery_images($post);
                                        // Loop through each image in each gallery
                                        foreach ($gallery

                                                 as $image_url): ?>
                                            <div class="swiper-slide">
                                                <img data-toggle="modal" data-target="#portfolioModal"
                                                     src="<?= $image_url ?>" alt="">
                                            </div>
                                        <?php endforeach; ?>
                                        <div class="swiper-slide swiper-slide__last">
                                        </div>
                                    </div>
                                    <div class="swiper-pagination-service portfolio-bullets d-sm-none d-block"></div>
                                </div>
                            </div>

                            <div class="row portfolio-content">
                                <div class="col-lg-9 col-12 portfolio-content__text">
                                    <p class="portfolio__title d-sm-none d-block"><?php echo get_post_meta(get_the_ID(), 'biscat', true); ?></p>
                                    <?php the_content(); ?>
                                </div>
                            </div>
                            <?php if ($portfolio_counter == 2): ?>

                            <div class="row mt-custom-3">
                                <div class="col">
                                    <a href="/portfolio/#service" class="btn btn-see-all">
                                        Посмотреть все работы <img class="ml-4"
                                                                   src="/wp-content/themes/richbee/svg/landing-pageportfolio.svg"
                                                                   alt="">
                                    </a>
                                </div>
                            </div>
                            <?php break; ?>
                        <?php endif; ?>
                            <?php $portfolio_counter++; ?>
                        <?php endwhile; ?>
                        <?php wp_reset_postdata(); ?>
                        <?php unset($portfolio_counter); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</div><!-- .container -->
<div class="container">
    <div class="row">

        <?php get_footer(); ?>
