<?php
/**
 * @package WordPress
 * @subpackage cryptotrading
 */ 
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
	<div class="row">
		<?php if ( has_post_thumbnail() ) { ?>
			<article>
				<a href="<?php the_permalink(); ?>" class="thumbnail">
					<?php the_post_thumbnail(); ?>
				</a>
			</article>
		<?php } ?>
		<div class="<?php if ( has_post_thumbnail() ) { ?>col-sm-9<?php } else { ?>col-sm-12<?php }  ?>">
			<?php the_content(''); ?>
		</div>
	</div>
</article>