<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Bootstrap_Starter
 */

?>
<?php if (!is_page_template('blank-page.php') && !is_page_template('blank-page-with-container.php')): ?>
    </div><!-- .row -->
    </div><!-- .container -->
    </div><!-- #content -->
    <?php get_template_part('footer-widget'); ?>
    <div class="prefooter-block">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="prefooter-block-card">
                        <div class="row">
                            <div class="col-lg-5 col-12">
                                <div class="prefooter-block-card-body">
                                    <p class="prefooter-block-card__header">Пообщаемся?</p>
                                    <p class="prefooter-block-card__info">Если вам нужна разработка сайта или его
                                        продвижение, то предлагаем обсудить это:</p>
                                    <div class="prefooter-block-card-links">
                                        <a href="#" class="prefooter-block-card-links_link">8 (926) 655-69-88</a>
                                        <a href="#" class="prefooter-block-card-links_link">sales@richbee.ru</a>
                                        <a href="#" class="prefooter-block-card-links_link">Написать в Telegram</a>
                                        <a href="#" class="prefooter-block-card-links_link">Написать в WhatsApp</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-7 col-12">
                                <div class="prefooter-block-card-bg"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer id="colophon" class="site-footer <?php echo wp_bootstrap_starter_bg_class(); ?>" role="contentinfo">
        <div class="container">
            <div class="row">
                <div class="col">
                    <hr class="footer-hr">
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-lg-8 first-card">
                    <?php wp_nav_menu(array('theme_location' => 'second', 'container_class' => 'mt-4 footer-menu')); ?>
                </div>
                <div class="col-12 col-lg-4 second-card text-right">
                    <a class="btn footer-btn">
                        Заполнить бриф
                    </a>
                </div>
            </div>
            <div class="row mt-5 more-info">
                <div class="col-12 col-lg-8 first-card">
                    <span class="mr-4 footer-site-title">© <?php echo date('Y'); ?> Студия веб-разработки Richbee</span>
                </div>
                <div class="col-12 col-lg-4 second-card text-right">
                    <a class="footer-policy" href="/wp-content/themes/richbee/politika-konfidencialnosti.pdf">Политика
                        конфиденциальности</a>
                </div>
            </div>
        </div>
    </footer><!-- #colophon -->
<?php endif; ?>
</div><!-- #page -->

<script src="/wp-content/themes/richbee/inc/assets/js/swiper.min.js"></script>

<script>
    jQuery(document).ready(function ($) {
        jQuery('.swiper-container-all').each(function () {
            var swiperAll = new Swiper(this, {
                slidesPerView: 3,
                spaceBetween: 30,
                breakpoints: {
                    576: {
                        slidesPerView: 1,
                        spaceBetween: 0,
                    },
                    768: {
                        slidesPerView: 2,
                        spaceBetween: 30,
                    },
                    991: {
                        slidesPerView: 3,
                        spaceBetween: 30,
                    },
                },
                navigation: {
                    nextEl: $(this).parents('.position-relative').find('.swiper-button-next__all'),
                    prevEl: $(this).parents('.position-relative').find('.swiper-button-prev__all'),
                },
            });
        });

        jQuery('#coopTab').on('shown.bs.tab', function () {
            jQuery('.swiper-container-coop').each(function () {
                var swiperCoop = new Swiper(this, {
                    slidesPerView: 3,
                    spaceBetween: 30,
                    breakpoints: {
                        576: {
                            slidesPerView: 1,
                            spaceBetween: 0,
                        },
                        768: {
                            slidesPerView: 2,
                            spaceBetween: 30,
                        },
                        991: {
                            slidesPerView: 3,
                            spaceBetween: 30,
                        },
                    },
                    navigation: {
                        nextEl: $(this).parents('.position-relative').find('.swiper-button-next__coop'),
                        prevEl: $(this).parents('.position-relative').find('.swiper-button-prev__coop'),
                    },
                });
                swiperCoop.update();
            });
        });

        jQuery('#shopsTab').on('shown.bs.tab', function () {
            jQuery('.swiper-container-shops').each(function () {
                var swiperShops = new Swiper(this, {
                    slidesPerView: 3,
                    spaceBetween: 30,
                    breakpoints: {
                        576: {
                            slidesPerView: 1,
                            spaceBetween: 0,
                        },
                        768: {
                            slidesPerView: 2,
                            spaceBetween: 30,
                        },
                        991: {
                            slidesPerView: 3,
                            spaceBetween: 30,
                        },
                    },
                    navigation: {
                        nextEl: $(this).parents('.position-relative').find('.swiper-button-next__shops'),
                        prevEl: $(this).parents('.position-relative').find('.swiper-button-prev__shops'),
                    },
                });
                swiperShops.update();
            });
        });

        jQuery('#serviceTab').on('shown.bs.tab', function () {
            jQuery('.swiper-container-service').each(function () {
                var swiperService = new Swiper(this, {
                    slidesPerView: 3,
                    spaceBetween: 30,
                    breakpoints: {
                        576: {
                            slidesPerView: 1,
                            spaceBetween: 0,
                        },
                        768: {
                            slidesPerView: 2,
                            spaceBetween: 30,
                        },
                        991: {
                            slidesPerView: 3,
                            spaceBetween: 30,
                        },
                    },
                    navigation: {
                        nextEl: $(this).parents('.position-relative').find('.swiper-button-next__service'),
                        prevEl: $(this).parents('.position-relative').find('.swiper-button-prev__service'),
                    },
                });
                swiperService.update();
            });
        });
    })

</script>

<?php wp_footer(); ?>
<!-- Yandex.Metrika counter -->
<script type="text/javascript"> (function (m, e, t, r, i, k, a) {
        m[i] = m[i] || function () {
            (m[i].a = m[i].a || []).push(arguments)
        };
        m[i].l = 1 * new Date();
        k = e.createElement(t), a = e.getElementsByTagName(t)[0], k.async = 1, k.src = r, a.parentNode.insertBefore(k, a)
    })(window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");
    ym(27860136, "init", {clickmap: true, trackLinks: true, accurateTrackBounce: true, webvisor: true}); </script>
<noscript>
    <div><img src="https://mc.yandex.ru/watch/27860136" style="position:absolute; left:-9999px;" alt=""/></div>
</noscript> <!-- /Yandex.Metrika counter -->
</body>
</html>