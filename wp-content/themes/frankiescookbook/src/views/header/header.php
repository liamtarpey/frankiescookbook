<!DOCTYPE html>
<html <?php language_attributes(); ?> ng-app="frankiescookbook">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/style.css" />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<svg style="display:none;">

		<!-- Icon Clock -->
		<symbol id="icon-clock" viewBox="0 0 32 32">
			<path d="M20.586 23.414l-6.586-6.586v-8.828h4v7.172l5.414 5.414zM16 0c-8.837 0-16 7.163-16 16s7.163 16 16 16 16-7.163 16-16-7.163-16-16-16zM16 28c-6.627 0-12-5.373-12-12s5.373-12 12-12c6.627 0 12 5.373 12 12s-5.373 12-12 12z"></path>
		</symbol>

		<!-- Icon Person -->
		<symbol id="icon-user" viewBox="0 0 32 32">
			<path d="M18 22.082v-1.649c2.203-1.241 4-4.337 4-7.432 0-4.971 0-9-6-9s-6 4.029-6 9c0 3.096 1.797 6.191 4 7.432v1.649c-6.784 0.555-12 3.888-12 7.918h28c0-4.030-5.216-7.364-12-7.918z"></path>
		</symbol>
	</svg>

	<header class="app-header">
		<div id="logo">
			<a href="/">Recipes</a>
		</div>
		<!-- <div class="app-nav">
			<nav>
				<ul>
					<li>
						<a href="/">Home</a>
					</li>
				</ul>
			</nav>
		</div> -->
	</header>
