<?php 

$posts = get_my("users", $conn);
$data = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$fullName = $_POST['fullName'];
	query("INSERT INTO users(fullName) VALUES(:fullName)", ['fullName' => $fullName], $conn);
	$data['message'] = 'Üstünlik';
	if ($data) extract($data);
}

require 'views/pages/reg/reg.view.php';
