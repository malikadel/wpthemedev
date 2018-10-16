<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage adeel'stheme
 * @since 1.0
 * @version 1.0
 */
?>

<!DOCTYPE html>
<html>
	<head>
		<title>
		<?php bloginfo('name'); ?> | <?php bloginfo('description'); ?>
		</title>
		<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>">
	</head>
	<body>
		<div class="mainthing">
			<img class="logo-img" src="<?php echo get_template_directory_uri(); ?>/images/logo.jpg" />
			<div class="main-menu"><?php wp_nav_menu(array('theme_location'=>'primary')); ?></div>
		</div>
