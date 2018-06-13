<?php
/**
  * Template Name: Foggy Memories
  * Template Post Type: memory, event
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package penblade
 */

get_header();
?>

<div class="blog-post">
		<?php
	if( have_rows('left_sidebar') ):
		while ( have_rows('left_sidebar') ) : the_row();
		if (get_row_layout() == 'left_sidebar_blog' ): ?>
		<?php $main_image = get_sub_field('main_image'); ?>
		<div class="header-container" style="background: linear-gradient(rgba(255, 255, 255, 0.45),rgba(255, 255, 255, 0.45)), url(<?php echo $main_image['url'] ?>) no-repeat center center; background-size: cover;">
			<div class="container-fluid">
				<div class="row justify-content-md-center">
					<div class="col-md-8">
					<?php
					while ( have_posts() ) :
						the_post(); ?><div class="post-header">	<?php echo get_avatar(get_the_author_meta('ID'), 45); ?>
					<p class="the-author">By <?php the_author(); ?></p>
						<?php if ( is_singular() ) :
							the_title( '<h1 class="entry-title">', '</h1>' );
						else :
							the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
						endif;
					endwhile; // End of the loop.
					?>
					</div>
				</div>
				</div>
			</div>
	</div>
<div class="container-fluid">
			<main class="row justify-content-md-center">

			<article class="post-content col-md-8">
			<?php
			the_content( sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'penblade' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				get_the_title()
			) );

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'penblade' ),
				'after'  => '</div>',
			) );
			?>
		</article>
		</main>
</div>

<?php endif; ?>
<?php endwhile; ?>
<?php else : ?>
	<div class="post">
		<div class="container">
			<div class="blog-title row">
				<?php
				while ( have_posts() ) :
					the_post();

					if ( is_singular() ) :
						the_title( '<h1 class="entry-title">', '</h1>' );
					else :
						the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
					endif;


				endwhile; // End of the loop.
				?>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<main class="col-12">
<p>This article was written by <?php the_author(); ?></p>

				<?php
				the_content( sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'penblade' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					get_the_title()
				) );

				wp_link_pages( array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'penblade' ),
					'after'  => '</div>',
				) );
				?>
			</main>
		</div>
	</div>
<?php endif; ?>
</div>


<?php
	if( have_rows('main_modules') ):
		while ( have_rows('main_modules') ) : the_row();
		if (get_row_layout() == 'show_featured_posts' ):
		if( get_sub_field('show_featured') ): ?>
			<?php
	       // the query
	       $the_query = new WP_Query( array(
	         'category_name' => 'featured',
	          'posts_per_page' => 3,
	       ));
	    ?>

	    <?php if ( $the_query->have_posts() ) : ?>
	      <div class="blog-wrapper">
	        <section class="container blog-roll">
	          <div class="more-title">More from PenBlade</div>
	          <div class="row">
	        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
	      <div class="col-sm-12 col-md-4 bottom-image">


	          <?php
	            if( have_rows('left_sidebar') ):
	              while ( have_rows('left_sidebar') ) : the_row();
	              if (get_row_layout() == 'left_sidebar_blog' ): ?>
	              <a href="<?php the_permalink(); ?>">
	                <?php $main_image = get_sub_field('main_image'); ?>
	              <div class="image" style="background: url(<?php echo $main_image['url'] ?>) no-repeat center center; background-size: cover;"></div></a>
	              <?php endif; ?>
	              <?php endwhile; ?>
	              <?php endif; ?>

	    <div class="more-sub">
	      <div class="more-sub-title"><?php the_title(); ?></div>
	        <div class="more-sub-content"><?php the_excerpt(); ?></div>
	          <div class="more-link"><a href="<?php the_permalink(); ?>" class="link"><span class="button-chev-red">Read More</span></a>
	          </div>
	        </div>
	      </div>
	        <?php endwhile; ?>
	        <?php wp_reset_postdata(); ?>
	      </section>
	      </div>
	    </div>
	    <?php else : ?>

	    <?php endif; ?>
    <!-- end blog -->

<?php endif; ?>
<?php endif; ?>
<?php endwhile; ?>
<?php endif; ?>

<?php
get_footer();
