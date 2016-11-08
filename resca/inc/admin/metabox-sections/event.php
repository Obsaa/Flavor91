<?php
$event = $titan->createMetaBox( array(
	'name'      => __( 'Event Options', 'thim' ),
	'id'        => 'event-options',
	'post_type' => array( 'post' ),
) );

$event->createOption( array(
	'name' => __( 'Use Page Event', 'thim' ),
	'id'   => 'use_event',
	'type' => 'checkbox',
	'desc' => ' '
) );

$event->createOption( array(
	'name'    => __( 'Desc', 'thim' ),
	'id'      => 'desc',
	'type'    => 'text',
	'default' => '',
) );

$event->createOption( array(
	'name'    => __( 'Start Date', 'thim' ),
	'id'      => 'start_date',
	'type'    => 'date',
	'desc'    => __( 'Choose a date', 'thim' ),
	'default' => ''
	
) );

$event->createOption( array(
	'name'    => __( 'End Date', 'thim' ),
	'id'      => 'end_date',
	'type'    => 'date',
	'desc'    => __( 'Choose a date', 'thim' ),
	'default' => '',
) );


