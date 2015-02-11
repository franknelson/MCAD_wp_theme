<?php get_header(); ?>
		<section>
			<img src="<?php bloginfo('stylesheet_directory'); ?>/img/hero.jpg" />
			<?php if ( have_posts() ) :
					while ( have_posts() ) :
						the_post(); ?>
			<section>
				<h1><?php the_title_attribute(); ?></h1>
				<?php the_content($more_link_text); ?>
				<!-- <?php the_excerpt(); ?> -->
				This address for this post is: <?php the_permalink(); ?>

			</section>
		<?php endwhile; else :?>
				<p><?php _e('Sorry, no content'); ?></p>
			<?php endif; ?>
		</section>

<?php get_footer(); ?>
