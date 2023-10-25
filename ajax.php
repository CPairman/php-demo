<?php
/*
 * This file handles the ajax request. The file responds to the request simply
 * by echoing the response. The responses are encoded in JSON to make them
 * easier to parse in the JavaScript
 */

// Here I've declared a constant, with the JSON encoded response for failure.
// Note that constants don't begin with a dollar sign.
const FAILURE_RESPONSE = '{ "success": false }';

// If nothing has been sent, then echo the failure response and exit.
if ( ! isset( $_POST['the_text'] ) ) {
    echo FAILURE_RESPONSE;
    exit;
}

// Here we're escaping the text again to prevent injection attacks.
$text = htmlspecialchars( $_POST['the_text'] );

/*
 * In PHP, arrays can be either associative or non-associative. A non-associative
 * array is just a traditional array, while an associative one is more like a
 * map, with each item having a string key to access it by. You can also have a
 * mixed array with some values having keys, and some not.
 *
 * The array below is associative.
 */
$success_response = array(
    'success' => true,
    'text'    => "Here is your text: $text",
);

// json_encode converts the array to JSON, then we echo it
echo json_encode( $success_response );
