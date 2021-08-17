<?php get_header(); ?>

	<div <?php post_class('internal-page'); ?>>

		<?php while ( have_posts() ) : $featuredImage = get_the_post_thumbnail_url(); ?>
		<section class='internal-heading' style="background-image:url(<?php echo $featuredImage; ?>); background-size:cover;">
			<div class="overlay py-5 d-flex align-items-center">
				<div class="container">
					<h1><?php the_title(); ?></h1>
				</div>
			</div>
			<div class="textured-bottom"></div>

		</section>
		<div class='container'>
			<?php 
				the_post();
				the_content();
			
				// If comments are open or there is at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) {
					comments_template();
				}
			endwhile; // End of the loop.

			?>
		</div>
		

		

	</div>



<?php get_footer(); ?>

