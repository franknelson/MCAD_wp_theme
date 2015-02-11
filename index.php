<!DOCTYPE html>
<html>
<head>
	<link href='http://fonts.googleapis.com/css?family=Playfair+Display:400,900' rel='stylesheet' type='text/css'/>
	<title><?php bloginfo('name'); ?></title>

	<link rel='stylesheet' href='http://frank-nelson.com/base/reset.css' type='text/css'/>
	<!--<link rel='stylesheet' href='style.css' type='text/css'/>
	<link rel='stylesheet' href='http://frank-nelson.com/wp-content/themes/pressed_static/style.css'/>-->
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" >
</head>
	<body>
		<header>
			<h1>Pressed &amp Squeezed</h1>
			<nav>
				<ul>
					<li>Home</li>
					<li>WordPress</li>
				</ul>
			</nav>
		</header>
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
		<footer>
			<h1>Contact Us</h1>
			<p>Pressed and Squeezed</p>
			<p>2525 Orange Way, Orchard, CA 91104</p>
			<p>Phone: (800) 424-3232</p>
		</footer>
	</body>
</html>
