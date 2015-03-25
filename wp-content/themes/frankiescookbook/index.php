<!DOCTYPE html>
<html <?php language_attributes(); ?> ng-app="frankiescookbook">

	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
		<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>

		<div id="page" class="hfeed site">

			<a class="skip-link screen-reader-text" href="#content">Skip to content</a>

			<header class="global-header wrapper" role="banner">
				<a href="/" class="global-logo" rel="home">Cookbook</a>
			</header>

			<main id="primary" class="content-area" role="main" id="content">

				<p ng-if="loading">Loading...</p> <!-- Not working properly... -->

				<!-- <div ng-include="'/wp-content/themes/frankiescookbook/ng-views/search.html'"></div> -->
				<!-- <div ng-include="'/wp-content/themes/frankiescookbook/ng-views/filters.html'"></div> -->

				<div class="content-wrapper">
					<ng-view></ng-view>
				</div>

			
			</main>

		</div>

		<?php wp_footer(); ?>

		<script src="<?php bloginfo('template_directory'); ?>/assets/js/main.js"></script>

	</body>
	
</html>
