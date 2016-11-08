<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package thim
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="entry-content">
		<?php the_content(); ?>
		<?php
		wp_link_pages( array(
			'before' => '<div class="page-links">' . __( 'Pages:', 'thim' ),
			'after'  => '</div>',
		) );
		?>
	</div>
	<!-- .entry-content -->
</article><!-- #post-## -->
