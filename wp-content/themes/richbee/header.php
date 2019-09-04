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
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.0/css/swiper.min.css">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'wp-bootstrap-starter' ); ?></a>
    <?php if(!is_page_template( 'blank-page.php' ) && !is_page_template( 'blank-page-with-container.php' )): ?>
	<header id="masthead" class="site-header navbar-static-top <?php echo wp_bootstrap_starter_bg_class(); ?>" role="banner">
        <div class="container">
            <nav class="navbar navbar-expand-xl p-0">
                <div class="navbar-brand">
                    <?php if ( get_theme_mod( 'wp_bootstrap_starter_logo' ) ): ?>
                        <a href="<?php echo esc_url( home_url( '/' )); ?>">
                            <img src="<?php echo esc_url(get_theme_mod( 'wp_bootstrap_starter_logo' )); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>">
                        </a>
                    <?php else : ?>
                        <a class="site-title" href="<?php echo esc_url( home_url( '/' )); ?>"><?php esc_url(bloginfo('name')); ?></a>
                        <p class="site-title-info m-0">Агентство интернет-маркетинга</p>
                    <?php endif; ?>

                </div>
                <div class="navbar-brand recall-block order-xl-3 order-lg-2 order-md-2">
                    <a class="ml-2" href="#"><img src="/wp-content/themes/richbee/svg/telegram-header.svg" alt=""></a>
                    <a class="ml-2" href="#"><img src="/wp-content/themes/richbee/svg/whatsapp-header.svg" alt=""></a>
                    <a class="header-phone ml-4" href="#">8 (495) 265-45-65</a>
                    <p class="m-0 recall"><a href="#">Обратный звонок</a></p>
                </div>
                <button class="navbar-toggler order-lg-3 order-md-3 order-xl-2" type="button" data-toggle="collapse" data-target="#main-nav" aria-controls="" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <?php
                wp_nav_menu(array(
                'theme_location'    => 'primary',
                'container'       => 'div',
                'container_id'    => 'main-nav',
                'container_class' => 'collapse navbar-collapse justify-content-center',
                'menu_id'         => false,
                'menu_class'      => 'navbar-nav',
                'depth'           => 3,
                'fallback_cb'     => 'wp_bootstrap_navwalker::fallback',
                'walker'          => new wp_bootstrap_navwalker()
                ));
                ?>
            </nav>
        </div>
	</header>
	<div id="content" class="site-content">
		<div class="container">
			<div class="row">

                <?php
                $cats =  get_the_category();
                $cat = $cats[0];
                $cat_slug = $cat->slug; // ярлык рубрики
                $cat_id = $cat->cat_ID; // ID рубрики
                $cat_name = $cat->name; // название рубрики
                ?>
                <?php if ($cat_slug == 'portfolio'): ?>
                        <div class="container">
                            <div class="row mb-5">
                                <div class="col">
                                    <h1 class="new p-0">
                                        <?= get_the_title() ?>
                                    </h1>
                                    <h3 class="gray mt-0 mb-5">
                                        <?= get_post_meta($post->ID, 'biscat', true); ?>
                                    </h3>
                                    <div class="row">
                                        <div class="col-12 col-lg-8 offset-lg-2">
                                            <p class="new">
                                                <?= get_the_content() ?>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="card rectangle mt-5">
                                        <img src="<?= get_the_post_thumbnail_url($post->ID, 'full') ?>" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                <?php endif; ?>

                <?php endif; ?>
