<?php
/**
* Template Name: Board Meetings
*
* @package BAT
*/

get_header();
?>

	<div id="page-overlay">
		<div id="primary" class="content-area">
			<main id="main" class="site-main">

				<?php
				while ( have_posts() ) : the_post();
				$featured_image = get_the_post_thumbnail_url( $post->ID, 'full');
				$archive_year = date("Y");
				if(isset($_GET['archiveyear'])) {
					$archive_year = sanitize_text_field($_GET['archiveyear']);
				}
				?>

				<article <?php post_class(); ?>>
					<?php
					$header_class = 'page-header';
					if ($featured_image) :
						$header_class = 'page-header hero-header';
					?>
						<style>
						.page-header {
							background-repeat: no-repeat;
							background-size: cover;
							background-position: center;
							background-image: url(<?php echo $featured_image; ?>);
						}
						</style>
					<?php endif; ?>
					<header class="<?php echo $header_class; ?>">
						<div class="container">
							<div class="wrapper sm-max-width">
								<?php the_title( '<h1 class="entry-title main">', '</h1>' ); ?>
							</div>
						</div>
					</header>
					<br>
					<hr>
					<div class="container">
						<div class="wrapper sm-max-width">
							<div class="entry-content">

								<?php the_content(); ?>

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

						<div id="board-meetings">
							<?php
								$start = $archive_year . '0101';
								$end = $archive_year . '1231';
								$args = array(
									'post_type' => 'board-meeting',
									'meta_key' => 'meeting_date',
									'orderby' => 'meta_value_num',
									'order' => 'DESC',
									'posts_per_page' => -1,
									'meta_query'	=> array(
										'relation' => 'AND',
										array(
											'key' => 'meeting_date',
											'value' => $start,
											'compare' => '>=',
											'type' => 'NUMERIC',
										),
										array(
											'key' => 'meeting_date',
											'value' => $end,
											'compare' => '<=',
											'type' => 'NUMERIC',
										),
									)
								);
								$q = new WP_Query($args);
								if ( $q->have_posts() ) : ?>
								<h2><?php echo $archive_year; ?> Meeting dates and agendas</h2>
								<table id="board-meeting-table" class="table table-striped">
									<thead>
									<tr>
										<th>Meeting</th>
										<th>Date</th>
										<th>Agenda (PDF)</th>
										<th>Packet (PDF)</th>
										<th>Minutes (PDF)</th>
									</tr>
									</thead>
									<tbody>

									<?php while ( $q->have_posts() ) : $q->the_post(); ?>

										<?php
										$agenda = get_field('agenda') ? get_field('agenda') : null;
										$packet = get_field('packet') ? get_field('packet') : null;
										$minutes = get_field('minutes') ? get_field('minutes') : null;

										?>

										<tr>
											<td><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></td>
											<td><?php the_field('meeting_date'); ?></td>
											<td>
												<?php if ($agenda) : ?>
													<a href="<?php echo $agenda ?> " target="_blank">Agenda</a>
												<?php else: echo '&mdash;'; ?>
												<?php endif; ?>
											</td>
											<td>
												<?php if ($packet) : ?>
													<a href="<?php echo $packet ?> " target="_blank">Packet</a>
												<?php else: echo '&mdash;'; ?>
												<?php endif; ?>
											</td>
											<td>
												<?php if ($minutes) : ?>
													<a href="<?php echo $minutes ?>" target="_blank">Minutes</a>
												<?php else: echo '&mdash;'; ?>
												<?php endif; ?>
											</td>
										</tr>

									<?php endwhile; wp_reset_postdata(); ?>
									</tbody>

								</table>
								<?php else :  ?>
									<br>
									<h3>There are no meetings available.</h3>
								<?php endif; ?>
								</div>
							</div>
						</div>
					</div>
				</article>

				<?php
				endwhile; // End of the loop.
				?>

			</main><!-- #main -->
		</div><!-- #primary -->
	</div><!-- #page-overlay -->

	

<?php
get_footer();
