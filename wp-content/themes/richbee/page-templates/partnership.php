<?php
/*
Template Name: partnership
Template Post Type: post, page, product
*/
?>
<?php get_header(); ?>

</div>
</div>
<div class="bg-partnership">
    <div class="container">
        <div class="row partnership-header">
            <div class="col-lg-8 offset-lg-2 col-12 offset-0">
                <h1 class="partnership-header__title">RichBee</h1>
                <p class="partnership-header__after-title">Партнерская программа</p>
                <p class="partnership-header__text">Приводи клиентов и получай
                    <span>до 30.000 рублей</span> за каждого</p>
            </div>
        </div>
    </div>
</div>
<div class="bg-partnership-content">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 col-12 offset-0">
                <div class="partnership-card">
                    <div class="partnership-card-body">
                        <p class="partnership-card__title">
                            Работаешь сутками, но не можешь увеличить доход?
                        </p>
                        <p class="partnership-card__text">
                            Наверняка у тебя спрашивают: “Можешь кого-нибудь посоветовать, у кого заказать сайт?” Теперь
                            ты знаешь кого советовать, ведь мы не только качественно и оперативно выполним работу, но и
                            поделимся с тобой частью прибыли 😉
                        </p>
                        <a href="#" class="partnership-card__btn">
                            Звучит круто, я в деле!
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row partnership-content">
            <div class="col-lg-8 offset-lg-2 col-12 offset-0">
                <p class="partnership-content__title">
                    Получай 10% с любой услуги,
                    которую закажет твой клиент
                </p>
                <p class="partnership-content__text">
                    Средний чек на разраоботку сайта составляет 100к (твоя комиссия 10.000 рублей). На интернет-магазин:
                    150 - 200к (ты получишь от 15 до 20 тысяч).
                    За заказ на разработку сложного веб-проекта мы отдадим тебе 30.000 руб.
                </p>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <?php $catquery = new WP_Query('cat=36&posts_per_page=4'); // portfolio  ?>
        <?php $portfolio_counter = 1; ?>
        <?php while ($catquery->have_posts()) :
            $catquery->the_post(); ?>
            <div class="col-12 col-sm-6 col-md-6 col-lg-3 p-lg-0 p-unset col-xl-3">
                <a class="text-decoration-none" href="<?php echo get_permalink(); ?>">
                    <div class="partnership-card-service">
                        <div class="partnership-card-service-body">
                            <div>
                                <h3 class="partnership-card-service__title">
                                    <?php
                                    $title = get_the_title();
                                    $tit = preg_split('~\(:\)~', $title, 2);
                                    echo $tit[1]; ?>
                                </h3>
                                <p class="partnership-card-service__text">
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
<div class="bg-partnership-footer">
    <div class="container">
        <div class="row partnership-footer">
            <div class="col-lg-8 offset-lg-2 col-12 offset-0">
                <p class="partnership-footer__title">Готов поднять деньжат?</p>
                <p class="partnership-footer__text">Как начать работу? Напиши нам в ВК чем ты занимаешься, и мы
                    решим,
                    чем можем быть полезны друг другу 😘</p>
                <a href="#" class="partnership-footer__btn">Связаться в ВК</a>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>
