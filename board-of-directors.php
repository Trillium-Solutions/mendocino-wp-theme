<?php
/**
* Template Name: board of directors
 */

get_header(); ?>
<div id="page-overlay">
	<?php the_post(); ?>



	<h1 class="entry-title main"><?php the_title(); ?></h1>
<br/>
<hr />
<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<?php
$today = date('Ymd');
$upcoming = new WP_Query(array(
     'category_name' => 'board-of-directors',
     'meta_key' => 'board-info-date',
     'orderby' => 'meta_value_num',
     'order' => 'ASC',
     'posts_per_page' => -1,
     'meta_query' => array(
          array(
               'key' => 'board-info-date',
               'value'	=> $today,
               'compare' => '>=',
               'type'	=> 'NUMERIC'
          )
     )
));
?>
<h2>Upcoming Meetings and Agendas</h2>
<?php if ($upcoming->have_posts()) : ?>
     <ul class="upcoming-agendas">
     <?php while ($upcoming->have_posts()) :
          $upcoming->the_post();
          $linkText = " ";
	     //if has field pdf && field description is empty

	     $pdfText = get_field("agenda-packet-pdf");

	     if(!empty($post->post_content)) {
		     $linkText = get_permalink();
	     } else if ($pdfText != "") {
	 	     $linkText = $pdfText;
	     } else {
               $linkText = get_permalink();
          }
     ?>
          <li><a href="<?php echo $linkText; ?>">
               <?php the_field('board-info-date'); ?> &mdash; <?php the_title(); ?>
          </a></li>

     <?php endwhile; wp_reset_postdata(); ?>
     </ul>
<? else : ?>
     <p>No upcoming events listed.</p>
<?php endif; ?>


<h2> Past Agendas and Minutes </h2>

<?php
wp_reset_query();
query_posts( array ( 'category_name' => 'board-of-directors', 'posts_per_page' => -1 ) );
 echo '<ul class="past-agendas">';
 $count = 0;
while ( have_posts() ) : the_post();

     $current_time = current_time('mysql');
     $post_time = get_post_meta($post->ID, 'wpcf-board-info-date', true);
	 $current_time = current_time('timestamp', $gmt = 0);

     if ($post_time <= $current_time) {
     $count += 1;

	  //make link text
	  $linkText = " ";
	  //if has field pdf && field description is empty

	  $pdfText = get_field("agenda-packet-pdf");

	  if(!empty($post->post_content)) {
		  $linkText = get_permalink();
	  } else if ($pdfText != "") {
	 	 $linkText = $pdfText;
	  } else {
	  	$linkText = get_permalink();
	  			  echo "3";
	  }

      echo "<li>";
      //echo "date: ".$post_time.", current: ".$current_time."<br />";
      echo '<a href="';
      echo $linkText;
      echo'">';
	  echo get_field('board-info-date');
      echo ' - ';
      echo the_title();
      echo '</a>';
      echo "</li>";
     }






     //go through and print the upcoming ones
     // go through again and print last 12

endwhile;
 if ($count == 0) {
     echo 'There are no past events that are listed.';
     }
echo '</ul>';

 wp_reset_query();




                 the_content(); ?>

                    </div>


</div> <!-- page-overlay -->
<?php get_footer(); ?>
