<?php
/*
Template Name: new-portfolio
Template Post Type: post, page, product
*/
?>

<?php get_header(); ?>

<div class="container post-block">
    <div class="row">
        <div class="col-12 col-lg-5">
            <div class="position-relative">
                <div class="swiper-container swiper-container-img">
                    <div class="swiper-wrapper">
                        <?php
                        global $post;
                        $gallery = get_post_gallery_images($post);
                        // Loop through each image in each gallery
                        foreach ($gallery

                                 as $image_url): ?>
                            <div class="swiper-slide">
                                <img data-toggle="modal" data-target="#portfolioModal" src="<?= $image_url ?>" alt="">
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="row">
                    <div class="swiper-pagination swiper-pagination-img col"></div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-12 ml-auto mr-auto">
            <h1 class="post-block-header mt-4"><?php the_title(); ?></h1>
            <div class="row">
                <div class="col">
                    <p class="post-block-title"><?php echo get_post_meta(get_the_ID(), 'biscat', true); ?></p>
                    <div class="post-block-content"><?php the_content(); ?></div>
                    <p class="post-block-site">Адрес сайта:
                        <a class="post-block-site__link"
                           href="<?php echo get_post_meta(get_the_ID(), 'website', true); ?>" target="_blank">
                            <?php
                            $url = get_post_meta(get_the_ID(), 'website', true);;
                            $domain = parse_url($url, PHP_URL_HOST);
                            echo $domain;
                            ?>
                        </a></p>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>

<?php get_template_part( 'template-parts/youtube-block', 'youtube-block' ); ?>

<?php get_template_part( 'template-parts/service-loop', 'service-loop' ); ?>

<script>
    var swiper = new Swiper('.swiper-container-img', {
        pagination: {
            el: '.swiper-pagination-img',
            clickable: true,
            renderBullet: function (index, className) {
                let imgList = [];
                let img;
                jQuery('.swiper-slide').each(function () {
                    img = jQuery(this).find('img').attr('src');
                    if (img !== undefined) {
                        imgList.push(img);
                    }
                });
                return '<img src="' + imgList[index] + '" class="' + className + '">';
            },
        },
    });
</script>

<div class="container">
    <div class="row">
        <?php get_footer(); ?>
