<?php
/**
 * @package WordPress
 * @subpackage cryptotrading
 */
get_header(); ?>
<section>
	<div class="container">
		<div class="row">
			<?php if (have_posts())
				while (have_posts()):
					the_post(); ?>
					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<h1>
							<?php the_title(); ?>
						</h1>

						<?php the_content(); ?>
					</article>
				<?php endwhile; ?>
		</div>
	</div>
</section>
<?php get_footer(); ?>