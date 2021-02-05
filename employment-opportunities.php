<?php
/*
Template Name: employment
*/
 get_header(); ?>

  <div id="page-overlay">
    <?php the_post(); ?>
        <header>
          <h1 class="entry-title main"><?php the_title(); ?></h1>
        </header>
    <?php //if(function_exists(simple_breadcrumb)) {simple_breadcrumb();} ?>
			<br/>
			<hr />
      <main>
        <div id="post-&lt;?php the_ID(); ?&gt;" <?php post_class(); ?>
    <br/>
        <br />
     <?php the_content(); ?>
             <br />        
             <br />
    <?php
        // The Query
        $page = (get_query_var('paged')) ? get_query_var('paged') : 1;
        query_posts( array ( 'category_name' => 'employment_opportunities', 'posts_per_page' => -1 ) );
        ?><?php
        // The Loop
        if(!have_posts()) {
        	echo "";
        } else {
        echo '<h2>Current Jobs</h2>';
        while ( have_posts() ) : the_post();


                echo '<div class="archive-alert-item">';
                echo '<a href="';
                echo the_permalink();
                echo '">';
                echo the_date();
               echo ' - ';


                echo the_title();




               echo '</a>';
               echo '</div>';
        endwhile;
        }
        // Reset Query

        global $wp_query; $total_pages = $wp_query->max_num_pages; if ( $total_pages > 1 ) { ?>

      </main>
   
        <div id="nav-above" class="navigation">
          <div class="nav-previous">
            <?php next_posts_link(__( '<span class="meta-nav">&laquo;</span> Older news articles', 'your-theme' )) ?>
          </div>

          <div class="nav-next">
            <?php previous_posts_link(__( 'Newer news articles <span class="meta-nav">&raquo;</span>', 'your-theme' )) ?>
          </div>
        </div><!-- #nav-above -->
        <?php }
        wp_reset_query();
        ?>



  <?php get_footer(); ?>
