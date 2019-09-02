<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package WP_Bootstrap_Starter
 */

get_header(); ?>

<div class="container">
    <div class="row text-center">
        <div class="col">
            <h1 class="new p-0">Упс, что-то пошло не так :(</h1>
            <h2 class="sub p-0">Если вы хотите начать всё сначала, перейдите на <a href="/">Richbee</a></h2>
        </div>
    </div>
    <div class="row">
        <div class="col text-center pb-5 pt-5 mb-5">
            <img src="/wp-content/themes/richbee/svg/undraw_page_not_found_su7k.svg" alt="">
        </div>
    </div>
</div>

<?php
get_footer();
