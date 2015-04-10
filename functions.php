<?php
add_filter('show_admin_bar', '__return_false');

function new_excerpt_more( $more ) {
	return ' <a class="read-more" href="'. get_permalink( get_the_ID() ) . '">' . __('Read More', 'Phased.io') . '</a>';
}
add_filter( 'excerpt_more', 'new_excerpt_more' );
?>