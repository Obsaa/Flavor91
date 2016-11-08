<?php

class Thim_List_Post_Slider_Widget extends Thim_Widget {
	function __construct() {
		parent::__construct(
			'list-post-slider',
			__( 'Thim: Display Posts Slider', 'thim' ),
			array(
				'description'   => __( 'Show Post', 'thim' ),
				'help'          => '',
				'panels_groups' => array( 'thim_widget_group' ),

			),
			array(),
			array(
				'title'        => array(
					'type'    => 'text',
					'label'   => __( 'Title', 'thim' ),
					'default' => __( "From Blog", "thim" )
				),
				'number_posts' => array(
					'type'    => 'number',
					'label'   => __( 'Number Post', 'thim' ),
					'default' => '4'
				),
				'orderby'      => array(
					"type"    => "select",
					"label"   => __( "Order by", "thim" ),
					"options" => array(
						"popular" => __( "Popular", "thim" ),
						"recent"  => __( "Recent", "thim" ),
						"title"   => __( "Title", "thim" ),
						"random"  => __( "Random", "thim" ),
					),
				),
				'order'        => array(
					"type"    => "select",
					"label"   => __( "Order by", "thim" ),
					"options" => array(
						"asc"  => __( "ASC", "thim" ),
						"desc" => __( "DESC", "thim" )
					),
				),
			),
			TP_THEME_DIR . 'inc/widgets/list-post-slider/'
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

function list_post_slider_register_widget() {
	register_widget( 'Thim_List_Post_Slider_Widget' );
}

add_action( 'widgets_init', 'list_post_slider_register_widget' );