<?php
/**
 * The template for displaying all pages.
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

			<?php the_post(); ?>
			<header>
				<h1 class="entry-title main"><?php the_title(); ?></h1>
			</header>
			
		<?php ////if(function_exists(simple_breadcrumb)) {simple_breadcrumb();} ?>
			<br/>
			<hr />
			<br/>
			<main>
				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<?php the_content(); ?>
				</div>
			</main>	
              
</div> <!-- page-overlay -->
<?php get_footer(); ?>