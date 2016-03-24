<?php

/**
* Regular functions
*/

$title = __( 'Hello, dear user!', 'wctrn' );

_e( 'Howdy pal!', 'wctrn' );

$stars = 3;
printf( _n( '%d star', '%d stars', $stars, 'wctrn' ), $stars );
// Output => 3 stars
