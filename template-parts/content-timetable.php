<?php
/**
 * Template part for displaying Timetables 
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Transit_Base_Template
 */

?>

<article <?php post_class(); ?>>
	<header class="timetable-h">
	<div id="timetable-route-name">
		<div id="timetable-center-title" class="timetable-left-marg">
			<h1 id="timetable-route-name-part-1">
			<?php get_route_circle();?>	<?php the_title(); ?>
			</h1> <!-- end #timetable-route-name-part-1 -->
		</div> <!-- end #timetable-center-title -->
	</div><!-- end #timetable-route-name -->
	</header>

	<div id="timetable-content" class="timetable-left-marg">

		<?php the_content(); ?>

		<?php edit_post_link( $link, $before, $after, $id ); ?>
	</div><!-- end #timetable-content -->
</article>