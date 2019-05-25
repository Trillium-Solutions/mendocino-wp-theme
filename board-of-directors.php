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
$archive_year = date("Y");
if(isset($_GET['archiveyear'])) {
	$archive_year = sanitize_text_field($_GET['archiveyear']);
}

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
               <?php the_field('board-info-date'); ?> &ndash; <?php the_title(); ?>
          </a></li>

     <?php endwhile; wp_reset_postdata(); ?>
     </ul>
<? else : ?>
     <p>No upcoming events listed.</p>
<?php endif; ?>


<h2><?php echo $archive_year; ?> Past Agendas and Minutes</h2>
<div>
<form method="get" action="">
     <label for="archiveyear">Show different year: </label>
     <select name="archiveyear" id="archiveyear">
          <?php
          $cur = date("Y");
          $first = 2012;
          $range = range($cur, $first);
          foreach($range as $r) {
               $selected = '';
               if ($r == $archive_year) {
                    $selected = ' selected ';
               }
               echo '<option value="'.$r.'"'.$selected.'>'.$r.'</option>';
          }
          ?>
     </select>
     <input type="submit" class="btn" value="Get Meetings">
</form>
</div>
<br />
<?php
     $start = $archive_year . '0101';
     $end = $archive_year . '1231';
     $args = array(
          'category_name' => 'board-of-directors',
          'meta_key' => 'board-info-date',
          'orderby' => 'meta_value_num',
          'order' => 'DESC',
          'posts_per_page' => -1,
          'meta_query'	=> array(
               'relation' => 'AND',
               array(
                    'key' => 'board-info-date',
                    'value' => $start,
                    'compare' => '>=',
                    'type' => 'NUMERIC',
               ),
               array(
                    'key' => 'board-info-date',
                    'value' => $end,
                    'compare' => '<=',
                    'type' => 'NUMERIC',
               ),
          )
     );
     $q = new WP_Query($args);
     if ( $q->have_posts() ) : ?>
     <ul class="past-agendas">
          <?php while ($q->have_posts() ) : $q->the_post();

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
               <?php the_field('board-info-date'); ?> &ndash; <?php the_title(); ?>
          </a></li>

          <?php endwhile; wp_reset_postdata(); ?>
     </ul>
     <?php else: ?>

     <p>No Agendas or Meetings for <?php echo $archive_year; ?></p>

     <?php endif; ?>





     <?php the_content(); ?>

</div>


</div> <!-- page-overlay -->
<?php get_footer(); ?>
