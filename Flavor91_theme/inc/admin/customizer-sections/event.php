<?php
$url = TP_THEME_URI . 'images/admin/layout/';
$event = $titan->createThimCustomizerSection( array(
	'name'     => esc_html__('Event', 'thim'),
	'position' => 7,
	'id'       => 'event',
) );

$event->addSubSection( array(
	'name'     => esc_html__('Settings', 'thim'),
	'id'       => 'event_archive',
	'position' => 1,
) );


$event->createOption( array(
	'name'    => esc_html__('Events Layout','thim'),
	'id'      => 'event_layout',
	'type'    => 'radio-image',
	'options' => array(
		'full-content'  => $url . 'body-full.png',
		'sidebar-left'  => $url . 'sidebar-left.png',
		'sidebar-right' => $url . 'sidebar-right.png'
	),
	'default' => 'sidebar-right'
) );

$event->createOption( array(
	'name'        => esc_html__('Top Image','thim'),
	'id'          => 'event_top_image',
	'type'        => 'upload',
	'desc'        => esc_html__('Enter URL or Upload an top image file for header','thim'),
	'livepreview' => '',
	'default' => get_template_directory_uri( 'template_directory' ) . "/images/page_top_image.jpg",
) );

$event->createOption( array(
	'name'    => 'Hide Title',
	'id'      => 'event_hide_title',
	'type'    => 'checkbox',
	"desc"    => "Check this box to hide/unhide title",
	'default' => false,
) );

$event->createOption( array(
	'name'    => 'Custom Title',
	'id'      => 'event_custom_title',
	'type'    => 'text',
	'default' => '',
) );
$event->createOption( array(
	'name'    => __('sub Title','thim'),
	'id'      => 'event_sub_title',
	'type'    => 'text',
	'default' => '',
) );

$event->createOption( array(
	'name'    => esc_html__('Column', 'thim'),
	'id'      => 'event_column',
	'type'    => 'select',
	'options' => array(
		'2' => '2',
		'3' => '3',
		'4' => '4',
		'5' => '5',
		'6' => '6',
	),
	'default' => '3'
) );

$event->createOption( array(
	'name'    => esc_html__('Number of Events per Page', 'thim'),
	'id'      => 'event_per_page',
	'type'    => 'number',
	'desc'    => esc_html__('Insert the number of posts to display per page.', 'thim'),
	'default' => '9',
	'max'     => '1000',
	'min'	  => '1',
) );

$event->createOption( array(
	'name'    => esc_html__( 'Facebook', 'thim' ),
	'id'      => 'event_sharing_facebook',
	'type'    => 'checkbox',
	"desc"    => esc_html__("Show the facebook sharing option in event.",'thim' ),
	'default' => true,
) );

$event->createOption( array(
	'name'    => esc_html__( 'Twitter', 'thim' ),
	'id'      => 'event_sharing_twitter',
	'type'    => 'checkbox',
	"desc"    => esc_html__("Show the twitter sharing option in event.",'thim' ),
	'default' => true,
) );


$event->createOption( array(
	'name'    => esc_html__( 'Google Plus', 'thim' ),
	'id'      => 'event_sharing_google',
	'type'    => 'checkbox',
	"desc"    => esc_html__("Show the g+ sharing option in event.",'thim' ),
	'default' => true,
) );

$event->createOption( array(
	'name'    => esc_html__( 'Pinterest', 'thim' ),
	'id'      => 'event_sharing_pinterest',
	'type'    => 'checkbox',
	"desc"    => esc_html__("Show the pinterest sharing option in event.",'thim' ),
	'default' => true,
) );

$event->createOption( array(
	'name'    => esc_html__( 'Fancy', 'thim' ),
	'id'      => 'event_sharing_fancy',
	'type'    => 'checkbox',
	"desc"    => esc_html__("Show the Fancy sharing option in event.",'thim' ),
	'default' => true,
) );