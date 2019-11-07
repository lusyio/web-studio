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
                    <?php if (is_page('kontakty') !== true): ?>

                        <div class="prefooter-block-card">
                            <div class="row">
                                <div class="col-xl-5 col-lg-6 col-12">
                                    <div class="prefooter-block-card-body">
                                        <p class="prefooter-block-card__header">Пообщаемся?</p>
                                        <p class="prefooter-block-card__info">Если вам нужна разработка сайта или его
                                            продвижение, то предлагаем обсудить это:</p>
                                        <div class="prefooter-block-card-links">
                                            <a href="tel:<?php echo apply_filters('make_link_for_phone', get_option('header_contact_setting_phone')) ?>" class="prefooter-block-card-links_link"><img
                                                        class="mr-4" src="/wp-content/themes/richbee/svg/telephone.svg"
                                                        alt=""><?php echo apply_filters('make_title_for_phone', get_option('header_contact_setting_phone')) ?></a>
                                            <a href="<?php echo get_option('header_contact_setting_email') ?>"
                                               class="prefooter-block-card-links_link"><img
                                                        class="mr-4" src="/wp-content/themes/richbee/svg/email.svg"
                                                        alt=""><?php echo get_option('header_contact_setting_email') ?></a>
                                            <a href="https://telegram.me/mr_richbee"
                                               class="prefooter-block-card-links_link"><img class="mr-4"
                                                                                            src="/wp-content/themes/richbee/svg/telegram-footer.svg"
                                                                                            alt="">Написать в
                                                Telegram</a>
                                            <a href="https://wa.me/79266556988" class="prefooter-block-card-links_link"><img
                                                        class="mr-4"
                                                        src="/wp-content/themes/richbee/svg/whatsapp-footer.svg" alt="">Написать
                                                в WhatsApp</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-7 col-lg-6 col-12">
                                    <script type="text/javascript" charset="utf-8" async
                                            src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Add05ca22980767467f952afb09c0a19fdd9a8f866442fca49941686f7df91d3b&amp;width=100%&amp;height=500&amp;lang=ru_RU&amp;scroll=true">
                                    </script>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>

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
                <div class="col-12 col-lg-4 second-card text-lg-right text-center">
                    <a class="btn footer-btn">
                        Заполнить бриф
                    </a>
                </div>
            </div>
            <div class="row mt-4 mt-lg-5 more-info">
                <div class="col-12 col-lg-8 first-card text-lg-left text-center mb-lg-unset mb-4">
                    <span class="mr-4 footer-site-title">© <?php echo date('Y'); ?> Студия веб-разработки Richbee</span>
                </div>
                <div class="col-12 col-lg-4 second-card text-lg-right text-center">
                    <a class="footer-policy" href="/wp-content/themes/richbee/politika-konfidencialnosti.pdf">Политика
                        конфиденциальности</a>
                </div>
            </div>
        </div>
    </footer><!-- #colophon -->
<?php endif; ?>
</div><!-- #page -->


<?php if (get_post_meta($post->ID, 'youtube_id', true) !== ''): ?>
    <script>
        // Load the IFrame Player API code asynchronously.
        var tag = document.createElement('script');
        tag.src = "https://www.youtube.com/player_api";
        var firstScriptTag = document.getElementsByTagName('script')[0];
        firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

        // Replace the 'ytplayer' element with an <iframe> and
        // YouTube player after the API code downloads.
        var player;
        var height = 496;
        jQuery('#player').css('height', height);

        function onYouTubePlayerAPIReady() {
            player = new YT.Player('ytplayer', {
                height: height + 'px',
                width: '100%',
                videoId: '<?= get_option('header_youtube_setting_youtubeid') ?>'
            });
        }

        jQuery('#youtubeModal').on('shown.bs.modal', function () {
            player.playVideo();
        });

        jQuery('#youtubeModal').on('hidden.bs.modal', function (e) {
            player.stopVideo();
        })
    </script>
<?php endif; ?>

<script>
    jQuery(document).ready(function ($) {

        var swiperServises = new Swiper('.swiper-container-services', {
            pagination: {
                el: '.servises-pagination',
                clickable: true,
                renderBullet: function (index, className) {
                    let name = ['УСЛУГИ ПО РАЗРАБОТКЕ', 'УСЛУГИ ПО ПРОДВИЖЕНИЮ'];
                    return '<div class="col-12 col-sm-6 col-lg-4 ' + className + '">' +
                        '<div class="btn w-100 second-block-content__dev">' + name[index] +
                        '</div>' +
                        '</div>';
                },
            },
        });

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