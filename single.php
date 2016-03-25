<?php

/**
* Regular functions
*/
$title = __( 'Hello, dear user!', 'wctrn' );
echo '<h1>', $title, '<h1>';

?>
<h1><?php _e( 'Hello, dear user!', 'wctrn' ); ?></h1>
<?php

$stars = 3;
printf( _n( '%d star', '%d stars', $stars, 'wctrn' ), $stars );
// Output => 3 stars
