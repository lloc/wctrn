<?php

/**
 * With context
 */
$title = _x( 'Hello, dear user!', 'With Context', 'wctrn' );
echo '<h1>', $title, '<h1>';

?>
	<h1><?php _ex( 'Hello, dear user!', 'With Context', 'wctrn' ); ?></h1>
<?php

$stars = 1;
printf( _nx( '%d star', '%d stars', $stars, 'With Context', 'wctrn' ), $stars );
// Output => 1 star
