<?php if (is_singular('tp_event')): ?>

<div class="thim-event-info">
	<div class="inner-box">

		<div class="box start">
			<div class="icon"><i class="fa fa-clock-o"></i></div>
			<div class="info-detail">
				<div class="title"><strong><?php esc_html_e('Start Time', 'thim'); ?></strong></div>
				<div class="info-content">
					<div class="time"><?php echo tp_event_start('h:i A'); ?></div>
					<div class="date"><?php echo tp_event_start('l, F d, Y'); ?></div>
				</div>
			</div>
		</div>

		<div class="box finish">
			<div class="icon"><i class="fa fa-flag"></i></div>
			<div class="info-detail">
				<div class="title"><strong><?php esc_html_e('Finish Time', 'thim'); ?></strong></div>
				<div class="info-content">
					<div class="time"><?php echo tp_event_end('h:i A'); ?></div>
					<div class="date"><?php echo tp_event_end('l, F d, Y'); ?></div>
				</div>
			</div>
		</div>

		<div class="box address">
			<div class="icon"><i class="fa fa-map-marker"></i></div>
			<div class="info-detail">
				<div class="title"><strong><?php esc_html_e('Address', 'thim'); ?></strong></div>
				<div class="info-content">
					<?php echo tp_event_location(); ?>
				</div>
			</div>
		</div>

	</div>
</div>

<?php endif; ?>