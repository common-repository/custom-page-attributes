<?php
/*
Plugin Name: Custom Page Attributes
Description: Customize the parent page dropdown in the "Page Attributes" meta box to display only pages that have no parent.
Version: 1.0
Author: Mahmoud Mustafa
Author Email: mahmoudxmostafa@gmail.com
Author URI: https://www.linkedin.com/in/theseolad/
License: GPL v2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
*/

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

function cpad_args($args, $post) {
    $args['depth'] = 1; // Set depth to 1 to only show top-level pages
    $args['child_of'] = 0; // Set child_of to 0 to only show pages with no parent

    return $args;
}

add_filter('page_attributes_dropdown_pages_args', 'cpad_args', 10, 2);
