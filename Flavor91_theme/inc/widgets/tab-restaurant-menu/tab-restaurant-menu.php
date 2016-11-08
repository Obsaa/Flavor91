<?php

class Tab_Restaurant_Menu_Widget extends Thim_Widget {
	function __construct() {
		$erm_menu_args = array(
			'post_type' => 'erm_menu',
            'posts_per_page' => -1,
        );
		$lop_menu_args = new WP_Query( $erm_menu_args );
		$cate[0]       = 'Create Menu';
		if ( $lop_menu_args->have_posts() ) {
			$cate = '';
			while ( $lop_menu_args->have_posts() ): $lop_menu_args->the_post();
				$cate[get_the_ID()] = get_the_title( get_the_ID() );;
			endwhile;
		}
		wp_reset_postdata();

		parent::__construct(
			'tab-restaurant-menu',
			__( 'Tab Restaurant Menu', 'thim' ),
			array(
				'description'   => __( 'Tab Restaurant Menu', 'thim' ),
				'help'          => '',
				'panels_groups' => array( 'thim_widget_group' )
			),
			array(),
			array(
				'tab'  => array(
					'type'      => 'repeater',
					'label'     => __( 'Tab', 'thim' ),
					'item_name' => __( 'Tab', 'thim' ),
					'fields'    => array(
						'title'         => array(
							"type"    => "text",
							"label"   => __( "Tab Title", "thim" ),
							"default" => "Tab Title",
						),

                        'sub-title'  => array(
                            "type"  => "text",
                            "label" => __( "Sub Title", "thim" ),
                        ),
                        'icon_image' => array(
                            'type' => 'media',
                            'name' => __( 'Upload Icon', 'thim' ),
                        ),

						'id'            => array(
							'type'    => 'select',
							'label'   => __( 'Select Menu', 'thim' ),
							'options' => $cate,
						),
						'columns'       => array(
							'type'    => 'select',
							'label'   => __( 'Columns', 'thim' ),
							'options' => array( '1' => '1', '2' => '2' ),
						),
					),
				),
				'type' => array(
					'type'    => 'select',
					'label'   => 'Menu Style',
					'options' => array( '' => 'Regular', 'dotted' => 'Dotted' ),
				),
			),
			TP_THEME_DIR . 'inc/widgets/tab-restaurant-menu/'
		);
	}

	/**
	 * Initialize the CTA widget
	 */


	function get_template_name( $instance ) {
		if ( $instance['type'] == 'dotted' ) {
			return 'base';
		} else {
			return 'default';
		}
	}


	function get_style_name( $instance ) {
		return false;
	}
}

function thim_tab_restaurant_menu_register_widget() {
	register_widget( 'Tab_Restaurant_Menu_Widget' );
}

add_action( 'widgets_init', 'thim_tab_restaurant_menu_register_widget' );