<?php
/**
 * @package WordPress
 * @subpackage cryptotrading
 */
?>
<footer>
	<div class="container">
		<div class="footer-item">
			© All rights reserved to Crypto Trading School
		</div>
		<div class="footer-item">
			<?php $args = array(
				'theme_location' => 'bottom',
				'container' => false,
				'menu_class' => 'nav nav-pills bottom-menu',
				'menu_id' => 'bottom-nav',
				'fallback_cb' => false
			);
			wp_nav_menu($args);
			?>
		</div>
	</div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
