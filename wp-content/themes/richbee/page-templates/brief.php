<?php
/*
Template Name: brief
Template Post Type: post, page, product
*/
?>

<?php get_header(); ?>

<div class="container brief-header">
    <div class="row">
        <div class="col-lg-8 offset-lg-2 col-12 offset-0">
            <h2 class="brief-header__title">Заполните бриф</h2>
            <p class="brief-header__content">Оставьте заявку с помощью данной формы, или свяжитесь с нами <a
                        class="brief-header__link" href="/kontakty/">одним из доступных способов</a>.</p>
        </div>
    </div>
</div>

<div class="container brief">
    <div class="col-lg-8 offset-lg-2 col-12 offset-0">

        <?php echo do_shortcode('[caldera_form id="CF5dc566e9237cf"]') ?>

        <!--    <div class="row">-->
        <!--        <div class="col-lg-8 offset-lg-2 col-12 offset-0">-->
        <!--            <h3 class="brief-title">Какие услуги вас интересуют?</h3>-->
        <!--        </div>-->
        <!--    </div>-->
        <!--    <div class="row">-->
        <!--        <div class="col-lg-8 offset-lg-2 col-12 offset-0">-->
        <!--            <label class="brief-pill">-->
        <!--                <input class="d-none brief-pill__input" type="checkbox">-->
        <!--                <span>Разработка корпоративного сайта</span></label>-->
        <!--        </div>-->
        <!--    </div>-->
        <!--    <div class="row">-->
        <!--        <div class="col-lg-8 offset-lg-2 col-12 offset-0">-->
        <!--            <h3 class="brief-title">Опишите задачу</h3>-->
        <!--            <input placeholder="Описание" type="text" class="form-control brief-input">-->
        <!--        </div>-->
        <!--    </div>-->
        <!--    <div class="row">-->
        <!--        <div class="col-lg-4 offset-lg-2 col-12 offset-0">-->
        <!--            <div class="btn brief-btn">Отправить запрос <img class="ml-4" src="/wp-content/themes/richbee/svg/calculator.svg" alt=""></div>-->
        <!--        </div>-->
        <!--    </div>-->
    </div>
</div>


<?php get_footer(); ?>
