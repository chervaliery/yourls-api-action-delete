<?php
/*
Plugin Name: Custom API action (delete)
Plugin URI: http://yourls.org
Description: Define custom API action 'delete'
Version: 0.2
Author: Chervaliery
*/

// Define custom action "delete"
yourls_add_filter( 'api_action_delete', 'my_delete_function' );

// Actually delete
function my_delete_function() {
	$keyword = ( isset( $_REQUEST['keyword'] ) ? $_REQUEST['keyword'] : '' );

	if ($keyword) {
		return array(
			'statusCode' => 200,
			'message'    => 'success',
			'result' => yourls_delete_link_by_keyword( $keyword ),
		);
	} else {
		return array(
			'statusCode' => 404,
			'message'    => 'Keyword not found'
		);
	}
}
