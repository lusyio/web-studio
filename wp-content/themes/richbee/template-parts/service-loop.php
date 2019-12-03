<div class="second-block-bg">
    <div class="container position-relative second-block mb-5">
        <div class="row">
            <div class="col-12 col-lg-8">
                <h3 class="second-block-header">Можем разработать для вас <span class="second-block-header__span">онлайн-сервис любой сложности</span>
                </h3>
                <p class="second-block-content">Разрабатываем CRM- и ERP- системы, программы лояльности, отзовики и
                    любые другие онлайн-сервисы + создаем под ключ корпоративные сайты, интернет-магазины и
                    лендинги.</p>
                <div class="swiper-pagination servises-pagination btn-group"></div>
            </div>
        </div>
        <div class="swiper-container-services">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="container">
                        <div class="row">
                            <?php $catquery = new WP_Query('cat=36&posts_per_page=4'); // portfolio  ?>
                            <?php $portfolio_counter = 1; ?>
                            <?php while ($catquery->have_posts()) :
                                $catquery->the_post(); ?>
                                <div class="col-12 col-sm-6 col-md-6 col-lg-3 col-xl-3 mt-3">
                                    <a class="text-decoration-none" href="<?php echo get_permalink(); ?>">
                                        <div class="card border-0 card-services">
                                            <div class="card-body">
                                                <div class="second-block-card-body text-center">
                                                    <?php
                                                    $svg = get_post_meta($post->ID, 'service-svg', true);
                                                    echo $svg;
                                                    ?>
                                                </div>
                                                <div>
                                                    <h3 class="second-block-card-body__header">
                                                        <?php
                                                        $title = get_the_title();
                                                        $tit = preg_split('~\(:\)~', $title, 2);
                                                        echo $tit[1]; ?>
                                                    </h3>
                                                    <p class="second-block-card-body__content">
                                                        <?php
                                                        $text = get_the_content();
                                                        $txt = preg_split('~\(:\)~', $text, 2);
                                                        echo $txt[1]; ?>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <?php $portfolio_counter++; ?>
                            <?php endwhile; ?>
                            <?php wp_reset_postdata(); ?>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="container">
                        <div class="row">
                            <?php $catquery = new WP_Query('cat=37&posts_per_page=4'); // portfolio  ?>
                            <?php $portfolio_counter = 1; ?>
                            <?php while ($catquery->have_posts()) :
                                $catquery->the_post(); ?>
                                <div class="col-12 col-sm-6 col-md-6 col-lg-3 col-xl-3 mt-3">
                                    <a class="text-decoration-none" href="<?php echo get_permalink(); ?>">
                                        <div class="card border-0" id="coop-site">
                                            <div class="card-body">
                                                <div class="second-block-card-body text-center">
                                                    <?php
                                                    $svg = get_post_meta($post->ID, 'service-svg', true);
                                                    echo $svg;
                                                    ?>
                                                </div>
                                                <div>
                                                    <h3 class="second-block-card-body__header">
                                                        <?php
                                                        $title = get_the_title();
                                                        $tit = preg_split('~\(:\)~', $title, 2);
                                                        echo $tit[1]; ?>
                                                    </h3>
                                                    <p class="second-block-card-body__content">
                                                        <?php
                                                        $text = get_the_content();
                                                        $txt = preg_split('~\(:\)~', $text, 2);
                                                        echo $txt[1]; ?>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <?php $portfolio_counter++; ?>
                            <?php endwhile; ?>
                            <?php wp_reset_postdata(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>