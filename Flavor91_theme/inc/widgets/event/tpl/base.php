<?php

$number  = $instance['number'];
$link    = $instance['open_link'];
$date    = current_time( 'mysql' );
$current = time();

if ( isset( $instance['post_type'] ) && $instance['post_type'] == 'normal_post' ) {
	$args_event = array(
		'post_type'      => 'post',
		'posts_per_page' => $number,
		'order'          => $instance['order'] == 'asc' ? 'asc' : 'desc',
		'meta_query'     => array(
			'relation' => 'AND',
			array(
				'key'   => 'thim_use_event',
				'value' => '1',
			),
			array(
				'key'     => 'thim_start_date',
				'value'   => $current,
				'compare' => '>'
			)
		)
	);
} else {
	$args_event = array(
		'post_type'      => array( 'tp_event' ),
		'posts_per_page' => $number,
		'order'          => $instance['order'] == 'asc' ? 'asc' : 'desc',
		'post_status'    => 'tp-event-upcoming'
	);
}

if ( $instance['orderby'] == 'time' && $instance['post_type'] == 'normal_post' ) {
	$args_event['orderby']  = 'meta_value';
	$args_event['meta_key'] = 'thim_start_date';
} elseif ( $instance['orderby'] == 'time' && $instance['post_type'] == 'event' ) {
	$args_event['orderby']  = 'meta_value';
	$args_event['meta_key'] = 'tp_event_date_start';
} else {
	switch ( $instance['orderby'] ) {
		case 'recent' :
			$args_event['orderby'] = 'post_date';
			break;
		case 'title' :
			$args_event['orderby'] = 'post_title';
			break;
		case 'popular' :
			$args_event['orderby'] = 'comment_count';
			break;
		default : //random
			$args_event['orderby'] = 'rand';
	}
}

$the_query                   = new WP_Query( $args_event );

if ( $the_query->have_posts() ): ?>
	<?php while ( $the_query->have_posts() ) : $the_query->the_post();
		?>
		<?php if ( $instance['post_type'] == 'event' ) : ?>
			<?php if( class_exists('TP_Event') ) : ?>
			<div class="item-event">
				<?php
				if ( has_post_thumbnail() ) {
					echo '<div class="event-thumbnail">' . feature_images( 600, 300 ) . '</div>';
				} ?>
				<div class="content-item">
					<?php the_title( sprintf( '<h3><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h3>' ); ?>
					<?php $post_data = get_post(get_the_ID());
					echo $post_data->post_excerpt; ?>
					<?php echo '<p><strong>' . tp_event_start( 'H:i A l - d F Y' ) . '</strong></p>'; ?>
					<?php if ( $link == 'new_tab' ) : ?>
						<a class="view-detail"
						   href="<?php echo esc_url( get_permalink() ) ?>"
						   target="_blank"><?php _e( 'view detail', 'thim' ) ?></a>
					<?php elseif ( $link == 'current_tab' ) : ?>
						<a class="view-detail"
						   href="<?php echo esc_url( get_permalink() ) ?>"><?php _e( 'view detail', 'thim' ) ?></a>
					<?php else : ?>
						<a class="view-detail"
						   href="<?php echo get_post_type_archive_link( array( 'tp_event' ) ) ?>"><?php _e( 'view detail', 'thim' ) ?></a>
					<?php endif; ?>
				</div>
				<div class="content-right">
					<div id="coming-soon-counter-<?php echo get_the_ID(); ?>" class="tp_event_counter_widget"
					     data-time="<?php echo esc_attr( tp_event_get_time( 'M j, Y H:i:s O', null, false ) ); ?>"
					     data-current-time="<?php echo esc_attr( $date ); ?>">

					</div>
				</div>

			</div>
				<?php endif; ?>
		<?php else :
			$thim_desc = get_post_meta( get_the_ID(), 'thim_desc', true );
			$thim_start_date = get_post_meta( get_the_ID(), 'thim_start_date', true );
			?>
			<div class="item-event">
				<?php
				if ( has_post_thumbnail() ) {
					echo '<div class="event-thumbnail">' . feature_images( 600, 300 ) . '</div>';
				} ?>
				<div class="content-item">
					<?php the_title( sprintf( '<h3><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h3>' ); ?>
					<?php $post_data = get_post(get_the_ID());
					echo $post_data->post_excerpt; ?>
					<?php if ( $thim_desc ) {
						echo '<p><strong>' . $thim_desc . '</strong></p>';
					} ?>
					<?php if ( $link == 'new_tab' ) : ?>
						<a class="view-detail"
						   href="<?php echo esc_url( get_permalink() ) ?>"
						   target="_blank"><?php _e( 'view detail', 'thim' ) ?></a>
					<?php elseif ( $link == 'current_tab' ) : ?>
						<a class="view-detail"
						   href="<?php echo esc_url( get_permalink() ) ?>"><?php _e( 'view detail', 'thim' ) ?></a>
					<?php else : ?>
						<a class="view-detail"
						   href="<?php echo get_post_type_archive_link( 'post' ) ?>"><?php _e( 'view detail', 'thim' ) ?></a>
					<?php endif; ?>
				</div>
				<div class="content-right">
					<div id="coming-soon-counter-<?php echo get_the_ID(); ?>"></div>
					<script type="text/javascript">
						<?php echo 'jQuery(function($) {
									$("#coming-soon-counter-' . get_the_ID() . '").mbComingsoon({
										localization: {
											days: "' . esc_attr( __( 'days', 'thim' ) ) . '",           //Localize labels of counter
											hours: "' . esc_attr( __( 'hours', 'thim' ) ) . '",
											minutes: "' . esc_attr( __( 'minutes', 'thim' ) ) . '",
											seconds: "' . esc_attr( __( 'seconds', 'thim' ) ) . '"
										}
										, expiryDate:  new Date(' . date( "Y", $thim_start_date ) . ', ' . ( date( "m", $thim_start_date ) - 1 ) . ', ' . date( "d", $thim_start_date ) . ', ' . date( "G", $thim_start_date ) . ',' . date( "i", $thim_start_date ) . ', ' . date( "s", $thim_start_date ) . ')
										, speed:100 });
									setTimeout(function () {
										$(window).resize();
									}, 200);
								});
							 '
						?>
					</script>
				</div>
			</div>
		<?php endif; ?>
	<?php endwhile;
	?>
<?php endif;
	wp_reset_postdata();
// Restore global post data stomped by the_post(). ?>