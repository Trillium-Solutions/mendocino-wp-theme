<?php
/**


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
                    <h3>
                    <?php
                        the_field("board-info-date");
                    ?>
                    </h3>
                    <br />
                    <br />
                    <?php
                    the_field("agenda-packet-pdf");
                    the_content(); ?>
                </div>
            </main>
</div> <!-- page-overlay -->
<?php get_footer(); ?>
