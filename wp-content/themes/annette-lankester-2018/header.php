<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage annette-lankester-2018
 * @since Annette Lankest 2018 0.0.1
 */
 $styles = get_stylesheet_directory_uri() . '/dist/css/styles.min.css';
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://fonts.googleapis.com/css?family=Lora:700|Source+Sans+Pro:400,700" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo htmlspecialchars($styles);?>">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <main id="page" class="site">
		<svg style="display: none">
			<defs>
				<symbol id="expand">
					<path fill="none"
						fill-rule="evenodd"
						stroke="#4B507D"
						stroke-width="1.2"
						d="M18.652 1.312L10 10.276 1.356 1.312"/>
				</symbol>
      </defs>
    </svg>
		  <a class="skip-lnk screen-reader-text" href="#content">Skip to main content</a>

		  <nav class="bg-purp al-wrpper">
				<div class="mw-1200 nav">
				<a class="al-logo" href="<?php echo esc_url( home_url('/') );?>"><h1 class="col-wht">Annette Lankester</h1></a>
					<?php
						wp_nav_menu( array(
							'menu' => 'Navigation',
							'menu_class' => 'nav_cnt nav_cnt_dsk ta-r',
							'container' => false,
							'link_before' => '<span class="nav_txt">',
							'link_after' => '</span>',
							) );
					?>
					<button class="nav_burger">
						<span></span>
						<span></span>
						<span></span>
					</button>
					<div class="nav_mob">
					<?php
					wp_nav_menu( array(
						'menu' => 'Navigation',
						'menu_class' => 'nav_mob_cnt',
						'container' => false,
						'link_before' => '<span class="nav_txt">',
						'link_after' => '</span>',
						) );
				?>
					</div>
				</div>
		  </nav>

		  <div id="content">