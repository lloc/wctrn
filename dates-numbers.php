<?php

/**
* Dates
*/
$timestamp = mktime( 12, 5, 0, 4, 1, 2016 );

// Output: Something like 02/04/2014
// - depends on your settings in the options
// - today ... the day of this speech ;)
echo date_i18n( get_option( 'date_format' ) );

// Output: Something like 01/04/2016
echo date_i18n( get_option( 'date_format' ), $timestamp );

/**
 * Numbers
 */
$number = 1234;

echo number_format_i18n( $number ); // Output: Something like 1.234
echo number_format_i18n( $number, 2 ); // Output: Something like 1.234,00
