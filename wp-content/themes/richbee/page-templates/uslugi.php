<?php
/*
Template Name: Uslugi
Template Post Type: post, page, product
*/
?>

<?php get_header(); ?>

<div class="container uslugi">
    <div class="row mb">
        <div class="col">
            <h1 class="uslugi-h1 mt-0">
                Услуги
            </h1>
        </div>
    </div>
    <?php $catquery = new WP_Query('cat=36&posts_per_page=5'); // portfolio  ?>
    <?php $portfolio_counter = 1; ?>
    <?php while ($catquery->have_posts()) :
        $catquery->the_post(); ?>
        <div class="row uslugi-row">
            <div class="col-12 col-sm-12 col-md-4 col-xl-3 col-lg-3">
                <div class="card border-0">
                    <img class="bg-ellipse" src="/wp-content/themes/richbee/images/Group%203.2.png" alt="">
                    <div class="card-body">
                        <div class="card-body-primary text-center">
                            <?php
                            $svg = get_post_meta($post->ID, 'service-svg', true);
                            echo $svg;
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-11 col-sm-11 col-md-5 col-lg-5 col-xl-5 offset-1 offset-md-0 offset-xl-1">
                <h2 class="uslugi-h2">
                    <?php
                    $title = get_the_title();
                    $tit = preg_split('~\(:\)~', $title, 2);
                    echo $tit[1]; ?>
                </h2>
                <p>
                    <?php
                    $text = get_the_content();
                    $txt = preg_split('~\(:\)~', $text, 2);
                    echo $txt[1]; ?>
                </p>
                <p>
                    <?php
                    echo $txt[0]; ?>
                </p>
            </div>
            <div class="col-11 col-sm-11 col-md-3 col-lg-3 col-xl-2 offset-1 offset-md-0 offset-xl-1">
                <a href="<?php echo get_permalink(); ?>">Подробнее</a>
            </div>
        </div>
        <?php $portfolio_counter++; ?>
    <?php endwhile; ?>
    <?php wp_reset_postdata(); ?>

    <?php $catquery = new WP_Query('cat=37&posts_per_page=4'); // portfolio  ?>
    <?php $portfolio_counter = 1; ?>
    <?php while ($catquery->have_posts()) :
        $catquery->the_post(); ?>
        <div class="row uslugi-row">
            <div class="col-12 col-sm-12 col-md-4 col-xl-3 col-lg-3">
                <div class="card border-0">
                    <img class="bg-ellipse" src="/wp-content/themes/richbee/images/Group%203.1.png" alt="">
                    <div class="card-body">
                        <div class="card-body-warning text-center">
                            <?php
                            $svg = get_post_meta($post->ID, 'service-svg', true);
                            echo $svg;
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-11 col-sm-11 col-md-5 col-lg-5 col-xl-5 offset-1 offset-md-0 offset-xl-1">
                <h2 class="uslugi-h2">
                    <?php
                    $title = get_the_title();
                    $tit = preg_split('~\(:\)~', $title, 2);
                    echo $tit[1]; ?>
                </h2>
                <p>
                    <?php
                    $text = get_the_content();
                    $txt = preg_split('~\(:\)~', $text, 2);
                    echo $txt[1]; ?>
                </p>
                <p>
                    <?php
                    echo $txt[0]; ?>
                </p>
            </div>
            <div class="col-11 col-sm-11 col-md-3 col-lg-3 col-xl-2 offset-1 offset-md-0 offset-xl-1">
                <a href="<?php echo get_permalink(); ?>">Подробнее</a>
            </div>
        </div>
        <?php $portfolio_counter++; ?>
    <?php endwhile; ?>
    <?php wp_reset_postdata(); ?>
</div>

<?php get_footer(); ?>
