<?php
if ( isset($_GET['action']) && !empty($_GET['action']) && $_GET['action'] == 'get_time' ) {
	header('Content-type: application/json');
	echo json_encode (
		array (
			'year' => date('Y'),
				'month' => date('m'),
				'day' => date('d'),
				'hour' => date('h'),
				'minute' => date('i'),
				'second' => date('s')
			)
		);
	}
else {
	header('HTTP/1.1 404 Not Found');
	echo '<h1>404 Not Found</h1>';
	echo '<p>The page that you have requested could not be found.</p>';
}
