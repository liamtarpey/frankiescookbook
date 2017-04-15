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

		<!-- Icon Search -->
		<symbol id="icon-search" viewBox="0 0 24 24">
			<path d="M10 1q1.828 0 3.496 0.715t2.871 1.918 1.918 2.871 0.715 3.496q0 1.57-0.512 3.008t-1.457 2.609l5.68 5.672q0.289 0.289 0.289 0.711 0 0.43-0.285 0.715t-0.715 0.285q-0.422 0-0.711-0.289l-5.672-5.68q-1.172 0.945-2.609 1.457t-3.008 0.512q-1.828 0-3.496-0.715t-2.871-1.918-1.918-2.871-0.715-3.496 0.715-3.496 1.918-2.871 2.871-1.918 3.496-0.715zM10 3q-1.422 0-2.719 0.555t-2.234 1.492-1.492 2.234-0.555 2.719 0.555 2.719 1.492 2.234 2.234 1.492 2.719 0.555 2.719-0.555 2.234-1.492 1.492-2.234 0.555-2.719-0.555-2.719-1.492-2.234-2.234-1.492-2.719-0.555z"></path>
		</symbol>

		<!-- Icon Cross -->
		<symbol id="icon-cross" viewBox="0 0 32 32">
			<path d="M31.708 25.708c-0-0-0-0-0-0l-9.708-9.708 9.708-9.708c0-0 0-0 0-0 0.105-0.105 0.18-0.227 0.229-0.357 0.133-0.356 0.057-0.771-0.229-1.057l-4.586-4.586c-0.286-0.286-0.702-0.361-1.057-0.229-0.13 0.048-0.252 0.124-0.357 0.228 0 0-0 0-0 0l-9.708 9.708-9.708-9.708c-0-0-0-0-0-0-0.105-0.104-0.227-0.18-0.357-0.228-0.356-0.133-0.771-0.057-1.057 0.229l-4.586 4.586c-0.286 0.286-0.361 0.702-0.229 1.057 0.049 0.13 0.124 0.252 0.229 0.357 0 0 0 0 0 0l9.708 9.708-9.708 9.708c-0 0-0 0-0 0-0.104 0.105-0.18 0.227-0.229 0.357-0.133 0.355-0.057 0.771 0.229 1.057l4.586 4.586c0.286 0.286 0.702 0.361 1.057 0.229 0.13-0.049 0.252-0.124 0.357-0.229 0-0 0-0 0-0l9.708-9.708 9.708 9.708c0 0 0 0 0 0 0.105 0.105 0.227 0.18 0.357 0.229 0.356 0.133 0.771 0.057 1.057-0.229l4.586-4.586c0.286-0.286 0.362-0.702 0.229-1.057-0.049-0.13-0.124-0.252-0.229-0.357z"></path>
		</symbol>
	</svg>

	<header class="app-header">
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
