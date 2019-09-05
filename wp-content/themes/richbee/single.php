<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WP_Bootstrap_Starter
 */

get_header(); ?>

    <div class="container">
        <div class="row">
            <div class="col text-center">
                <hr>
                <?php the_tags('<p class="meta">', '<span class="sep"> | </span>', '</p>'); ?>
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
    <section id="primary" class="content-area col-sm-12 col-lg-8 offset-2">

        <main id="main" class="site-main" role="main">
            <div class="single-post">

                <?php
                while (have_posts()) : the_post();

                    the_content();

                    the_post_navigation();

                    // If comments are open or we have at least one comment, load up the comment template.
                    if (comments_open() || get_comments_number()) :
                        comments_template();
                    endif;

                endwhile; // End of the loop.
                ?>

            </div>

        </main><!-- #main -->
    </section><!-- #primary -->

<?php
get_footer();
