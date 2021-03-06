<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Bootstrap_Starter
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.0/css/swiper.min.css">
    <link rel="icon" href="https://richbee.ru/favicon.png" type="image/png">
    <?php wp_head(); ?>
    <script type="text/javascript" src="https://vk.com/js/api/openapi.js?162"></script>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
    <a class="skip-link screen-reader-text"
       href="#content"><?php esc_html_e('Skip to content', 'wp-bootstrap-starter'); ?></a>
    <?php if (!is_page_template('blank-page.php') && !is_page_template('blank-page-with-container.php')): ?>
    <header id="masthead" class="site-header navbar-static-top <?php echo wp_bootstrap_starter_bg_class(); ?>"
            role="banner">
        <div class="container">
            <nav class="navbar navbar-expand-xl p-0">
                <div class="navbar-brand">
                    <?php if (get_theme_mod('wp_bootstrap_starter_logo')): ?>
                        <a href="<?php echo esc_url(home_url('/')); ?>">
                            <img src="<?php echo esc_url(get_theme_mod('wp_bootstrap_starter_logo')); ?>"
                                 alt="<?php echo esc_attr(get_bloginfo('name')); ?>">
                        </a>
                    <?php else : ?>
                        <a class="site-title"
                           href="<?php echo esc_url(home_url('/')); ?>"><?php esc_url(bloginfo('name')); ?></a>
                        <p class="site-title-info m-0">Студия веб-разработки</p>
                    <?php endif; ?>

                </div>
                <div class="navbar-brand recall-block order-xl-3 order-lg-2 order-md-2">
                    <a title="Telegram" href="https://telegram.me/mr_richbee"><img
                                src="/wp-content/themes/richbee/svg/telegram-header.svg" alt=""></a>
                    <a title="WhatsApp" href="https://wa.me/79266556988"><img
                                src="/wp-content/themes/richbee/svg/whatsapp-header.svg" alt=""></a>
                    <a title="Позвонить" class="header-phone ml-3" href="tel:<?php echo apply_filters('make_link_for_phone', get_option('header_contact_setting_phone')) ?>"><?php echo apply_filters('make_title_for_phone', get_option('header_contact_setting_phone')) ?></a>
                    <p class="m-0 recall"><a href="#" data-toggle="modal" data-target="#uslugiModal"
                                             data-whatever="обратный звонок">Обратный звонок</a></p>
                </div>
                <button class="navbar-toggler order-lg-3 order-md-3 order-xl-2" type="button" data-toggle="collapse"
                        data-target="#main-nav" aria-controls="" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <?php
                wp_nav_menu(array(
                    'theme_location' => 'primary',
                    'container' => 'div',
                    'container_id' => 'main-nav',
                    'container_class' => 'collapse navbar-collapse justify-content-center',
                    'menu_id' => false,
                    'menu_class' => 'navbar-nav',
                    'depth' => 3,
                    'fallback_cb' => 'wp_bootstrap_navwalker::fallback',
                    'walker' => new wp_bootstrap_navwalker()
                ));
                ?>
            </nav>
        </div>
    </header>
    <div id="content" class="site-content">
        <div class="container">
            <div class="row">



                <?php endif; ?>
            </div>
        </div>

        <div class="modal fade" id="uslugiModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
             aria-hidden="true">
            <div class="modal-dialog modal-960" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-12 text-sm-center text-md-left col-sm-12 col-md-7 col-lg-7 col-xl-7">
                                    <img src="/wp-content/themes/richbee/svg/modal-img.svg" alt="">
                                </div>
                                <div class="col-12 col-sm-12 col-md-5 col-lg-5 col-xl-5 p-0">
                                    <h1 class="new">
                                    </h1>
                                    <?php echo do_shortcode('[caldera_form id="CF5d79005c6c8fe"]'); ?>
                                    <div class="row">
                                        <div class="col-10 pl offset-1">
                                            <p>
                                                Нажимая кнопку “Заказать звонок”, вы даете свое согласие на <a
                                                        href="/wp-content/themes/richbee/politika-konfidencialnosti.pdf">обработку
                                                    персональных
                                                    данных</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <span class="close-modal">
            <button type="button" class="btn" data-dismiss="modal"><img
                        src="/wp-content/themes/richbee/svg/cross.svg" alt=""></button>
            </span>
                </div>
            </div>
        </div>

        <div class="modal fade" id="portfolioModal" tabindex="-1" role="dialog"
             aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-960 modal-dialog-centered" role="document">
                <div class="modal-content border-0">
                    <div class="modal-body p-0">
                        <div class="container-fluid p-0">
                            <div class="row">
                                <div class="col-12 text-sm-center text-md-left col-sm-12">
                                    <div id="carouselPortfolioModal" class="carousel slide" data-ride="carousel">
                                        <div class="carousel-inner">
                                        </div>
                                        <a class="carousel-control-prev" href="#carouselPortfolioModal" role="button"
                                           data-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="carousel-control-next" href="#carouselPortfolioModal" role="button"
                                           data-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <span class="close-modal">
                        <button type="button" class="btn" data-dismiss="modal"><img
                                    src="/wp-content/themes/richbee/svg/cross.svg" alt=""></button>
                    </span>
                </div>
            </div>
        </div>

        <?php if (get_option('header_youtube_setting_youtubeid') != ''): ?>
            <div class="modal fade" id="youtubeModal" tabindex="-1" role="dialog"
                 aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-960 modal-dialog-centered" role="document">
                    <div class="modal-content border-0">
                        <div class="modal-body p-0">
                            <div class="container-fluid p-0">
                                <div class="row">
                                    <div class="col-12">
                                        <div id="player">
                                            <div id="ytplayer"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <span class="close-modal">
                        <button type="button" class="btn" data-dismiss="modal"><img
                                    src="/wp-content/themes/richbee/svg/cross.svg" alt=""></button>
                    </span>
                    </div>
                </div>
            </div>
        <?php endif; ?>
        <script src="/wp-content/themes/richbee/inc/assets/js/swiper.min.js"></script>
        <script>
            jQuery(document).ready(function ($) {
                $('#portfolioModal').on('show.bs.modal', function (event) {
                    var button = $(event.relatedTarget);
                    var modal = $(this);
                    var container = button.parents('.swiper-wrapper');
                    var srcList = [];
                    var src;
                    var firstImg = button.attr('src');
                    firstImg = '"' + firstImg + '"';
                    container.find('.swiper-slide').each(function (i) {
                        src = $(this).find('img').attr('src');
                        if (src !== undefined) {
                            srcList.push(src);
                        }
                    });
                    $.each(srcList, function (i) {
                        modal.find('.carousel-inner').append($('<div>', {class: 'carousel-item'}));
                    });
                    modal.find('.carousel-item').each(function (i) {
                        $(this).append($('<img>', {class: 'd-block w-100', src: srcList[i]}));
                    });
                    $('img[src$=' + firstImg + ']').parents('.carousel-item').addClass('active');
                });

                $('#portfolioModal').on('hidden.bs.modal', function (e) {
                    $(this).find('.carousel-inner').html('');
                });

                jQuery('#uslugiModal').on('show.bs.modal', function (event) {
                    var button = jQuery(event.relatedTarget);
                    var recipient = button.data('whatever');
                    var modal = jQuery(this);
                    modal.find('h1.new').text('Заказать ' + recipient);
                    modal.find('.uslugi-target').val(recipient);
                })
            });
        </script>

        <div class="container">
            <div class="row">