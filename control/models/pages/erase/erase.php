<?php 

$posts = get_my("users", $conn);
$data = [];

if (isset($_POST['submit'])) {
	query("DELETE FROM users", [], $conn);
	
	$data['message'] = 'Üstünlik';
	if($data) extract($data);
}

require 'views/pages/erase/erase.view.php';
