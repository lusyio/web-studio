<?php
/*
Template Name: Contact
Template Post Type: post, page, product
*/
?>

<?php get_header(); ?>
<div class="container mb-5">
    <div class="row">
        <div class="col text-center">
            <h1 class="new mb-4 position-relative">Контакты
                <div class="singletopp">RICHBEE</div>
            </h1>
        </div>
    </div>

    <div class="row mt-5 contacts">
        <div class="col-sm-3 col-12">
            <p>Телефон для связи</p>
            <h3><a href="tel:<?php echo apply_filters('make_link_for_phone', get_option('header_contact_setting_phone')) ?>" class="prefooter-block-card-links_link"><img class="mr-4" src="/wp-content/themes/richbee/svg/telephone.svg" alt=""><?php echo apply_filters('make_title_for_phone', get_option('header_contact_setting_phone')) ?></a></h3>
        </div>
        <div class="col-sm-3 col-12">
            <p>Электронная почта</p>
            <h3><a href="<?php echo get_option('header_contact_setting_email') ?>" class="prefooter-block-card-links_link"><img class="mr-4" src="/wp-content/themes/richbee/svg/email.svg" alt=""><?php echo get_option('header_contact_setting_email') ?></a></h3>
        </div>
        <div class="col-sm-6 col-12">
            <p>Адрес офиса</p>
            <h3><a href="https://yandex.ru/maps/?um=constructor%3Add05ca22980767467f952afb09c0a19fdd9a8f866442fca49941686f7df91d3b&source=constructorLink" class="prefooter-block-card-links_link"><img class="mr-4" src="/wp-content/themes/richbee/svg/office.svg" alt="">Москва, 3-я Мытищинская улица, 16с60</a></h3>
        </div>
        <div class="col-sm-12 mt-3">
            <script type="text/javascript" charset="utf-8" async
                    src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A7ec90e7e99a1102fac383fa99852da0023271a8dd9a5386156286e26d7070e46&amp;width=100%25&amp;height=400&amp;lang=ru_RU&amp;scroll=true"></script>

        </div>
    </div>
</div>

<?php get_footer(); ?>
