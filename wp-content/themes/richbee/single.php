<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WP_Bootstrap_Starter
 */

get_header(); ?>

<?php
$category = get_the_category();
$category_parent_id = $category[0]->category_parent;
if ($category_parent_id != 0) {
    $category_parent = get_term($category_parent_id, 'category');
    $css_slug = $category_parent->slug;
} else {
    $css_slug = $category[0]->slug;
}
if ($css_slug == 'services'): ?>

    <?php get_template_part('template-parts/service', 'post'); ?>

<?php else: ?>

    <div class="container">
        <div class="row">
            <div class="col text-center">
                <h1 class="new mb-4 position-relative"><?php the_title(); ?>
                    <div class="singletopp"><?php $cat = get_the_category();
                        echo $cat[0]->cat_name; ?></div>
                </h1>
                <div class="mb-5">
                    <?php echo get_the_post_thumbnail($id, $size, $attr); ?>
                </div>
            </div>
        </div>
    </div>
    <section id="primary"
             class="content-area col-sm-12 col-lg-8 offset-0 offset-sm-0 offset-md-0 offset-lg-2 offset-xl-2 pb-5">

        <main id="main" class="site-main" role="main">
            <div class="single-post">

                <?php
                while (have_posts()) : the_post();

                    the_content();

                    echo do_shortcode('[lusy_banner]');

                    the_post_navigation();

                    // If comments are open or we have at least one comment, load up the comment template.
                    if (comments_open() || get_comments_number()) :
                        if (in_category(28)) {
                            echo do_shortcode('[caseShort anchor="Хочу такой же же" url="URL ссылки"]');
                        } else {
                            comments_template();
                        }
                    endif;

                endwhile; // End of the loop.
                ?>

            </div>

        </main><!-- #main -->
    </section><!-- #primary -->

<?php endif; ?>
    <script src="/wp-content/themes/richbee/inc/assets/js/swiper.min.js"></script>
    <script>
        jQuery(document).ready(function () {
            var swiper1 = new Swiper('.vertical', {
                direction: 'vertical',
                autoHeight: true,
                loop: true,
                height: 56,
                autoplay: {
                    delay: 5000,
                },
            });
        });

    </script>

<?php
get_footer();
