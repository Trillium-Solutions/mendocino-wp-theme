<?php
/**
 * The template for displaying all single posts.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); ?>
<div id="page-overlay">

	<main id="main" class="site-main">

		<?php while ( have_posts() ) : the_post();

		get_template_part( 'template-parts/content', get_post_type() );

		endwhile; 
		?>

	</main><!-- #main -->

</div> <!-- page-overlay -->
<?php get_footer(); ?>