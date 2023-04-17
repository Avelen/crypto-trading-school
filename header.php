<?php
/**
 * @package WordPress
 * @subpackage cryptotrading
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<header>
		<div class="container">
			<div class="header">
				<div class="header__logo">
					<?php
					$logo = wp_get_attachment_image_src(get_theme_mod('custom_logo'), 'full');
					echo has_custom_logo() ? '<img src="' . esc_url($logo[0]) . '" alt="' . get_bloginfo('name') . '">' : '';
					?>
				</div>
				<div class="header__arrow">
					<img src="<?php echo get_template_directory_uri() ?>/assets/img/header-arrow.svg" alt="">
				</div>
				<div class="header__menu">
					<div class="header__menu-nav">
						<nav class="navbar navbar-default">
							<div class="navbar-header">
								<div class="mobile-menu-btn">
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</div>
							</div>
							<div class="navbar-links">
								<?php $args = array(
									'theme_location' => 'top',
									'container' => false,
									'menu_id' => 'top-nav-ul',
									'items_wrap' => '<ul id="%1$s" class="nav navbar-nav %2$s">%3$s</ul>',
									'menu_class' => 'top-menu',
								);
								wp_nav_menu($args);
								?>
							</div>
						</nav>
					</div>
					<div class="header__menu-lang">
						<nav class="navbar navbar-lang">
							<?php $args = array(
								'theme_location' => 'lang',
								'container' => false,
								'menu_id' => 'lang-nav-ul',
								'items_wrap' => '<ul id="%1$s" class="nav navbar-nav %2$s">%3$s</ul>',
								'menu_class' => 'lang-menu',
							);
							wp_nav_menu($args);
							?>
						</nav>
					</div>
				</div>
			</div>


		</div>
	</header>