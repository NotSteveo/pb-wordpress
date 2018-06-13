<?php
/*
 * Template Name: Foggy Memories
 * Template Post Type: memory, event
*/
get_header();
?>


		<main id="main" class="site-main">
		<!--<?php
		//while ( have_posts() ) :
		//	the_post();

		//	get_template_part( 'template-parts/content', get_post_type() );

		//	the_post_navigation();

		//			endwhile; // End of the loop.
	//				?>-->
		<?php
			if( have_rows('flexible_content') ):
				while ( have_rows('flexible_content') ) : the_row();
					if ( get_row_layout() == 'image_text_overlay' ): ?>
						<section class="text-overlay">
							<h1><?php the_sub_field('overlay_text'); ?></h1>
							<?php $background_image = get_sub_field('background_image');?>
							<img src="<?php echo $background_image['url']; ?>">
						</section>


				<?php elseif (get_row_layout() == 'image_and_text_block' ): ?>
					<section class="text-centered">
						<?php $featured_image = get_sub_field('featured_image');?>
						<img src="<?php $featured_image['url']; ?>">
					</section>
					<section class="text-block">
						<?php the_sub_field('description_text'); ?>
					</section>


				<?php elseif (get_row_layout() == 'callout_blocks' ): ?>
					<?php if( have_rows('block_collection') ): ?>
						<section class="text-callout">
							<?php while( have_rows('block_collection') ): the_row(); ?>
								<?php $block_image = get_sub_field('block_image'); ?>
									<section class="text=callout_blocks">
										<h1><?php the_sub_field('block_text'); ?></h1>
										<img src="<?php echo $block_image['url']; ?>">
									</section>
									<?php endwhile; ?>
								</section>
							<?php endif; ?>

				<?php endif; ?>
			<?php endwhile; ?>
			<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
