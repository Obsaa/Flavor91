<?php

class Icon_Box_Widget extends Thim_Widget {
	function __construct() {
		parent::__construct(
			'icon-box',
			__( 'Thim: Icon Box', 'thim' ),
			array(
				'description'   => __( 'Add icon box', 'thim' ),
				'help'          => '',
				'panels_groups' => array( 'thim_widget_group' ),
 			),
			array(),
			array(
				'sub-title'           => array(
					'type'  => 'text',
					'label' => __( 'Sub Title', 'thim' ),
				),
				'title_group'         => array(
					'type'   => 'section',
					'label'  => __( 'Title Options', 'thim' ),
					'hide'   => true,
					'fields' => array(
						'title'            => array(
							'type'                  => 'text',
							'label'                 => __( 'Title', 'thim' ),
							"default"               => "This is an icon box.",
							"description"           => __( "Provide the title for this icon box.", "thim" ),
							'allow_html_formatting' => true
						),
						'color_title'      => array(
							'type'  => 'color',
							'label' => __( 'Color Title', 'thim' ),
						),
						'size'             => array(
							"type"        => "select",
							"label"       => __( "Size Heading", "thim" ),
							"default"     => "h3",
							"options"     => array(
								"h2" => __( "h2", "thim" ),
								"h3" => __( "h3", "thim" ),
								"h4" => __( "h4", "thim" ),
								"h5" => __( "h5", "thim" ),
								"h6" => __( "h6", "thim" )
							),
							"description" => __( "Select size heading.", "thim" )
						),
						'font_heading'     => array(
							"type"          => "select",
							"label"         => __( "Font Heading", "thim" ),
							"options"       => array(
								"default" => __( "Default", "thim" ),
								"custom"  => __( "Custom", "thim" )
							),
							"description"   => __( "Select Font heading.", "thim" ),
							'state_emitter' => array(
								'callback' => 'select',
								'args'     => array( 'custom_font_heading' )
							)
						),
						'custom_heading'   => array(
							'type'          => 'section',
							'label'         => __( 'Custom Heading Option', 'thim' ),
							'hide'          => true,
							'state_handler' => array(
								'custom_font_heading[custom]'  => array( 'show' ),
								'custom_font_heading[default]' => array( 'hide' ),
							),
							'fields'        => array(
								'custom_font_size'   => array(
									"type"        => "number",
									"label"       => __( "Font Size", "thim" ),
									"suffix"      => "px",
									"default"     => "14",
									"description" => __( "custom font size", "thim" ),
									"class"       => "color-mini"
								),
								'custom_font_weight' => array(
									"type"        => "select",
									"label"       => __( "Custom Font Weight", "thim" ),
									"class"       => "color-mini",
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
								'custom_mg_bt'       => array(
									"type"   => "number",
									"class"  => "color-mini",
									"label"  => __( "Margin Bottom Value", "aloxo" ),
									"value"  => 0,
									"suffix" => "px",
								),
							)
						),
						'line_after_title' => array(
							'type'  => 'checkbox',
							'label' => __( 'Show Separator', 'thim' ),
						),
					),
				),
				'desc_group'          => array(
					'type'   => 'section',
					'label'  => __( 'Description', 'thim' ),
					'hide'   => true,
					'fields' => array(
						'content'              => array(
							"type"                  => "textarea",
							"label"                 => __( "Add description", "thim" ),
							"default"               => "Write a short description, that will describe the title or something informational and useful.",
							"description"           => __( "Provide the description for this icon box.", "thim" ),
							'allow_html_formatting' => true
						),
						'custom_font_size_des' => array(
							"type"        => "number",
							"label"       => __( "Custom Font Size", "thim" ),
							"suffix"      => "px",
							"default"     => "",
							"description" => __( "custom font size", "thim" ),
							"class"       => "color-mini",
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
				'read_more_group'     => array(
					'type'   => 'section',
					'label'  => __( 'Link Icon Box', 'thim' ),
					'hide'   => true,
					'fields' => array(
						// Add link to existing content or to another resource
						'link'                   => array(
							"type"        => "text",
							"label"       => __( "Add Link", "thim" ),
							"description" => __( "Provide the link that will be applied to this icon box.", "thim" )
						),
						// Select link option - to box or with read more text
						'read_more'              => array(
							"type"          => "select",
							"label"         => __( "Apply link to:", "thim" ),
							"options"       => array(
								"complete_box" => "Complete Box",
								"title"        => "Box Title",
								"more"         => "Display Read More"
							),
							"description"   => __( "Select whether to use color for icon or not.", "thim" ),
							'state_emitter' => array(
								'callback' => 'select',
								'args'     => array( 'read_more_op' )
							)
						),
						// Link to traditional read more
						'button_read_more_group' => array(
							'type'          => 'section',
							'label'         => __( 'Option Button Read More', 'thim' ),
							'hide'          => true,
							'state_handler' => array(
								'read_more_op[more]'         => array( 'show' ),
								'read_more_op[complete_box]' => array( 'hide' ),
								'read_more_op[title]'        => array( 'hide' ),
							),
							'fields'        => array(
								'read_text'                  => array(
									"type"        => "text",
									"label"       => __( "Read More Text", "thim" ),
									"default"     => "Read More",
									"description" => __( "Customize the read more text.", "thim" ),
								),
								'read_more_text_color'       => array(
									"type"        => "color",
									"class"       => "",
									"label"       => __( "Text Color Read More", "thim" ),
									"description" => __( "Select whether to use text color for Read More Text or default.", "thim" ),
									"class"       => "color-mini",
								),
								'border_read_more_text'      => array(
									"type"        => "color",
									"label"       => __( "Border Color Read More Text:", "thim" ),
									"description" => __( "Select whether to use border color for Read More Text or none.", "thim" ),
									"class"       => "color-mini",
								),
								'bg_read_more_text'          => array(
									"type"        => "color",
									"class"       => "mini",
									"label"       => __( "Background Color Read More Text:", "thim" ),
									"description" => __( "Select whether to use background color for Read More Text or default.", "thim" ),
									"class"       => "color-mini",
								),
								'read_more_text_color_hover' => array(
									"type"        => "color",
									"class"       => "",
									"label"       => __( "Text Hover Color Read More", "thim" ),
									"description" => __( "Select whether to use text color for Read More Text or default.", "thim" ),
									"class"       => "color-mini",
								),

								'bg_read_more_text_hover'    => array(
									"type"        => "color",
									"label"       => __( "Background Hover Color Read More Text:", "thim" ),
									"description" => __( "Select whether to use background color when hover Read More Text or default.", "thim" ),
									"class"       => "color-mini",
								),

							)
						),
					),
				),
				// Play with icon selector
				'icon_type'           => array(
					"type"          => "select",
					"class"         => "",
					"label"         => __( "Icon to display:", "thim" ),
					"default"       => "font-awesome",
					"options"       => array(
						"font-awesome"  => "Font Awesome Icon",
						"font-7-stroke" => "Font 7 stroke Icon",
						"custom"        => "Custom Image Icon",
					),
					'state_emitter' => array(
						'callback' => 'select',
						'args'     => array( 'icon_type_op' )
					)
				),
				'font_7_stroke_group' => array(
					'type'          => 'section',
					'label'         => __( 'Font 7 Stroke Icon', 'thim' ),
					'hide'          => true,
					'state_handler' => array(
						'icon_type_op[font-awesome]'  => array( 'hide' ),
						'icon_type_op[custom]'        => array( 'hide' ),
						'icon_type_op[font-7-stroke]' => array( 'show' ),
					),
					'fields'        => array(
						'icon'      => array(
							"type"        => "icon-7-stroke",
							"class"       => "",
							"label"       => __( "Select Icon:", "thim" ),
							"description" => __( "Select the icon from the list.", "thim" ),
							"class_name"  => 'font-7-stroke',
						),
						// Resize the icon
						'icon_size' => array(
							"type"        => "number",
							"class"       => "",
							"label"       => __( "Icon Font Size ", "thim" ),
							"suffix"      => "px",
							"default"     => "14",
							"description" => __( "Select the icon font size.", "thim" ),
							"class_name"  => 'font-7-stroke'
						),
					),
				),
				'font_awesome_group'  => array(
					'type'          => 'section',
					'label'         => __( 'Font Awesome Icon', 'thim' ),
					'hide'          => true,
					'state_handler' => array(
						'icon_type_op[font-awesome]'  => array( 'show' ),
						'icon_type_op[custom]'        => array( 'hide' ),
						'icon_type_op[font-7-stroke]' => array( 'hide' ),
					),
					'fields'        => array(
						'icon'      => array(
							"type"        => "icon",
							"class"       => "",
							"label"       => __( "Select Icon:", "thim" ),
							"description" => __( "Select the icon from the list.", "thim" ),
							"class_name"  => 'font-awesome',
						),
						// Resize the icon
						'icon_size' => array(
							"type"        => "number",
							"class"       => "",
							"label"       => __( "Icon Font Size ", "thim" ),
							"suffix"      => "px",
							"default"     => "14",
							"description" => __( "Select the icon font size.", "thim" ),
							"class_name"  => 'font-awesome'
						),
					),
				),
				'font_image_group'    => array(
					'type'          => 'section',
					'label'         => __( 'Custom Image Icon', 'thim' ),
					'hide'          => true,
					'state_handler' => array(
						'icon_type_op[font-awesome]'  => array( 'hide' ),
						'icon_type_op[custom]'        => array( 'show' ),
						'icon_type_op[font-7-stroke]' => array( 'hide' ),
					),
					'fields'        => array(
						// Play with icon selector
						'icon_img' => array(
							"type"        => "media",
							"label"       => __( "Upload Image Icon:", "thim" ),
							"description" => __( "Upload the custom image icon.", "thim" ),
							"class_name"  => 'custom',
						),
					),
				),
				// // Resize the icon
				'width_icon_box'      => array(
					"type"    => "number",
					"class"   => "",
					"default" => "100",
					"label"   => __( "Width Box Icon", "thim" ),
					"suffix"  => "px",
				),
				'color_group'         => array(
					'type'   => 'section',
					'label'  => __( 'Color Options', 'thim' ),
					'hide'   => true,
					'fields' => array(
						// Customize Icon Color
						'icon_color'              => array(
							"type"        => "color",
							"class"       => "color-mini",
							"label"       => __( "Select Icon Color:", "thim" ),
							"description" => __( "Select the icon color.", "thim" ),
						),
						'icon_border_color'       => array(
							"type"        => "color",
							"label"       => __( "Icon Border Color:", "thim" ),
							"description" => __( "Select the color for icon border.", "thim" ),
							"class"       => "color-mini",
						),
						'icon_bg_color'           => array(
							"type"        => "color",
							"label"       => __( "Icon Background Color:", "thim" ),
							"description" => __( "Select the color for icon background.", "thim" ),
							"class"       => "color-mini",
						),
						'icon_hover_color'        => array(
							"type"        => "color",
							"label"       => __( "Hover Icon Color:", "thim" ),
							"description" => __( "Select the color hover for icon.", "thim" ),
							"class"       => "color-mini",
						),
						'icon_border_color_hover' => array(
							"type"        => "color",
							"label"       => __( "Hover Icon Border Color:", "thim" ),
							"description" => __( "Select the color hover for icon border.", "thim" ),
							"class"       => "color-mini",
						),
						// Give some background to icon
						'icon_bg_color_hover'     => array(
							"type"        => "color",
							"label"       => __( "Hover Icon Background Color:", "thim" ),
							"description" => __( "Select the color hover for icon background .", "thim" ),
							"class"       => "color-mini",
						),
					)
				),
				'layout_group'        => array(
					'type'   => 'section',
					'label'  => __( 'Layout Options', 'thim' ),
					'hide'   => true,
					'fields' => array(
						'box_icon_style' => array(
							"type"    => "select",
							"class"   => "",
							"label"   => __( "Icon Shape", "thim" ),
							"options" => array(
								""       => __( "None", "thim" ),
								"circle" => __( "Circle", "thim" ),
							),
							"std"     => "circle",
						),
						'pos'            => array(
							"type"        => "select",
							"class"       => "",
							"label"       => __( "Box Style:", "thim" ),
							"default"     => "top",
							"options"     => array(
								"left"  => "Icon at Left",
								"right" => "Icon at Right",
								"top"   => "Icon at Top"
							),
							"description" => __( "Select icon position. Icon box style will be changed according to the icon position.", "thim" ),
						),
						'text_align_sc'  => array(
							"type"    => "select",
							"class"   => "",
							"label"   => __( "Text Align Shortcode:", "thim" ),
							"options" => array(
								"text-left"   => "Text Left",
								"text-right"  => "Text Right",
								"text-center" => "Text Center"
							)
						),
					),
				),

				'widget_background'   => array(
					"type"          => "select",
					"label"         => __( "Widget Background", "thim" ),
					"default"       => "none",
					"options"       => array(
						"none"     => "None",
						"bg_video" => "Video Background",
					),
					'state_emitter' => array(
						'callback' => 'select',
						'args'     => array( 'bg_video_style' )
					)
				),
				'self_video'          => array(
					'type'          => 'media',
					'fallback'      => true,
					'label'         => __( 'Select video', 'thim' ),
					'description'   => __( "Select an uploaded video in mp4 format. Other formats, such as webm and ogv will work in some browsers. You can use an online service such as <a href='http://video.online-convert.com/convert-to-mp4' target='_blank'>online-convert.com</a> to convert your videos to mp4.", "thim" ),
					'default'       => '',
					'library'       => 'video',
					'state_handler' => array(
						'bg_video_style[bg_video]' => array( 'show' ),
						'bg_video_style[none]'     => array( 'hide' ),
					)
				),
				'self_poster'         => array(
					'type'          => 'media',
					'label'         => __( 'Select cover image', 'thim' ),
					'default'       => '',
					'library'       => 'image',
					'state_handler' => array(
						'bg_video_style[bg_video]' => array( 'show' ),
						'bg_video_style[none]'     => array( 'hide' ),
					)
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
				)
			),
			TP_THEME_DIR . 'inc/widgets/icon-box/'
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

	function update($new_instance, $old_instance){
		$instance = parent::update($new_instance, $old_instance);
		//WMPL
		/**
		 * register strings for translation
		 */
		if( function_exists('wpml_register_single_string') )
		{
			do_action( 'wpml_register_single_string', 'Widgets', $this->get_field_id('title') , $instance['title_group']['title'] );
			do_action( 'wpml_register_single_string', 'Widgets', $this->get_field_id('sub-title') , $instance['sub-title'] );
			do_action( 'wpml_register_single_string', 'Widgets', $this->get_field_id('content') , $instance['desc_group']['content'] );
		}
		elseif( function_exists ( 'icl_register_string' ) )
		{
			icl_register_string( 'Widgets', $this->get_field_id('title') , $instance['title_group']['title'] );
			icl_register_string( 'Widgets', $this->get_field_id('sub-title') , $instance['sub-title'] );
			icl_register_string( 'Widgets', $this->get_field_id('content') , $instance['desc_group']['content'] );
		}
		//\WMPL
		return $instance;
	}
}

function icon_box_register_widget() {
	register_widget( 'Icon_Box_Widget' );
}

add_action( 'widgets_init', 'icon_box_register_widget' );
function icon_box_update_option(){
	if ( isset($_POST['delete_widget']) && $_POST['delete_widget'] ) {
		// Delete the settings for this instance of the widget
		if ( isset( $_POST['the-widget-id'] ) ) {
			$del_id = $_POST['the-widget-id'];
			icl_unregister_string ( 'Widgets', $del_id.'-title' );
			icl_unregister_string ( 'Widgets', $del_id.'-sub-title' );
			icl_unregister_string ( 'Widgets', $del_id.'-content' );
		}
	}
}
add_action('updated_option','icon_box_update_option');