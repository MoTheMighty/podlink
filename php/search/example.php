#swiftype-php

A PHP client for [Swiftype](http://swiftype.com), a search and autocomplete API for developers.

##Example usage

<?php
<pre>require 'swiftype.php';

$client = new \Swiftype\SwiftypeClient('your@email.com', 'password', 'zToajV2tz8xMqYRcoAjM');

print_r($client->create_engine('library'));

print_r($client->create_document_type('library', 'books'));

print_r($client->create_document('library', 'books', array(
	'external_id' => '1',
	'fields' => array(
		array(
			'name' => 'title',
			'value' => 'The Art of Community',
			'type' => 'string'
		),
		array(
			'name' => 'author',
			'value' => 'Jono Bacon',
			'type' => 'enum'
		)
	)
)));

print_r($client->documents('library', 'books'));</pre>
?>