
<?php

/*
Template Name: timetable
*/
 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html>
<head profile="http://gmpg.org/xfn/11">
<link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/timetable.css" />
<link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/style.css" />
<link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/schedule-layout.css" />
<script src="<?php echo get_bloginfo('template_directory'); ?>/jquery.js"></script>
<script src="<?php echo get_bloginfo('template_directory'); ?>/mendo.js"></script>
<link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/formalize.css" />
<script src="<?php echo get_bloginfo('template_directory'); ?>/jquery.formalize.js"></script>

<link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory'); ?>/favicon.ico" />
<?php if ( is_user_logged_in() ) { 
?>
<!--<link rel="stylesheet" type="text/css" href="<?php echo get_bloginfo('template_directory'); ?>/new-edits.css" />-->
<?php
} ?>

</head>
<body class="timetable">
<?php the_post(); ?>
<div id="timetable-banner">
<a href="/">
	<div id="timetable-logo" class="timetable-left-marg">
	</div> <!-- end #timetable-logo -->
</a>
<div id="timetable-mendo-number">
    <div id="mendo-number">1-800-696-4MTA</div>
</div> <!-- end #timetable-mendo-number -->
</div> <!-- end #time-table-banner -->
<div id="timetable-route-name">
	<div id="timetable-center-title" class="timetable-left-marg">
		<div id="timetable-route-name-part-1">
			<?php the_title(); ?> 
		</div> <!-- end #timetable-route-name-part-1 -->
		<div id="timetable-route-name-part-2">
		<?php do_action('route_select'); ?>
		</div> <!-- end #timetable-route-name-part-2 -->
	</div> <!-- end #timetable-center-title -->
</div><!-- end #timetable-route-name -->

<div id="timetable-links" class="timetable-left-marg">
	<div id="time-table-backlink">

	</div> <!-- #end #timetable-backlink -->
	<div id="time-table-backlink">
	</div> <!-- #end #timetable-backlink -->
	<div id="timetable-pdf-link">
		<!-- Download PDF -->
	</div> <!-- end #timetable-pdf-link -->
	<div id="timetable-pdf-icon">
	</div> <!-- end #timetable-pdf-icon -->
</div> <!-- end #timetable-links -->
<div id="timetable-content" class="timetable-left-marg">
<?php if(function_exists(simple_breadcrumb)) {simple_breadcrumb();} ?>
<strong>Bold</strong> indicates PM time. <br /> 
Times are approximate and may vary due to weather conditions.<br /> <br/>
<?php the_content(); ?>
	<br />

<br />
<p></p>
<?php edit_post_link( $link, $before, $after, $id ); ?> </div><!-- end #timetable-content -->

</body>
</html>