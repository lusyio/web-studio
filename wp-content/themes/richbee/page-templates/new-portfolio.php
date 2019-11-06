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
            <?php echo do_shortcode('[gallery option1="value1"]'); ?>
        </div>
        <div class="col-lg-6 col-12 m-auto">
            <h1 class="post-block-header"><?php the_title(); ?></h1>
            <div class="row">
                <div class="col">
                    <p class="post-block-title"><?php echo get_post_meta(get_the_ID(), 'biscat', true); ?></p>
                    <div class="post-block-content"><?php the_content(); ?></div>
                    <p class="post-block-site">Андрес сайта:
                        <a class="post-block-site__link"
                           href="<?php echo get_post_meta(get_the_ID(), 'website', true); ?>">
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

<?php if (get_post_meta($post->ID, 'youtube_id', true) !== ''): ?>
    <div class="video-bg">
        <div class="container video-block">
            <div class="row">
                <div class="col-lg-6 col-12 position-relative">
                    <img class="youtube-bg" src="<?= get_post_meta($post->ID, 'youtube_bg', true) ?>" alt="">
                    <span class="youtube-start-btn" data-toggle="modal" data-target="#youtubeModal"></span>
                </div>
                <div class="col-lg-6 col-12 m-auto">
                    <p class="video-block-header">Посмотрите, <span class="video-block-header__span">как проходит разработка в нашей студии</span>
                    </p>
                    <p class="video-block-content">Показываем процесс разработки сайта <a
                                class="video-block-content__link"
                                href="http://cherchen.ru/">cherchen.ru</a>
                        для автора Александры Черчень (длительность - 2 минуты)</p>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>

<div class="second-block-bg bg-white">
    <div class="container position-relative second-block mb-5">
        <div class="row">
            <div class="col-12 col-lg-8">
                <h3 class="second-block-header">Можем разработать для вас <span class="second-block-header__span">онлайн-сервис любой сложности</span>
                </h3>
                <p class="second-block-content">Разрабатываем CRM- и ERP- системы, программы лояльности, отзовики и
                    любые другие онлайн-сервисы + создаем под ключ корпоративные сайты, интернет-магазины и
                    лендинги.</p>
                <div class="row">
                    <div class="col-12 col-sm-6 col-lg-5">
                        <div class="btn w-100 second-block-content__dev">
                            Услуги по разработке
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-5">
                        <div class="btn w-100 second-block-content__promotion">
                            услуги по продвижению
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-sm-6 col-md-6 col-lg-3 col-xl-3 mt-3">
                <a class="text-decoration-none" href="#" data-toggle="modal" data-target="#uslugiModal"
                   data-whatever="корпоративный сайт">
                    <div class="card border-0" id="coop-site">
                        <div class="card-body">
                            <div class="second-block-card-body text-center">
                                <svg width="100" height="100" viewBox="0 0 100 100" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path d="M88.3995 2.53906H11.5997C5.20401 2.53906 0 7.74307 0 14.1388V85.8017C0 92.1982 5.20401 97.4022 11.5997 97.4022H88.3995C94.796 97.4022 100 92.1982 100 85.8017V14.1388C100 7.74307 94.796 2.53906 88.3995 2.53906V2.53906ZM2.97012 85.8017V25.3151H14.8399C15.6601 25.3151 16.3254 24.6498 16.3254 23.8297C16.3254 23.0095 15.6601 22.345 14.8399 22.345H2.97012V14.1388C2.97012 9.38034 6.84128 5.50919 11.5997 5.50919H88.3995C93.158 5.50919 97.0299 9.38034 97.0299 14.1388V22.345H20.7809C19.9608 22.345 19.2955 23.0095 19.2955 23.8297C19.2955 24.6498 19.9608 25.3151 20.7809 25.3151H33.5709V94.4321H11.5997C6.84128 94.4321 2.97012 90.5602 2.97012 85.8017ZM88.3995 94.4321H36.541V25.3151H97.0299V85.8017C97.0299 90.5602 93.1587 94.4321 88.3995 94.4321Z"
                                          fill="#DD4F24"/>
                                    <path d="M12.1582 8.87683C9.37347 8.87683 7.10754 11.1428 7.10754 13.9267C7.10754 16.7115 9.37347 18.9774 12.1582 18.9774C14.9429 18.9774 17.2081 16.7115 17.2081 13.9267C17.2081 11.1428 14.9429 8.87683 12.1582 8.87683ZM12.1582 16.0073C11.0107 16.0073 10.0784 15.0742 10.0784 13.9267C10.0784 12.78 11.0115 11.847 12.1582 11.847C13.3049 11.847 14.238 12.78 14.238 13.9267C14.238 15.0742 13.3049 16.0073 12.1582 16.0073Z"
                                          fill="#DD4F24"/>
                                    <path d="M25.7301 18.9774C28.5149 18.9774 30.78 16.7115 30.78 13.9267C30.78 11.142 28.5141 8.87683 25.7301 8.87683C22.9454 8.87683 20.6795 11.1428 20.6795 13.9267C20.6795 16.7115 22.9454 18.9774 25.7301 18.9774ZM25.7301 11.847C26.8768 11.847 27.8099 12.78 27.8099 13.9267C27.8099 15.0742 26.8768 16.0073 25.7301 16.0073C24.5834 16.0073 23.6504 15.0742 23.6504 13.9267C23.6504 12.78 24.5834 11.847 25.7301 11.847Z"
                                          fill="#DD4F24"/>
                                    <path d="M39.3021 18.9774C42.0868 18.9774 44.352 16.7115 44.352 13.9267C44.352 11.142 42.086 8.87683 39.3021 8.87683C36.5173 8.87683 34.2514 11.1428 34.2514 13.9267C34.2514 16.7115 36.5173 18.9774 39.3021 18.9774ZM39.3021 11.847C40.4488 11.847 41.3818 12.78 41.3818 13.9267C41.3818 15.0742 40.4488 16.0073 39.3021 16.0073C38.1554 16.0073 37.2215 15.0742 37.2215 13.9267C37.2215 12.78 38.1546 11.847 39.3021 11.847Z"
                                          fill="#DD4F24"/>
                                    <path d="M16.1545 36.5685H28.2715C29.0916 36.5685 29.7562 35.904 29.7562 35.0838C29.7562 34.2629 29.0916 33.5984 28.2715 33.5984H16.1545C15.3343 33.5984 14.6698 34.2629 14.6698 35.0838C14.6698 35.904 15.3343 36.5685 16.1545 36.5685Z"
                                          fill="#DD4F24"/>
                                    <path d="M28.2715 45.7482H16.1545C15.3343 45.7482 14.6698 46.4135 14.6698 47.2336C14.6698 48.0538 15.3343 48.7183 16.1545 48.7183H28.2715C29.0916 48.7183 29.7562 48.0538 29.7562 47.2336C29.7562 46.4135 29.0916 45.7482 28.2715 45.7482Z"
                                          fill="#DD4F24"/>
                                    <path d="M28.2715 57.8979H16.1545C15.3343 57.8979 14.6698 58.5632 14.6698 59.3834C14.6698 60.2036 15.3343 60.8688 16.1545 60.8688H28.2715C29.0916 60.8688 29.7562 60.2036 29.7562 59.3834C29.7562 58.5632 29.0916 57.8979 28.2715 57.8979Z"
                                          fill="#DD4F24"/>
                                    <path d="M28.2715 70.0486H16.1545C15.3343 70.0486 14.6698 70.7131 14.6698 71.5333C14.6698 72.3534 15.3343 73.0187 16.1545 73.0187H28.2715C29.0916 73.0187 29.7562 72.3534 29.7562 71.5333C29.7562 70.7131 29.0916 70.0486 28.2715 70.0486Z"
                                          fill="#DD4F24"/>
                                    <path d="M10.0243 34.5146C9.78397 33.9447 9.20184 33.5678 8.58005 33.5991C8.01242 33.6281 7.50049 33.9905 7.28229 34.5146C7.04425 35.0853 7.19531 35.7697 7.65613 36.1839C8.12839 36.6089 8.83029 36.6852 9.38419 36.3747C10.0296 36.013 10.3066 35.1967 10.0243 34.5146Z"
                                          fill="#DD4F24"/>
                                    <path d="M10.0243 46.6652C9.7786 46.0824 9.17817 45.7039 8.54417 45.7528C7.96281 45.797 7.45164 46.1846 7.25556 46.7339C6.79398 48.0217 8.24357 49.2035 9.4162 48.5077C10.0403 48.1369 10.3012 47.3343 10.0243 46.6652Z"
                                          fill="#DD4F24"/>
                                    <path d="M10.0243 58.8158C9.77324 58.2207 9.15374 57.84 8.50677 57.9064C7.88726 57.9697 7.36693 58.4183 7.21282 59.0218C6.88857 60.2944 8.33663 61.3366 9.44671 60.637C10.0456 60.2593 10.302 59.4712 10.0243 58.8158Z"
                                          fill="#DD4F24"/>
                                    <path d="M10.0243 70.9657C9.79233 70.4041 9.2247 70.0349 8.61664 70.0494C8.00781 70.0646 7.46079 70.4613 7.25556 71.0336C6.79016 72.3267 8.25958 73.5101 9.42841 72.799C10.0403 72.4267 10.3043 71.6279 10.0243 70.9657Z"
                                          fill="#DD4F24"/>
                                    <g id="svg-coop">
                                        <path d="M89.5798 33.5984H41.7191C40.8989 33.5984 40.2336 34.2629 40.2336 35.0838C40.2336 35.904 40.8989 36.5685 41.7191 36.5685H89.5798C90.3999 36.5685 91.0645 35.904 91.0645 35.0838C91.0645 34.2629 90.3999 33.5984 89.5798 33.5984Z"
                                              fill="#DD4F24"/>
                                        <path d="M89.5798 40.1405H81.4285C80.6084 40.1405 79.9431 40.805 79.9431 41.6252C79.9431 42.4453 80.6084 43.1106 81.4285 43.1106H89.5798C90.3999 43.1106 91.0645 42.4453 91.0645 41.6252C91.0645 40.805 90.3999 40.1405 89.5798 40.1405Z"
                                              fill="#DD4F24"/>
                                        <path d="M41.7191 43.1106H75.4883C76.3084 43.1106 76.973 42.4453 76.973 41.6252C76.973 40.805 76.3084 40.1405 75.4883 40.1405H41.7191C40.8989 40.1405 40.2336 40.805 40.2336 41.6252C40.2336 42.4453 40.8989 43.1106 41.7191 43.1106Z"
                                              fill="#DD4F24"/>
                                        <path d="M89.5798 46.6827H41.7191C40.8989 46.6827 40.2336 47.3473 40.2336 48.1674C40.2336 48.9876 40.8989 49.6529 41.7191 49.6529H89.5798C90.3999 49.6529 91.0645 48.9876 91.0645 48.1674C91.0645 47.3473 90.3999 46.6827 89.5798 46.6827Z"
                                              fill="#DD4F24"/>
                                        <path d="M89.5798 53.2241H41.7191C40.8989 53.2241 40.2336 53.8894 40.2336 54.7096C40.2336 55.5297 40.8989 56.195 41.7191 56.195H89.5798C90.3999 56.195 91.0645 55.5297 91.0645 54.7096C91.0645 53.8894 90.3999 53.2241 89.5798 53.2241Z"
                                              fill="#DD4F24"/>
                                        <path d="M65.9073 59.7664H41.7191C40.8989 59.7664 40.2336 60.4316 40.2336 61.2518C40.2336 62.072 40.8989 62.7365 41.7191 62.7365H65.9073C66.7274 62.7365 67.3927 62.072 67.3927 61.2518C67.3927 60.4316 66.7274 59.7664 65.9073 59.7664Z"
                                              fill="#DD4F24"/>
                                    </g>
                                </svg>
                            </div>
                            <h3 class="text-center second-block-card-body__header">
                                Корпоративный сайт
                            </h3>
                            <p class="text-center second-block-card-body__content">
                                от 110.000 рублей
                            </p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-12 col-sm-6 col-md-6 col-lg-3 col-xl-3 mt-3">
                <a class="text-decoration-none" href="#" data-toggle="modal" data-target="#uslugiModal"
                   data-whatever="интернет-магазин">
                    <div class="card border-0" id="shop">
                        <div class="card-body">
                            <div class="second-block-card-body text-center">
                                <svg width="100" height="100" viewBox="0 0 100 100" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0)">
                                        <path d="M90.1867 0.19519H9.81379C4.40224 0.19519 6.10352e-05 4.59813 6.10352e-05 10.0112V62.2865C6.10352e-05 67.7469 4.44267 72.1895 9.90305 72.1895H31.2281L29.2558 80.4506H25.1489C20.8818 80.4506 17.4104 83.922 17.4104 88.1892V90.8564C17.4104 91.6766 18.0749 92.3419 18.8951 92.3419H33.4253L32.7768 98.4217C32.7318 98.8406 32.8676 99.2595 33.1491 99.5723C33.4307 99.8858 33.832 100.065 34.2531 100.065L93.6123 100.064C94.0327 100.064 94.434 99.8866 94.7155 99.5738C94.9971 99.2617 95.1329 98.8444 95.0894 98.4263L93.9572 87.5307C93.8725 86.7152 93.1446 86.1216 92.3268 86.207C91.5112 86.2917 90.9184 87.0219 91.0031 87.8374L91.9651 97.0942H70.158L66.7896 65.5382C66.7094 64.7829 66.0724 64.2106 65.3133 64.2106H48.9428L50.2673 51.4687H56.5677V54.7349C56.5677 55.5551 57.2329 56.2203 58.0531 56.2203C58.8733 56.2203 59.5386 55.5551 59.5386 54.7349V51.4687H77.9529V54.7349C77.9529 55.5551 78.6175 56.2203 79.4384 56.2203C80.2585 56.2203 80.9231 55.5551 80.9231 54.7349V51.4687H87.2234L90.4804 82.8119C90.5598 83.5756 91.2045 84.1433 91.956 84.1433C92.0071 84.1433 92.059 84.141 92.1109 84.1357C92.9272 84.051 93.5192 83.3208 93.4346 82.5045L92.3359 71.9316C96.7373 70.9062 99.9997 66.9313 99.9997 62.2865V10.0112C100 4.59813 95.5975 0.19519 90.1867 0.19519ZM34.2813 72.1895H35.5761L34.6949 80.4506H32.3091L34.2813 72.1895ZM20.3805 89.3717V88.1892C20.3805 85.5601 22.5191 83.4208 25.1489 83.4208H34.3775L33.7427 89.3717H20.3805ZM67.1703 97.0942H35.9057L39.0986 67.1808H63.9774L67.1703 97.0942ZM59.5386 48.4978V44.9341C59.5386 39.8575 63.6684 35.7269 68.7457 35.7269C73.8224 35.7269 77.9529 39.8575 77.9529 44.9341V48.4978H59.5386ZM80.9238 48.4978V44.9341C80.9238 38.2195 75.4604 32.7568 68.7457 32.7568C62.0311 32.7568 56.5684 38.2195 56.5684 44.9341V48.4978H48.9291C48.1684 48.4978 47.5306 49.0731 47.452 49.8299L46.4144 59.8092H20.8177C19.9975 59.8092 19.333 60.4738 19.333 61.2939C19.333 62.1141 19.9975 62.7794 20.8177 62.7794H46.1054L45.9567 64.2106H37.7634C37.0043 64.2106 36.3672 64.7829 36.2864 65.5382L35.8934 69.2194H9.90305C6.24703 69.2194 3.24409 66.3728 2.99003 62.7801H15.867C16.6871 62.7801 17.3517 62.1156 17.3517 61.2954C17.3517 60.4753 16.6871 59.81 15.867 59.81H2.9702V10.0112C2.9702 6.23617 6.04028 3.16533 9.81379 3.16533H90.1867C93.9602 3.16533 97.0303 6.23617 97.0303 10.0112V59.8092H91.0771L90.0402 49.8299C89.9616 49.0731 89.3238 48.4978 88.5632 48.4978H80.9238ZM92.0262 68.9447L91.3853 62.7794H97.0105C96.8022 65.6908 94.7689 68.1459 92.0262 68.9447Z"
                                              fill="#DD4F24"/>
                                        <path id="svg-shop-1"
                                              d="M47.0721 18.6204H35.068V14.1648C35.068 11.4899 32.8913 9.31323 30.2164 9.31323C27.5415 9.31323 25.3648 11.4899 25.3648 14.1648V18.6204H13.3607C11.4083 18.6204 9.81989 20.2088 9.81989 22.1604V24.5843C9.81989 26.1506 10.8438 27.4804 12.256 27.9466L14.29 43.4458C14.6844 46.4525 17.2685 48.7192 20.3004 48.7192H40.1324C43.1643 48.7192 45.7476 46.4525 46.1428 43.4458L48.1768 27.9466C49.5891 27.4812 50.6129 26.1506 50.6129 24.5843V22.1604C50.6122 20.2088 49.0237 18.6204 47.0721 18.6204ZM47.0721 21.5905C47.3864 21.5905 47.642 21.8461 47.642 22.1604V24.5843C47.642 24.8986 47.3864 25.155 47.0721 25.155H35.068V21.5905H47.0721ZM28.335 14.1648C28.335 13.1272 29.1788 12.2834 30.2164 12.2834C31.2532 12.2834 32.0971 13.1272 32.0971 14.1648V30.2041C32.0971 31.2417 31.2532 32.0855 30.2164 32.0855C29.1788 32.0855 28.335 31.2417 28.335 30.2041V14.1648ZM12.79 22.1604C12.79 21.8461 13.0464 21.5905 13.3607 21.5905H25.3648V25.155H13.3607C13.0464 25.155 12.79 24.8986 12.79 24.5843V22.1604ZM43.1971 43.0597C42.9965 44.5925 41.6781 45.7491 40.1324 45.7491H20.3004C18.7539 45.7491 17.4363 44.5925 17.2349 43.0597L15.2757 28.1251H25.3648V30.2041C25.3648 32.8798 27.5415 35.0557 30.2164 35.0557C32.892 35.0557 35.068 32.8798 35.068 30.2041V28.1251H45.1579L43.1971 43.0597Z"
                                              fill="#DD4F24"/>
                                        <path d="M46.6372 78.0779V71.6921C46.6372 70.8719 45.9727 70.2074 45.1525 70.2074C44.3323 70.2074 43.6671 70.8719 43.6671 71.6921V78.0779C43.6671 82.4183 47.198 85.9492 51.5383 85.9492C55.878 85.9492 59.4089 82.4183 59.4089 78.0779V71.6921C59.4089 70.8719 58.7443 70.2074 57.9242 70.2074C57.104 70.2074 56.4387 70.8719 56.4387 71.6921V78.0779C56.4387 80.7803 54.2407 82.9791 51.5383 82.9791C48.836 82.9791 46.6372 80.7803 46.6372 78.0779Z"
                                              fill="#DD4F24"/>
                                        <g id="svg-shop-2">
                                            <path d="M64.0392 15.2817H57.7022C56.882 15.2817 56.2175 15.947 56.2175 16.7672C56.2175 17.5874 56.882 18.2519 57.7022 18.2519H64.0392C64.8593 18.2519 65.5239 17.5874 65.5239 16.7672C65.5239 15.947 64.8593 15.2817 64.0392 15.2817Z"
                                                  fill="#DD4F24"/>
                                            <path d="M70.5738 18.2519H91.1679C91.988 18.2519 92.6525 17.5874 92.6525 16.7672C92.6525 15.947 91.988 15.2817 91.1679 15.2817H70.5738C69.7528 15.2817 69.0883 15.947 69.0883 16.7672C69.0883 17.5874 69.7528 18.2519 70.5738 18.2519Z"
                                                  fill="#DD4F24"/>
                                            <path d="M64.0392 22.2129H57.7022C56.882 22.2129 56.2175 22.8774 56.2175 23.6976C56.2175 24.5177 56.882 25.183 57.7022 25.183H64.0392C64.8593 25.183 65.5239 24.5177 65.5239 23.6976C65.5239 22.8774 64.8593 22.2129 64.0392 22.2129Z"
                                                  fill="#DD4F24"/>
                                            <path d="M92.6525 23.6976C92.6525 22.8774 91.988 22.2129 91.1679 22.2129H70.5738C69.7528 22.2129 69.0883 22.8774 69.0883 23.6976C69.0883 24.5177 69.7528 25.183 70.5738 25.183H91.1679C91.988 25.183 92.6525 24.5177 92.6525 23.6976Z"
                                                  fill="#DD4F24"/>
                                        </g>
                                    </g>
                                    <defs>
                                        <clipPath id="clip0">
                                            <rect width="100" height="100" fill="white"
                                                  transform="translate(6.10352e-05 0.00012207)"/>
                                        </clipPath>
                                    </defs>
                                </svg>
                            </div>
                            <h3 class="second-block-card-body__header">
                                Интернет-магазин
                            </h3>
                            <p class="text-center second-block-card-body__content">
                                от 150.000 рублей
                            </p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-12 col-sm-6 col-md-6 col-lg-3 col-xl-3 mt-3">
                <a class="text-decoration-none" href="#" data-toggle="modal" data-target="#uslugiModal"
                   data-whatever="лендинг">
                    <div class="card border-0" id="landing">
                        <div class="card-body">
                            <div class="second-block-card-body text-center">
                                <svg width="100" height="100" viewBox="0 0 100 100" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path d="M16.8946 4.88281C15.8173 4.88281 14.9415 5.75867 14.9415 6.83594C14.9415 7.91321 15.8173 8.78906 16.8946 8.78906C17.9719 8.78906 18.8477 7.91321 18.8477 6.83594C18.8477 5.75867 17.9719 4.88281 16.8946 4.88281Z"
                                          fill="#DD4F24"/>
                                    <path d="M23.7305 4.88281C22.6533 4.88281 21.7774 5.75867 21.7774 6.83594C21.7774 7.91321 22.6533 8.78906 23.7305 8.78906C24.8078 8.78906 25.6837 7.91321 25.6837 6.83594C25.6837 5.75867 24.8078 4.88281 23.7305 4.88281Z"
                                          fill="#DD4F24"/>
                                    <path d="M30.5665 4.88281C29.4892 4.88281 28.6133 5.75867 28.6133 6.83594C28.6133 7.91321 29.4892 8.78906 30.5665 8.78906C31.6437 8.78906 32.5196 7.91321 32.5196 6.83594C32.5196 5.75867 31.6437 4.88281 30.5665 4.88281Z"
                                          fill="#DD4F24"/>
                                    <path d="M84.4727 0H15.5274C12.5657 0 10.1563 2.40936 10.1563 5.37109V85.8414C10.1563 86.6508 10.8124 87.3062 11.6212 87.3062C12.4299 87.3062 13.086 86.6508 13.086 85.8414V46.6797H37.7518C38.3568 48.3849 39.985 49.6094 41.8946 49.6094H58.1055C60.0152 49.6094 61.6433 48.3849 62.2483 46.6797H86.9141V94.6289C86.9141 95.9755 85.8193 97.0703 84.4727 97.0703H15.5274C14.1808 97.0703 13.086 95.9755 13.086 94.6289V92.6773C13.086 91.8686 12.4299 91.2125 11.6212 91.2125C10.8124 91.2125 10.1563 91.8686 10.1563 92.6773V94.6289C10.1563 97.5906 12.5657 100 15.5274 100H84.4727C87.4344 100 89.8438 97.5906 89.8438 94.6289V5.37109C89.8438 2.40936 87.4344 0 84.4727 0ZM58.1055 46.6797H41.8946C41.0866 46.6797 40.4297 46.0228 40.4297 45.2148C40.4297 44.4069 41.0866 43.75 41.8946 43.75H58.1055C58.9135 43.75 59.5704 44.4069 59.5704 45.2148C59.5704 46.0228 58.9135 46.6797 58.1055 46.6797ZM86.9141 43.75H62.2483C61.6433 42.0448 60.0152 40.8203 58.1055 40.8203H41.8946C39.985 40.8203 38.3568 42.0448 37.7518 43.75H13.086V13.6719H81.543C82.3517 13.6719 83.0079 13.0165 83.0079 12.207C83.0079 11.3976 82.3517 10.7422 81.543 10.7422H13.086V5.37109C13.086 4.02451 14.1808 2.92969 15.5274 2.92969H84.4727C85.8193 2.92969 86.9141 4.02451 86.9141 5.37109V43.75Z"
                                          fill="#DD4F24"/>
                                    <g id="svg-landing">
                                        <path d="M38.1837 22.8516C38.1837 22.0421 37.5275 21.3867 36.7188 21.3867H25.7813C24.9726 21.3867 24.3165 22.0421 24.3165 22.8516C24.3165 23.661 24.9726 24.3164 25.7813 24.3164H36.7188C37.5275 24.3164 38.1837 23.661 38.1837 22.8516Z"
                                              fill="#DD4F24"/>
                                        <path d="M42.5782 24.3164H57.4219C58.2307 24.3164 58.8868 23.661 58.8868 22.8516C58.8868 22.0421 58.2307 21.3867 57.4219 21.3867H42.5782C41.7695 21.3867 41.1133 22.0421 41.1133 22.8516C41.1133 23.661 41.7695 24.3164 42.5782 24.3164Z"
                                              fill="#DD4F24"/>
                                        <path d="M74.2188 21.3867H63.2813C62.4726 21.3867 61.8165 22.0421 61.8165 22.8516C61.8165 23.661 62.4726 24.3164 63.2813 24.3164H74.2188C75.0275 24.3164 75.6837 23.661 75.6837 22.8516C75.6837 22.0421 75.0275 21.3867 74.2188 21.3867Z"
                                              fill="#DD4F24"/>
                                        <path d="M48.5352 28.7109C48.5352 27.9015 47.8791 27.2461 47.0704 27.2461H33.2032C32.3945 27.2461 31.7383 27.9015 31.7383 28.7109C31.7383 29.5204 32.3945 30.1758 33.2032 30.1758H47.0704C47.8791 30.1758 48.5352 29.5204 48.5352 28.7109Z"
                                              fill="#DD4F24"/>
                                        <path d="M66.7969 27.2461H52.9297C52.121 27.2461 51.4649 27.9015 51.4649 28.7109C51.4649 29.5204 52.121 30.1758 52.9297 30.1758H66.7969C67.6057 30.1758 68.2618 29.5204 68.2618 28.7109C68.2618 27.9015 67.6057 27.2461 66.7969 27.2461Z"
                                              fill="#DD4F24"/>
                                        <path d="M60.3516 33.1055H40.6251C39.8163 33.1055 39.1602 33.7608 39.1602 34.5703C39.1602 35.3798 39.8163 36.0352 40.6251 36.0352H60.3516C61.1603 36.0352 61.8165 35.3798 61.8165 34.5703C61.8165 33.7608 61.1603 33.1055 60.3516 33.1055Z"
                                              fill="#DD4F24"/>
                                    </g>
                                    <path d="M27.9297 52.4414C23.5146 52.4414 19.9219 56.0341 19.9219 60.4492C19.9219 64.8643 23.5146 68.457 27.9297 68.457C32.3449 68.457 35.9376 64.8643 35.9376 60.4492C35.9376 56.0341 32.3449 52.4414 27.9297 52.4414ZM27.9297 65.5273C25.1298 65.5273 22.8516 63.2492 22.8516 60.4492C22.8516 57.6492 25.1298 55.3711 27.9297 55.3711C30.7297 55.3711 33.0079 57.6492 33.0079 60.4492C33.0079 63.2492 30.7297 65.5273 27.9297 65.5273Z"
                                          fill="#DD4F24"/>
                                    <path d="M22.8516 71.3867C22.0429 71.3867 21.3868 72.0421 21.3868 72.8516C21.3868 73.661 22.0429 74.3164 22.8516 74.3164H33.0079C33.8166 74.3164 34.4727 73.661 34.4727 72.8516C34.4727 72.0421 33.8166 71.3867 33.0079 71.3867H22.8516Z"
                                          fill="#DD4F24"/>
                                    <path d="M50.0001 52.4414C45.5849 52.4414 41.9922 56.0341 41.9922 60.4492C41.9922 64.8643 45.5849 68.457 50.0001 68.457C54.4152 68.457 58.0079 64.8643 58.0079 60.4492C58.0079 56.0341 54.4152 52.4414 50.0001 52.4414ZM50.0001 65.5273C47.2001 65.5273 44.9219 63.2492 44.9219 60.4492C44.9219 57.6492 47.2001 55.3711 50.0001 55.3711C52.8 55.3711 55.0782 57.6492 55.0782 60.4492C55.0782 63.2492 52.8 65.5273 50.0001 65.5273Z"
                                          fill="#DD4F24"/>
                                    <path d="M56.543 72.8516C56.543 72.0421 55.8869 71.3867 55.0782 71.3867H44.9219C44.1132 71.3867 43.4571 72.0421 43.4571 72.8516C43.4571 73.661 44.1132 74.3164 44.9219 74.3164H55.0782C55.8869 74.3164 56.543 73.661 56.543 72.8516Z"
                                          fill="#DD4F24"/>
                                    <path d="M72.0704 52.4414C67.6552 52.4414 64.0626 56.0341 64.0626 60.4492C64.0626 64.8643 67.6552 68.457 72.0704 68.457C76.4855 68.457 80.0782 64.8643 80.0782 60.4492C80.0782 56.0341 76.4855 52.4414 72.0704 52.4414ZM72.0704 65.5273C69.2704 65.5273 66.9922 63.2492 66.9922 60.4492C66.9922 57.6492 69.2704 55.3711 72.0704 55.3711C74.8704 55.3711 77.1485 57.6492 77.1485 60.4492C77.1485 63.2492 74.8704 65.5273 72.0704 65.5273Z"
                                          fill="#DD4F24"/>
                                    <path d="M66.9922 71.3867C66.1835 71.3867 65.5274 72.0421 65.5274 72.8516C65.5274 73.661 66.1835 74.3164 66.9922 74.3164H77.1485C77.9572 74.3164 78.6133 73.661 78.6133 72.8516C78.6133 72.0421 77.9572 71.3867 77.1485 71.3867H66.9922Z"
                                          fill="#DD4F24"/>
                                    <path d="M19.7266 91.6992C19.7266 93.0458 20.8214 94.1406 22.168 94.1406H45.0196C46.3662 94.1406 47.461 93.0458 47.461 91.6992V80.5664C47.461 79.2198 46.3662 78.125 45.0196 78.125H22.168C20.8214 78.125 19.7266 79.2198 19.7266 80.5664V91.6992ZM30.2445 91.2109L32.557 88.8985C33.1284 88.327 34.0577 88.3278 34.6291 88.8985L36.9416 91.2109H30.2445ZM22.6563 81.0547H44.5313V91.2109H41.0844L36.7005 86.8271C34.9869 85.1135 32.1992 85.1135 30.4856 86.8271L26.101 91.2109H22.6563V81.0547Z"
                                          fill="#DD4F24"/>
                                    <path d="M52.5391 80.5664V91.6992C52.5391 93.0458 53.6339 94.1406 54.9805 94.1406H77.8321C79.1787 94.1406 80.2735 93.0458 80.2735 91.6992V80.5664C80.2735 79.2198 79.1787 78.125 77.8321 78.125H54.9805C53.6339 78.125 52.5391 79.2198 52.5391 80.5664ZM63.057 91.2109L65.3695 88.8985C65.9409 88.327 66.8702 88.3278 67.4416 88.8985L69.7541 91.2109H63.057ZM55.4688 81.0547H77.3438V91.2109H73.8969L69.513 86.8271C67.7994 85.1135 65.0117 85.1135 63.2981 86.8271L58.9135 91.2109H55.4688V81.0547Z"
                                          fill="#DD4F24"/>
                                </svg>
                            </div>
                            <h3 class="second-block-card-body__header">
                                Лендинг
                            </h3>
                            <p class="text-center second-block-card-body__content">
                                от 50.000 рублей
                            </p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-12 col-sm-6 col-md-6 col-lg-3 col-xl-3 mt-3">
                <a class="text-decoration-none" href="#" data-toggle="modal" data-target="#uslugiModal"
                   data-whatever="разработку сервисов">
                    <div class="card border-0" id="service">
                        <div class="card-body">
                            <div class="second-block-card-body text-center">
                                <svg width="100" height="100" viewBox="0 0 100 100" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0)">
                                        <path d="M94.6289 8.98438H62.0399L61.4319 6.32248C60.8696 3.86505 58.7166 2.14844 56.1958 2.14844H5.37109C2.40936 2.14844 0 4.5578 0 7.51953V75.8789C0 78.8406 2.40936 81.25 5.37109 81.25H46.1075C46.5378 83.7479 48.2246 85.8559 50.6516 86.8057L53.0098 87.7289C53.4569 89.0717 54.4205 90.1794 55.6641 90.8173V93.2617C55.6641 95.7924 57.7232 97.8516 60.2539 97.8516H75.4883C78.019 97.8516 80.0781 95.7924 80.0781 93.2617V90.8165C81.8153 89.9261 83.0078 88.118 83.0078 86.0352V75.3906H91.6992C93.0458 75.3906 94.1406 74.2958 94.1406 72.9492V18.75H97.0703V75.8789C97.0703 77.2255 95.9755 78.3203 94.6289 78.3203H88.3789C87.5694 78.3203 86.9141 78.9764 86.9141 79.7852C86.9141 80.5939 87.5694 81.25 88.3789 81.25H94.6289C97.5906 81.25 100 78.8406 100 75.8789V14.3555C100 11.3937 97.5906 8.98438 94.6289 8.98438ZM58.5754 6.97556L59.0347 8.98438H46.4149L45.8069 6.32248C45.7062 5.8815 45.5521 5.4657 45.356 5.07812H56.1958C57.3418 5.07812 58.3206 5.85861 58.5754 6.97556ZM40.5708 5.07812C41.7168 5.07812 42.6956 5.85861 42.9512 6.97556L43.4097 8.98438H29.1954L28.5866 6.32248C28.4859 5.8815 28.3318 5.4657 28.1357 5.07812H40.5708ZM5.37109 5.07812H23.3505C24.4965 5.07812 25.4753 5.85861 25.7309 6.97556L26.5991 10.7758C26.7517 11.4418 27.3445 11.9141 28.0273 11.9141H94.6289C95.9755 11.9141 97.0703 13.0096 97.0703 14.3555V15.8203H2.92969V7.51953C2.92969 6.17294 4.02451 5.07812 5.37109 5.07812ZM48.9258 79.985V71.843C48.9258 70.7977 49.7757 69.9432 50.8209 69.9387C51.3329 69.9348 51.812 70.1324 52.1736 70.4926C52.5352 70.8527 52.7336 71.3318 52.7336 71.8414L52.7344 76.7578V84.4749L51.7189 84.0775C50.0221 83.4137 48.9258 81.8069 48.9258 79.985ZM83.2031 49.0234V57.8125H74.8161V49.0234H83.2031ZM71.8864 57.8125H62.5V56.5346C62.5 55.2025 61.9507 53.8994 60.994 52.9602C60.0517 52.0348 58.8203 51.5411 57.5241 51.5633C54.8836 51.6129 52.7344 53.8033 52.7344 56.4453V57.8125H47.2656V49.0234H71.8864V57.8125ZM75.4883 94.9219H60.2539C59.3384 94.9219 58.5938 94.1772 58.5938 93.2617V91.4062H77.1484V93.2617C77.1484 94.1772 76.4038 94.9219 75.4883 94.9219ZM80.0781 86.0352C80.0781 87.3817 78.9833 88.4766 77.6367 88.4766H58.1055C56.7589 88.4766 55.6641 87.3817 55.6641 86.0352V56.4453C55.6641 55.3886 56.5231 54.512 57.5798 54.4922H57.6134C58.1032 54.4922 58.5739 54.6898 58.9417 55.0507C59.3414 55.4428 59.5703 55.9837 59.5703 56.5346V74.6094C59.5703 75.4181 60.2264 76.0742 61.0352 76.0742C61.8446 76.0742 62.5 75.4181 62.5 74.6094V71.0938C62.5 70.0165 63.3766 69.1406 64.4531 69.1406C65.5304 69.1406 66.4062 70.0165 66.4062 71.0938V74.6094C66.4062 75.4181 67.0624 76.0742 67.8711 76.0742C68.6806 76.0742 69.3359 75.4181 69.3359 74.6094V71.0938C69.3359 70.0165 70.2126 69.1406 71.2891 69.1406C72.3663 69.1406 73.2422 70.0165 73.2422 71.0938V74.6094C73.2422 75.4181 73.8983 76.0742 74.707 76.0742C75.5165 76.0742 76.1719 75.4181 76.1719 74.6094V71.0938C76.1719 70.0371 77.0309 69.1605 78.0876 69.1406C78.5881 69.1307 79.0733 69.3298 79.4502 69.6991C79.8492 70.0912 80.0789 70.6322 80.0789 71.183V86.0352H80.0781ZM91.2109 72.4609H83.0078V71.183C83.0078 69.8509 82.4585 68.5478 81.5018 67.6086C80.5595 66.6832 79.335 66.1888 78.0319 66.2117C76.7448 66.2361 75.5737 66.7686 74.7124 67.6147C73.8304 66.7473 72.6212 66.2109 71.2891 66.2109C69.9593 66.2109 68.7523 66.745 67.8711 67.6102C66.9899 66.745 65.7829 66.2109 64.4531 66.2109C63.7589 66.2109 63.0981 66.3567 62.5 66.6183V60.7422H83.6914C85.038 60.7422 86.1328 59.6474 86.1328 58.3008V48.5352C86.1328 47.1886 85.038 46.0938 83.6914 46.0938H46.7773C45.4308 46.0938 44.3359 47.1886 44.3359 48.5352V58.3008C44.3359 59.6474 45.4308 60.7422 46.7773 60.7422H52.7344V67.3973C52.1408 67.1432 51.4961 67.009 50.8308 67.009C50.8232 67.009 50.8148 67.009 50.8072 67.009C48.1544 67.0212 45.9961 69.1902 45.9961 71.843V72.4609H8.78906V24.1211C8.78906 23.3124 8.1337 22.6562 7.32422 22.6562C6.51474 22.6562 5.85938 23.3124 5.85938 24.1211V72.9492C5.85938 74.2958 6.95419 75.3906 8.30078 75.3906H45.9961V78.3203H5.37109C4.02451 78.3203 2.92969 77.2255 2.92969 75.8789V18.75H91.2109V72.4609Z"
                                              fill="#DD4F24"/>
                                        <path d="M46.7773 43.1641H83.6914C85.038 43.1641 86.1328 42.0692 86.1328 40.7227V30.957C86.1328 29.6104 85.038 28.5156 83.6914 28.5156H46.7773C45.4308 28.5156 44.3359 29.6104 44.3359 30.957V40.7227C44.3359 42.0692 45.4308 43.1641 46.7773 43.1641ZM83.2031 40.2344H74.8161V31.4453H83.2031V40.2344ZM47.2656 31.4453H71.8864V40.2344H47.2656V31.4453Z"
                                              fill="#DD4F24"/>
                                        <g id="svg-website">
                                            <path d="M15.2344 31.4453H37.1094C37.9189 31.4453 38.5742 30.7892 38.5742 29.9805C38.5742 29.1718 37.9189 28.5156 37.1094 28.5156H15.2344C14.4249 28.5156 13.7695 29.1718 13.7695 29.9805C13.7695 30.7892 14.4249 31.4453 15.2344 31.4453Z"
                                                  fill="#DD4F24"/>
                                            <path d="M15.2344 37.3047H37.1094C37.9189 37.3047 38.5742 36.6486 38.5742 35.8398C38.5742 35.0311 37.9189 34.375 37.1094 34.375H15.2344C14.4249 34.375 13.7695 35.0311 13.7695 35.8398C13.7695 36.6486 14.4249 37.3047 15.2344 37.3047Z"
                                                  fill="#DD4F24"/>
                                            <path d="M15.2344 43.1641H30.4688C31.2782 43.1641 31.9336 42.5079 31.9336 41.6992C31.9336 40.8905 31.2782 40.2344 30.4688 40.2344H15.2344C14.4249 40.2344 13.7695 40.8905 13.7695 41.6992C13.7695 42.5079 14.4249 43.1641 15.2344 43.1641Z"
                                                  fill="#DD4F24"/>
                                            <path d="M15.2344 49.0234H37.1094C37.9189 49.0234 38.5742 48.3673 38.5742 47.5586C38.5742 46.7499 37.9189 46.0938 37.1094 46.0938H15.2344C14.4249 46.0938 13.7695 46.7499 13.7695 47.5586C13.7695 48.3673 14.4249 49.0234 15.2344 49.0234Z"
                                                  fill="#DD4F24"/>
                                            <path d="M15.2344 54.8828H30.4688C31.2782 54.8828 31.9336 54.2267 31.9336 53.418C31.9336 52.6093 31.2782 51.9531 30.4688 51.9531H15.2344C14.4249 51.9531 13.7695 52.6093 13.7695 53.418C13.7695 54.2267 14.4249 54.8828 15.2344 54.8828Z"
                                                  fill="#DD4F24"/>
                                            <path d="M15.2344 60.5469H24.6094C25.4189 60.5469 26.0742 59.8907 26.0742 59.082C26.0742 58.2733 25.4189 57.6172 24.6094 57.6172H15.2344C14.4249 57.6172 13.7695 58.2733 13.7695 59.082C13.7695 59.8907 14.4249 60.5469 15.2344 60.5469Z"
                                                  fill="#DD4F24"/>
                                        </g>
                                        <path d="M9.57031 11.9141H19.5312C20.3407 11.9141 20.9961 11.2579 20.9961 10.4492C20.9961 9.6405 20.3407 8.98438 19.5312 8.98438H9.57031C8.76083 8.98438 8.10547 9.6405 8.10547 10.4492C8.10547 11.2579 8.76083 11.9141 9.57031 11.9141Z"
                                              fill="#DD4F24"/>
                                    </g>
                                    <defs>
                                        <clipPath id="clip0">
                                            <rect width="100" height="100" fill="white"/>
                                        </clipPath>
                                    </defs>
                                </svg>
                            </div>
                            <h3 class="second-block-card-body__header">
                                Разработка сервисов
                            </h3>
                            <p class="text-center second-block-card-body__content">
                                от 200.000 рублей
                            </p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
