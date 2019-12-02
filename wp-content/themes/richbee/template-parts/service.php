<?php
/*
Template Name: Service
Template Post Type: post, page, product
*/
?>

<?php get_header(); ?>

<div class="container">
    <div class="row service-header">
        <div class="col-lg-8 offset-lg-2 col-12 offset-0">
            <h1 class="service-header__title">
                <?php echo the_title(); ?>
            </h1>
            <p class="service-header__text">
                <?php
                $text = get_the_content();
                $txt = preg_split('~\(:\)~', $text, 3);
                echo $txt[0];
                ?>
            </p>
            <p class="service-header__price">
                <?php echo $txt[1]; ?>
            </p>
        </div>
    </div>
    <div class="row d-sm-none d-flex">
        <div class="col-12">
            <a class="service-calculate mt-0 mb-5" href="/brief/">РАСЧИТАТЬ СТОИМОСТЬ ОНЛАЙН <img
                        src="/wp-content/themes/richbee/svg/calculator.svg" class="ml-4" alt=""></a>
        </div>
    </div>
    <?php
    $metas = get_post_meta($post->ID, 'service-tag');
    ?>
    <div class="row service-content">
        <div class="col-lg-10 offset-lg-1 col-12 offset-0">
            <div class="row">
                <?php foreach ($metas
                               as $meta): ?>
                    <?php $met = preg_split('~\(:\)~', $meta, 2); ?>
                    <div class="col-lg-6 col-12">
                        <p class="service-content__title">
                            <?php echo $met[0]; ?>
                        </p>
                        <p class="service-content__text">
                            <?php echo $met[1]; ?>
                        </p>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    <div class="row d-sm-flex d-none">
        <div class="col-12">
            <a class="service-calculate" href="/brief/">РАСЧИТАТЬ СТОИМОСТЬ ОНЛАЙН <img
                        src="/wp-content/themes/richbee/svg/calculator.svg" class="ml-4" alt=""></a>
        </div>
    </div>
</div>
</div>
</div>

<?php if (get_option('header_youtube_setting_youtubeid') != ''): ?>
    <div class="video-bg mt-sm-none mt-5">
        <div class="container video-block">
            <div class="row">
                <div class="col-lg-6 col-12 position-relative order-sm-1 order-2">
                    <img class="youtube-bg" src="<?= get_option('header_youtube_setting_youtubebg') ?>" alt="">
                    <span class="youtube-start-btn" data-toggle="modal" data-target="#youtubeModal"></span>
                </div>
                <div class="col-lg-6 col-12 m-auto order-sm-2 order-1">
                    <p class="video-block-header">Посмотрите, <span class="video-block-header__span">как проходит разработка в нашей студии</span>
                    </p>
                    <p class="video-block-content d-sm-block d-none">Показываем процесс разработки сайта <a
                                class="video-block-content__link"
                                href="http://cherchen.ru/">cherchen.ru</a>
                        для автора Александры Черчень (длительность - 2 минуты)</p>
                </div>
                <div class="col-lg-6 col-12 m-auto d-sm-none d-block order-3">
                    <p class="video-block-content">Показываем процесс разработки сайта <a
                                class="video-block-content__link"
                                href="http://cherchen.ru/">cherchen.ru</a>
                        для автора Александры Черчень <span>(длительность - 2 минуты)</span></p>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>

<?php get_template_part( 'template-parts/service-loop', 'service-loop' ); ?>

<?php get_footer(); ?>
