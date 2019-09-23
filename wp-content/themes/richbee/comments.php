<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP_Bootstrap_Starter
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if (post_password_required()) {
    return;
}
?>

<div id="comments" class="comments-area">

    <?php
    // You can start editing here -- including this comment!
    if (have_comments()) : ?>

        <?php if (get_comment_pages_count() > 1 && get_option('page_comments')) : // Are there comments to navigate through? ?>
            <nav id="comment-nav-above" class="navigation comment-navigation" role="navigation">
                <h2 class="screen-reader-text"><?php esc_html_e('Comment navigation', 'wp-bootstrap-starter'); ?></h2>
                <div class="nav-links">

                    <div class="nav-previous"><?php previous_comments_link(esc_html__('Older Comments', 'wp-bootstrap-starter')); ?></div>
                    <div class="nav-next"><?php next_comments_link(esc_html__('Newer Comments', 'wp-bootstrap-starter')); ?></div>

                </div><!-- .nav-links -->
            </nav><!-- #comment-nav-above -->
        <?php endif; // Check for comment navigation. ?>

        <ul class="comment-list">
            <?php
            wp_list_comments(array('callback' => 'wp_bootstrap_starter_comment', 'avatar_size' => 50));
            ?>
        </ul><!-- .comment-list -->

        <?php if (get_comment_pages_count() > 1 && get_option('page_comments')) : // Are there comments to navigate through? ?>
            <nav id="comment-nav-below" class="navigation comment-navigation" role="navigation">
                <h2 class="screen-reader-text"><?php esc_html_e('Comment navigation', 'wp-bootstrap-starter'); ?></h2>
                <div class="nav-links">

                    <div class="nav-previous"><?php previous_comments_link(esc_html__('Older Comments', 'wp-bootstrap-starter')); ?></div>
                    <div class="nav-next"><?php next_comments_link(esc_html__('Newer Comments', 'wp-bootstrap-starter')); ?></div>

                </div><!-- .nav-links -->
            </nav><!-- #comment-nav-below -->
        <?php
        endif; // Check for comment navigation.

    endif; // Check for have_comments().


    // If comments are closed and there are comments, let's leave a little note, shall we?
    if (!comments_open() && get_comments_number() && post_type_supports(get_post_type(), 'comments')) : ?>

        <p class="no-comments"><?php esc_html_e('Comments are closed.', 'wp-bootstrap-starter'); ?></p>
    <?php
    endif; ?>

    <?php
    $commenter = wp_get_current_commenter();
    $req = get_option('require_name_email');
    $aria_req = ($req ? " aria-required='true'" : '');
    $fields = array(
        'cookies' => '',
        'author' => '<div class="row">' . '<div class="col-md-6 col-12">' . '<p class="comment-form-author">' . '<label for="author">' . __('Name') . '</label> ' . ($req ? '<span class="required">*</span>' : '') .
            '<input id="author" class="form-control" name="author" placeholder="Введите имя" type="text" value="' . esc_attr($commenter['comment_author']) . '" size="30"' . $aria_req . ' /></p>' . '</div>',
        'email' => '<div class="col-md-6 col-12">' . '<p class="comment-form-email"><label for="email">' . __('Email') . '</label> ' . ($req ? '<span class="required">*</span>' : '') .
            '<input id="email" class="form-control" name="email" placeholder="Введите email" type="text" value="' . esc_attr($commenter['comment_author_email']) . '" size="30"' . $aria_req . ' /></p>' . '</div>' . '</div>',
    );

    $comments_args = array(
        'fields' => $fields,
        'comment_notes_before' => '',
        'comment_notes_after' => '',
        'comment_field' => '<p><textarea placeholder="Введите сообщение..." id="comment" class="form-control" name="comment" cols="45" rows="4" aria-required="true"></textarea></p>',
        'id_form' => 'commentform',  // that's the wordpress default value! delete it or edit it ;)
        'id_submit' => 'commentsubmit',
        'title_reply' => __('Оставить комментарий', 'wp-bootstrap-starter'),  // that's the wordpress default value! delete it or edit it ;)
        /* translators: 1: Reply Specific User */
        'title_reply_to' => __('Leave a Reply to %s', 'wp-bootstrap-starter'),  // that's the wordpress default value! delete it or edit it ;)
        'cancel_reply_link' => __('Отменить', 'wp-bootstrap-starter'),  // that's the wordpress default value! delete it or edit it ;)
        'label_submit' => __('Оставить комментарий', 'wp-bootstrap-starter'),  // that's the wordpress default value! delete it or edit it ;)
    );

    comment_form($comments_args);

    ?>

</div><!-- #comments -->
