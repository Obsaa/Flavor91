<?php

class Thim_Menu_Details_Widget extends Thim_Widget {

	function __construct() {

		parent::__construct(
			'menu-details',
			__( 'Thim: Menu Details', 'thim' ),
			array(
				'description' => __( 'View Menu Details.', 'thim' ),
				'help'        => '',
				'panels_groups' => array('thim_widget_group')
			),
			array(),

			array(
				'image'           => array(
					'type'  => 'media',
					'label' => __( 'Image', 'thim' ),
				),
				'title_group'     => array(
					'type'   => 'section',
					'label'  => __( 'Title Options', 'thim' ),
					'hide'   => true,
					'fields' => array(
						'title'          => array(
							'type'                  => 'text',
							'label'                 => __( 'Title', 'thim' ),
							"default"               => "",
							"description"           => __( "Provide the title for this view menu.", "thim" ),
							'allow_html_formatting' => true,
						),
						'color_title'    => array(
							'type'  => 'color',
							'label' => __( 'Color Title', 'thim' ),
							"class" => "color-mini"
						),
						'size'           => array(
							"type"        => "select",
							"label"       => __( "Size Heading", "thim" ),
                            "default"        => "h6",
							"options"     => array(
								"h3" => __( "h3", "thim" ),
								"h2" => __( "h2", "thim" ),
								"h4" => __( "h4", "thim" ),
								"h5" => __( "h5", "thim" ),
								"h6" => __( "h6", "thim" )
							),
							"description" => __( "Select size heading.", "thim" )
						),
						'font_heading'   => array(
							"type"        => "select",
							"label"       => __( "Font Heading", "thim" ),
							"options"     => array(
								"default" => __( "Default", "thim" ),
								"custom"  => __( "Custom", "thim" )
							),
							"description" => __( "Select Font heading.", "thim" )
						),
						'custom_heading' => array(
							'type'   => 'section',
							'label'  => __( 'Custom Heading Option', 'thim' ),
							'hide'   => true,
							'fields' => array(
								'custom_font_size'   => array(
									"type"        => "number",
									"label"       => __( "Font Size", "thim" ),
									"suffix"      => "px",
									"default"     => "18",
									"description" => __( "custom font size", "thim" ),
									"class"       => "color-mini"
								),
								'custom_font_weight' => array(
									"type"        => "select",
									"label"       => __( "Custom Font Weight", "thim" ),
									"class"       => "color-mini",
                                    "default"     => "700",
									"options"     => array(
										"normal" => __( "Normal", "thim" ),
										"bold"   => __( "Bold", "thim" ),
										"100"    => __( "100", "thim" ),
										"200"    => __( "200", "thim" ),
										"300"    => __( "300", "thim" ),
										"400"    => __( "400", "thim" ),
										"500"    => __( "500", "thim" ),
										"600"    => __( "600", "thim" ),
										"700"    => __( "700", "thim" ),
										"800"    => __( "800", "thim" ),
										"900"    => __( "900", "thim" )
									),
									"description" => __( "Select Custom Font Weight", "thim" ),
								),
                                'custom_text_transform' => array(
                                    "type"        => "select",
                                    "label"       => __( "Custom Text-transform", "thim" ),
                                    "class"       => "color-mini",
                                    "default"     => "uppercase",
                                    "options"     => array(
                                        "none" => __( "None", "thim" ),
                                        "capitalize"   => __( "Capitalize", "thim" ),
                                        "uppercase"    => __( "Uppercase", "thim" ),
                                        "lowercase"    => __( "Lowercase", "thim" ),
                                        "inherit"    => __( "Inherit", "thim" ),
                                    ),
                                    "description" => __( "Select Custom Text-transform", "thim" ),
                                ),
								'custom_mg_bt'       => array(
									"type"   => "number",
									"class"  => "color-mini",
									"label"  => __( "Margin Bottom Value", "thim" ),
									"value"  => 0,
									"suffix" => "px",
								),
							)
						),
					),
				),

                'icon_image' => array(
                    'label'  => __( 'Icon Image', 'thim' ),
                    'type' => 'media',
                    'name' => __( 'Upload Icon', 'thim' ),
                ),

                'show_icon'                => array(
                    'type'    => 'checkbox',
                    'label'   => __( 'Show Icon Image', 'thim' ),
                    'default' => true
                ),

				'desc_group'      => array(
					'type'   => 'section',
					'label'  => __( 'Description', 'thim' ),
					'hide'   => true,
					'fields' => array(
						'content'              => array(
							"type"                  => "textarea",
							"label"                 => __( "Add description", "thim" ),
							"default"               => "",
							"description"           => __( "Provide the description for this icon box.", "thim" ),
							'allow_html_formatting' => true
						),
						'custom_font_size_des' => array(
							"type"        => "number",
							"label"       => __( "Custom Font Size", "thim" ),
							"suffix"      => "px",
							"default"     => "13",
							"description" => __( "custom font size", "thim" ),
							"class"       => "color-mini",
						),
						'margin_bottom'        => array(
							'type'   => 'number',
							'label'  => __( 'Margin Bottom: ', 'thim' ),
							"suffix" => "px",
							"class"  => "color-mini",
						),
						'custom_font_weight'   => array(
							"type"        => "select",
							"label"       => __( "Custom Font Weight", "thim" ),
							"class"       => "color-mini",
							"options"     => array(
								""     => __( "Normal", "thim" ),
								"bold" => __( "Bold", "thim" ),
								"100"  => __( "100", "thim" ),
								"200"  => __( "200", "thim" ),
								"300"  => __( "300", "thim" ),
								"400"  => __( "400", "thim" ),
								"500"  => __( "500", "thim" ),
								"600"  => __( "600", "thim" ),
								"700"  => __( "700", "thim" ),
								"800"  => __( "800", "thim" ),
								"900"  => __( "900", "thim" )
							),
							"description" => __( "Select Custom Font Weight", "thim" ),
						),
						'color_description'    => array(
							"type"  => "color",
							"label" => __( "Color Description", "thim" ),
							"class" => "color-mini",
						),
					),
				),

				'read_more_group' => array(
					'type'   => 'section',
					'label'  => __( 'Link Read More', 'thim' ),
					'hide'   => true,
					'fields' => array(

						'link'                         => array(
							"type"        => "text",
							"label"       => __( "Add Link", "thim" ),
							"description" => __( "Provide the link that will be applied to this view menu.", "thim" )
						),
						'read_text'                    => array(
							"type"                  => "text",
							"label"                 => __( "Read More Text", "thim" ),
							"default"               => "Read More",
							"description"           => __( "Customize the read more text.", "thim" ),
							'allow_html_formatting' => true,
						),

						'read_more_font_size'          => array(
							"type"        => "number",
							"label"       => __( "Font Size Read More Text: ", "thim" ),
							"suffix"      => "px",
							"description" => __( "custom font size", "thim" ),
							"class"       => "mini",
						),
						'read_more_font_weight'        => array(
							"type"    => "select",
							"label"   => __( "Font Weight Read More Text: ", "thim" ),
							"options" => array(
								""     => __( "Normal", "thim" ),
								"bold" => __( "Bold", "thim" ),
								"100"  => __( "100", "thim" ),
								"200"  => __( "200", "thim" ),
								"300"  => __( "300", "thim" ),
								"400"  => __( "400", "thim" ),
								"500"  => __( "500", "thim" ),
								"600"  => __( "600", "thim" ),
								"700"  => __( "700", "thim" ),
								"800"  => __( "800", "thim" ),
								"900"  => __( "900", "thim" )
							),
						),
						'border_read_more_color'       => array(
							"type"  => "color",
							"class" => "color-mini",
							"label" => __( "Border Color Read More Text:", "thim" ),
						),

						'bg_read_more_text'            => array(
							"type"  => "color",
							"class" => "mini",
							"label" => __( "Background Color Read More Text:", "thim" ),
							"class" => "color-mini",
						),

						'read_more_text_color'         => array(
							"type"    => "color",
							"class"   => "",
							"label"   => __( "Text Color Read More Text:", "thim" ),
							"default" => "#fff",
							"class"   => "color-mini",
						),

					),
				),

                'text_align_sc'   => array(
                    "type"    => "select",
                    "class"   => "",
                    "label"   => __( "Text Align:", "thim" ),
                    "default" => 'text-center',
                    "options" => array(
                        "text-left"   => "Text Left",
                        "text-right"  => "Text Right",
                        "text-center" => "Text Center"
                    )
                ),

			),
			TP_THEME_DIR . 'inc/widgets/menu-details/'
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



function thim_menu_details_register_widget() {
	register_widget( 'Thim_Menu_Details_Widget' );
}

add_action( 'widgets_init', 'thim_menu_details_register_widget' );