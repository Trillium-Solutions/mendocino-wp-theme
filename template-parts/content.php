<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Transit_Base_Template
 */

?>
	
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<?php
		if ( is_single() ) : ?>
			<header>
				<h1 class="entry-title main"> <?php the_title(); ?></h1>
			</header><!--entry header -->
			<div class="container">
					<?php else : ?>
								<header class="entry-header">
									<h2 class="title-post">
										<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
									</h2>
								</header>
								<?php endif; ?>

								<div class="entry-content">
									<?php
										the_content( sprintf(
											/* translators: %s: Name of current post. */
											wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'mendocino' ), array( 'span' => array( 'class' => array() ) ) ),
											the_title( '<span class="screen-reader-text">"', '"</span>', false )
										) );
									?>
								</div><!-- .entry-content -->
								
		
			</div><!-- .post-container --> 

	
	</article><!-- #post-## -->
