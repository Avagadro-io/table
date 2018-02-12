<?php 

$posts = get_my("users", $conn);
$data = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$day = $_POST['day'];
	$book_n = $_POST['book_n'];
	$id = $_POST['id'];


	query("UPDATE users SET $day = :day WHERE id = :id", [
		'day'	=> $book_n,
		'id'	=> $id
	], $conn);
	
	$data['message'] = 'Üstinlik';
	if ($data) extract($data);
}



require 'views/pages/main/main.view.php'; 