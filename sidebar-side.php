<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package Underscores.me
 * @since Underscores.me 1.0
 */
?>
		<div id="sidebar-side" class="widget-area clearfix" role="complementary">
			
			<?php if ( ! dynamic_sidebar( 'sidebar-2' ) ) : ?>

				

				<aside id="archives" class="widget">
					<h1 class="widget-title"><?php _e( 'Archives', 'underscoresme' ); ?></h1>
					<ul>
						<?php wp_get_archives( array( 'type' => 'monthly' ) ); ?>
					</ul>
				</aside>

				<aside id="meta" class="widget">
					<h1 class="widget-title"><?php _e( 'Meta', 'underscoresme' ); ?></h1>
					<ul>
						<?php wp_register(); ?>
						<li><?php wp_loginout(); ?></li>
						<?php wp_meta(); ?>
					</ul>
				</aside>

			<?php endif; // end sidebar widget area ?>
		</div><!-- #secondary .widget-area -->

		<?php 
//Loading sidebar.php file
get_sidebar(); 
?>

<?php 
//Loading sidebar-main.php file
get_sidebar( 'main' ); ?>