<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP_Bootstrap_Starter
 */

?>

<div class="col-sm-6">
    <div class="news">
        <a href="<?php the_permalink() ?>" rel="bookmark">
            <span><?php echo get_the_post_thumbnail( $id, 'small', $attr ); ?></span>
            <div class="newsinside">
                <span><h3><?php the_title(); ?></h3></span>
                <span class="text"><?php do_excerpt(get_the_excerpt(), 30); ?></span>
            </div>
        </a>
    </div>
</div>
