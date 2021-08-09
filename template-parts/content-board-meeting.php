<?php
/**
 * Template part for displaying single board meeting
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package BAT
 */

?>

<article <?php post_class(); ?>>
    <header class="page-header">
        <div class="container">
            <div class="wrapper sm-max-width">
                <?php the_title( '<h1 class="page-title">', '</h1>' ); ?>
            </div>
        </div>
    </header>
   
    <div class="container">
        <div class="wrapper sm-max-width">
            <div class="entry-content">
                <div class="entry-meta">
                    <div class="date">Meeting Date: <?php the_field('meeting_date'); ?></div>
                    <?php
                    $agenda = get_field('agenda') ? get_field('agenda') : null;
                    $packet = get_field('packet') ? get_field('packet') : null;
                    $minutes = get_field('minutes') ? get_field('minutes') : null;
                    if ($agenda) : ?>
                        <a class="link-list" href="<?php echo $agenda ?>">Agenda</a>
                    <?php endif;
                    if ($packet) : ?>
                        <a class="link-list" href="<?php echo $packet ?>">Packet</a>
                    <?php endif;
                    if ($minutes) : ?>
                        <a class="link-list" href="<?php echo $minutes ?>">Minutes</a>
                    <?php endif;
                    ?>
                </div>
                <?php
                    the_content( sprintf(
                        /* translators: %s: Name of current post. */
                        wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'mvrta' ), array( 'span' => array( 'class' => array() ) ) ),
                        the_title( '<span class="screen-reader-text">"', '"</span>', false )
                    ) );
                ?>
                </div><!-- .entry-content -->

           
        </div>
    </div>
</article><!-- #post-## -->