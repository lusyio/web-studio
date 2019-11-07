<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP_Bootstrap_Starter
 */

get_header(); ?>

    <section id="primary" class="content-area col-sm-12 second-block mb-5">
        <main id="main" class="site-main" role="main">

            <?php
            if (have_posts()) : ?>
            <div class="row">
                <div class="col text-center">
                    <h1 class="new mb-4 position-relative"><?= single_cat_title(); ?>
                        <div class="singletopp">RICHBEE</div>
                    </h1>
                </div>
            </div>
            <div class="row mb-sm-0 mb-md-4 mt-5">
                <?php
                /* Start the Loop */
                $i = 1;
                while (have_posts()) : the_post();

                    /*
                     * Include the Post-Format-specific template for the content.
                     * If you want to override this in a child theme, then include a file
                     * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                     */
                    get_template_part('template-parts/content', get_post_format());
                if ($i % 2 == 0) {
                    echo '</div><div class="row mb-4">';
                }
                $i++;
                endwhile;

                the_posts_navigation();

                else :

                    get_template_part('template-parts/content', 'none');

                endif; ?>
            </div>
        </main><!-- #main -->
    </section><!-- #primary -->

<?php
get_footer();
