<?php
/**
 * Template Name: Test
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package understrap
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();
$container = get_theme_mod( 'understrap_container_type' );


// pre define the allowed columns
$allowed_classnames = array(
    1 => 'col-lg-12',
    2 => 'col-lg-6',
    3 => 'col-lg-3',
    4 => 'col-lg-4',
    5 => 'col-lg-5',
);
// get the count on the repeater field
// mabye use get_sub_field() instead of get_field() if it's nested
$number_of_cols = count( get_field( 'repeater' ) );

// set a default classname
$classname_to_use = $allowed_classnames[1];

// check if the $number_of_cols exist in the predefined classnames
if ( array_key_exists( $number_of_cols , $allowed_classnames ) ) {
    // set the classname to be used
    $classname_to_use = $allowed_classnames[$number_of_cols];
}
?>
<div class="container">
    <div class="row">

        <?php
        while( has_sub_field( 'repeater' ) ) : ?>
            <div class="<?php echo esc_attr( $classname_to_use ); ?>">
                <?php the_sub_field( 'repeater_content' ); ?>
            </div>
        <?php endwhile; ?>

    </div>
</div>