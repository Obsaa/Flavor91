<?php
class Single_Images_Widget extends Thim_Widget {

	function __construct() {

		parent::__construct(
			'single-images',
			__( 'Thim: Single Images', 'thim' ),
			array(
				'description' => __( 'Add heading text', 'thim' ),
				'help'        => '',
				'panels_groups' => array('thim_widget_group')
			),
			array(),
			array(
				'image' => array(
					'type'  => 'media',
 					'label' => __( 'Image', 'thim' ),
					'description'  => __( 'Select image from media library.', 'thim' )
				),

				'image_size'         => array(
					'type'    => 'text',
					'label'   => __( 'Image size', 'thim' ),
 					'description'    => __( 'Enter image size. Example: "thumbnail", "medium", "large", "full" or other sizes defined by current theme. Alternatively enter image size in pixels: 200x100 (Width x Height). Leave empty to use "thumbnail" size.', 'thim' )
				),
				'image_link'         => array(
					'type'    => 'text',
					'label'   => __( 'Image Link', 'thim' ),
					'description'    => __( 'Enter URL if you want this image to have a link.', 'thim' )
				),
				'link_target'       => array(
					"type"    => "select",
					"label"   => __( "Link Target", "thim" ),
 					"options" => array(
						"_self"              => __( "Same window", "thim" ),
						"_blank" => __( "New window", "thim" ),
 					),
				),
				'image_alignment'       => array(
					"type"    => "select",
					"label"   => __( "Image alignment", "thim" ),
					"description"=>"Select image alignment.",
					"options" => array(
						"left"              => __( "Align Left", "thim" ),
						"right" => __( "Align Right", "thim" ),
						"center" => __( "Align Center", "thim" )
					),
				),
				'image_parallax'         => array(
					'type'    => 'checkbox',
					'label'   => __( 'Images Parallax', 'thim' ),
 				),
				'css_animation'       => array(
					"type"    => "select",
					"label"   => __( "CSS Animation", "thim" ),
					"options" => array(
						""              => __( "No", "thim" ),
						"top-to-bottom" => __( "Top to bottom", "thim" ),
						"bottom-to-top" => __( "Bottom to top", "thim" ),
						"left-to-right" => __( "Left to right", "thim" ),
						"right-to-left" => __( "Right to left", "thim" ),
						"appear"        => __( "Appear from center", "thim" )
					),
				),
			),
			TP_THEME_DIR . 'inc/widgets/single-images/'
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
function thim_single_images_register_widget() {
	register_widget( 'Single_Images_Widget' );
}

add_action( 'widgets_init', 'thim_single_images_register_widget' );