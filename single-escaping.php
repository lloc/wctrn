<?php

/**
 * Escape output
 */

$descr = esc_attr__( 'Description', 'wctrn' );
$title = esc_html__( 'Title', 'wctrn' );

printf( '<h2 title="%s">%s</h2>', $descr, $title );

/* translators: Here is a message for you. */
esc_html_e( 'How are you?', 'wctrn' );

esc_html_x(
	'It is not in the stars to hold our destiny but in ourselves.',
	'William Shakespeare',
	'wctrn'
);
