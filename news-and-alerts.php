<?php
/*
Template Name: news-archive
*/
 get_header(); ?>

  <div id="page-overlay">
    <?php the_post(); ?>

    <h1 class="entry-title main"><?php the_title(); ?></h1>
<?php //if(function_exists(simple_breadcrumb)) {simple_breadcrumb();} ?>
			<br/>

						<hr />




    <div id="post-&lt;?php the_ID(); ?&gt;" <?php post_class(); ?>>
       <h2>Current Alerts</h2>
<?php the_content(); ?><?php
        // The Query
        $page = (get_query_var('paged')) ? get_query_var('paged') : 1;
        query_posts("paged=$page&cat=4");
        ?><?php
        // The Loop
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
        // Reset Query

        global $wp_query; $total_pages = $wp_query->max_num_pages; if ( $total_pages > 1 ) { ?>

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

      <div class="entry-content">


         <h2>News Archive</h2>

         <?php the_content(); ?><?php
        // The Query
        $page = (get_query_var('paged')) ? get_query_var('paged') : 1;
        query_posts("paged=$page&cat=3");
        ?><?php
        // The Loop
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
        // Reset Query

        global $wp_query; $total_pages = $wp_query->max_num_pages; if ( $total_pages > 1 ) { ?>

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
      </div>
    </div><!-- page-overlay -->
    <?php get_footer(); ?><?php edit_post_link( __( 'Edit', 'your-theme' ), '<span class="edit-link">', '</span>' ) ?>
  </div><!-- .entry-content -->

  <?php get_footer(); ?>
