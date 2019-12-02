<?php if (get_option('header_youtube_setting_youtubeid') != ''): ?>
    <div class="video-bg">
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