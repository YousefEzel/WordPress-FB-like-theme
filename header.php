<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<title><?php bloginfo( 'name' ) ?></title>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
		<!-- <header class="header nav" > -->
		<!-- Navigation -->
		<nav class="navbar navbar-expand-lg navbar-dark bg-fb-blue static-top">
			<div class="container">
				<a class="navbar-brand" href="#">
					<?php bloginfo('name'); ?>
				</a>
				<div class="navbar-brand" id="">
					<div class="">
						<?php get_search_form(); ?>
					</div>
				</div>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
				</button>
				
				<div class="" id="navbarResponsive">
					<?php if(is_user_logged_in()): ?>
					<div class="inlined logo navbar-expand-lg navbar-nav nav-link">
						<picture class="logo-img">
							<source srcset="<?php $user = wp_get_current_user();  print get_avatar_url( $user->ID, array('size' => 50)); ?>"/>
							<img src="<?php print get_avatar_url($user->ID, array('size' => 50, )); ?>"/>
						</picture>	
						<p class="user_display_name <?php echo is_author() ? 'author-active':''; ?>">
							<a href="<?php echo get_author_posts_url($user->ID);?>"><?php echo $user->display_name; ?></a>
						</p>
						
					</div>
					<?php endif; ?>
					<?php
						wp_nav_menu( array(
							'theme_location'  => is_user_logged_in() ? 'main-menu-logged-in' : 'main-menu-logged-out',
							'menu'            => '',
							'container'       => 'li',
							'container_class' => 'menu-%1$s-container nav-item',
							'container_id'    => 'menu-1-container',
							'menu_class'      => 'menu main-menu nav-link',
							'menu_id'         => 'main-menu-1',
							'echo'            => true,
							'fallback_cb'     => 'wp_page_menu',
							'before'          => '',
							'after'           => '',
							'link_before'     => '',
							'link_after'      => '',
						'items_wrap'      => '<ul id = "%1$s" class = "navbar-nav nav-link mr-auto %2$s">%3$s</ul>',
						'depth'           => 0,
						'walker'          => '',
					) );
				?>
			</div>
		</div>
	</nav>
	<!-- </header> -->