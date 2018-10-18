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
	<link rel="stylesheet" href="<?php echo htmlspecialchars($styles);?>">
	<link href="https://fonts.googleapis.com/css?family=Lora:700|Source+Sans+Pro:400,700" rel="stylesheet">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <main id="page" class="site">
	  <div class="site-inner">
		  <a class="skip-link screen-reader-text" href="#content">Skip to main content</a>

		  <header class="nav">
			
			</header>

		  <div id="content" class="site-content">