<?php
/**

 
 */

get_header(); ?>
<div id="page-overlay">
		
			<?php the_post(); ?>
			<h1 class="entry-title main"><?php the_title(); ?></h1>
<?php if(function_exists(simple_breadcrumb)) {simple_breadcrumb();} ?>
			<br/>
					
						<hr />
									<br/>
 
                <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                    
                    
                    <h3>
                    <?php
                    types_render_field("board-info-date", null);
                    ?></h3><br /><br />
                    <?php
                    types_render_field("agenda-packet-pdf", array("link"=>"true"));
                    types_render_field("agenda-packet-pdf", array("link"=>"true"));
                    echo "lalal";
                    the_content(); ?>
                    </div>

			
</div> <!-- page-overlay -->
<?php get_footer(); ?>
