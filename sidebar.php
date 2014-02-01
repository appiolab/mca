<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package mca
 */
?>
	<div id="secondary" class="widget-area" role="complementary">
            <a href="<?php bloginfo('url');?>" title="<?php bloginfo('name');?>">
            <img src="<?php echo get_bloginfo('template_directory').'/assets/images/logo.jpg';?>"/>
            </a>
            <nav id="site-navigation" class="main-navigation" role="navigation">
			<h1 class="menu-toggle"><?php _e( 'Menu', 'mca' ); ?></h1>
			<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'mca' ); ?></a>

			<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
            </nav><!-- #site-navigation -->
            <nav id="site-service" class="main-navigation" role="navigation">
                    <p class="service-title">SERVICES</p>
                    <h1 class="menu-toggle"><?php _e( 'Menu', 'mca' ); ?></h1>
                    <a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'mca' ); ?></a>

                    <?php wp_nav_menu( array( 'theme_location' => 'service' ) ); ?>
            </nav><!-- #site-navigation -->
		<?php do_action( 'before_sidebar' ); ?>
		<?php if ( ! dynamic_sidebar( 'sidebar-1' ) ) : ?>

			<aside id="search" class="widget widget_search">
				<?php get_search_form(); ?>
			</aside>

			<aside id="archives" class="widget">
				<h1 class="widget-title"><?php _e( 'Archives', 'mca' ); ?></h1>
				<ul>
					<?php wp_get_archives( array( 'type' => 'monthly' ) ); ?>
				</ul>
			</aside>

			<aside id="meta" class="widget">
				<h1 class="widget-title"><?php _e( 'Meta', 'mca' ); ?></h1>
				<ul>
					<?php wp_register(); ?>
					<li><?php wp_loginout(); ?></li>
					<?php wp_meta(); ?>
				</ul>
			</aside>

		<?php endif; // end sidebar widget area ?>
	</div><!-- #secondary -->
