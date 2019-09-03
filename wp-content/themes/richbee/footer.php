<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Bootstrap_Starter
 */

?>
<?php if(!is_page_template( 'blank-page.php' ) && !is_page_template( 'blank-page-with-container.php' )): ?>
			</div><!-- .row -->
		</div><!-- .container -->
	</div><!-- #content -->
    <?php get_template_part( 'footer-widget' ); ?>
	<footer id="colophon" class="site-footer <?php echo wp_bootstrap_starter_bg_class(); ?>" role="contentinfo">
		<div class="container footer-container">
            <div class="row">
                <div class="col-12 col-lg-8 first-card">
                    <div class="site-info">
                        <?php echo '<a class="footer-name mr-3" href="'.home_url().'">'.get_bloginfo('name').'</a>'; ?>
                        <span class="credits">Агенство интернет-маркетинга</span>
                    </div><!-- close .site-info -->
                    <?php wp_nav_menu(array( 'theme_location' => 'second', 'after' => '<span class="sep"> | </span>', 'container_class' => 'mt-4 footer-menu' )); ?>
                </div>
                <div class="col-12 col-lg-4 second-card">
                    <div>
                        <a href="#"><img src="/wp-content/themes/richbee/svg/telegram.svg" alt=""></a>
                        <a class="ml-2" href="#"><img src="/wp-content/themes/richbee/svg/whatsapp.svg" alt=""></a>
                    </div>
                    <div class="mt-3">
                        <a class="footer-phone" href="#">8 (495) 265-45-65</a>
                    </div>
                    <div class="mt-3">
                        <a class="footer-email" href="#">hello@richbee.ru</a>
                    </div>
                </div>
            </div>
            <div class="row mt-5 more-info">
                <div class="col-12 col-lg-8 first-card">
                    <span class="mr-4">ИП Ласковский Дмитрий Сергеевич</span>
                    <span class="mr-4">ОГРНИП - 319507400031582</span>
                    <span>ИНН - 507703923591</span>
                </div>
                <div class="col-12 col-lg-4 second-card">
                    <a href="#">Политика конфиденциальности</a>
                </div>
            </div>
            <div>

            </div>
		</div>
	</footer><!-- #colophon -->
<?php endif; ?>
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>