<!DOCTYPE html>
<html <?php language_attributes(); ?> ng-app="frankiescookbook">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/style.css" />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<?php include('svg.php'); ?>

	<header class="main-header">
		<div class="header__search-prompt">
			<a href="javascript:;" id="js-header-prompt">
				<div class="icon">
					<svg>
						<use xlink:href="#icon-search"></use>
					</svg>
				</div>
				<span>Search for recipes</span>
			</a>
		</div>
		<div class="header__search-bar" id="js-header-search-bar">
			<form role="search" method="get" action="">
				<div class="header__search-bar-icon">
					<div class="icon">
						<svg>
							<use xlink:href="#icon-search"></use>
						</svg>
					</div>
				</div>
				<input type="text" value="" name="s" id="s" placeholder="Search recipes" />
				<a href="javascript:;" id="js-header-search-close" class="header__search-bar-close">
					<div class="icon">
						<svg>
							<use xlink:href="#icon-cross"></use>
						</svg>
					</div>
				</a>
			</form>
		</div>
		<!-- <div id="logo">
			<a href="/">Frankie's Cookbook</a>
		</div> -->
	</header>
