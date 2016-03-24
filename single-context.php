<?php

/**
 * With context
 */

$title = _x( 'Hello, dear user!', 'With Context', 'wctrn' );

_ex( 'Howdy!', 'With Context', 'wctrn' );

$stars = 1;
printf( _nx( '%d star', '%d stars', $stars, 'With Context', 'wctrn' ), $stars );
// Output => 1 star
