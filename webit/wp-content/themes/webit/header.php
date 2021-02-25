<!DOCTYPE html>
<html lang="ru">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width initial-scale=1">

	<title><?php bloginfo('name'); echo " | "; bloginfo('description');?></title>

	
	<?php
		wp_head();
	?>
</head>
<body>
<main class="wrapper">
	<header class="header">
		<div class="container">
			<div class="header__body">
				<a href="<?php echo get_home_url(); ?>" class="header__logo">
				<img src="<?php
					$custom_logo__url = wp_get_attachment_image_src( get_theme_mod( 'custom_logo' ), 'full' ); 
					// выводим
					echo $custom_logo__url[0]; 
					?>" alt="webit">
				</a>
				<div class="header__burger">
					<span></span>
				</div>
				<nav class="header__menu">

				<?php
					wp_nav_menu( [
						'menu'            => 'Main', 
						'container'       => false, 
						'menu_class'      => 'header__list', 
						'echo'            => true,
						'fallback_cb'     => 'wp_page_menu',
						'items_wrap'      => '<ul class="header__list">%3$s</ul>',
						'depth'           => 1,
					] );
				?>
				</nav>
			</div>
		</div>
	</header>
	