<?php

class Event_Widget extends Thim_Widget {
	function __construct() {
		parent::__construct(
			'event',
			__( 'Thim: Event', 'thim' ),
			array(
				'description'   => __( 'event', 'thim' ),
				'help'          => '',
				'panels_groups' => array( 'thim_widget_group' ),
			),
			array(),
			array(
				'post_type' => array(
					'type'    => 'select',
					'label'   => esc_html__( 'Select a post type', 'thim' ),
					'options' => array(
						'normal_post' => esc_html__( 'Normal Post', 'thim' ),
						'event'       => esc_html__( 'Event', 'thim' )
					),
					'default' => 'normal_post'
				),
				'number'    => array(
					'type'    => 'slider',
					'label'   => esc_html__( 'Number Post', 'thim' ),
					'min'     => '1',
					'max'     => '10',
					'default' => '3',
				),
				'order'     => array(
					'type'    => 'select',
					'label'   => esc_html__( 'Order by', 'thim' ),
					'default' => 'desc',
					'options' => array(
						'asc'  => esc_html__( 'ASC', 'thim' ),
						'desc' => esc_html__( 'DESC', 'thim' )
					),
				),
				'orderby'   => array(
					'type'    => 'select',
					'label'   => esc_html__( 'Order by', 'thim' ),
					'default' => 'time',
					'options' => array(
						'popular' => esc_html__( 'Popular', 'thim' ),
						'recent'  => esc_html__( 'Recent', 'thim' ),
						'title'   => esc_html__( 'Title', 'thim' ),
						'random'  => esc_html__( 'Random', 'thim' ),
						'time'    => esc_html__( 'Time', 'thim' ),
					),
				),

				'open_link' => array(
					'type'    => 'select',
					'label'   => esc_html__( 'Open link', 'thim' ),
					'default' => 'current_tab',
					'options' => array(
						'new_tab'     => esc_html__( 'New tab', 'thim' ),
						'current_tab' => esc_html__( 'Current tab', 'thim' ),
						'archive'     => esc_html__( 'Open page archive', 'thim' )
					)
				)
			),
			TP_THEME_DIR . 'inc/widgets/event/'
		);
	}

	/**
	 * Initialize the CTA widget
	 */

	function get_template_name( $instance ) {
		return 'base';
	}

	function get_style_name( $instance ) {
		return false;
	}

}

function thim_event_register_widget() {
	register_widget( 'Event_Widget' );
}

add_action( 'widgets_init', 'thim_event_register_widget' );