<?php 

$posts = get_my("users", $conn);
$data = [];

if (isset($_POST['student_e'])) {
	$student = $_POST['student_list'];
	$id = $_POST['id'];

	query("DELETE FROM users where id = :id", ['id' => $id], $conn);
	$data['message'] = 'Üstünlik';
	if($data) extract($data);
}
// if (isset($_POST['full_w'])) {
	
// 	// query("DELETE FROM users() " , [], $conn);
	
// 	$data['message'] = 'Üstünlik';
// 	if($data) extract($data);
// }


require 'views/pages/erase/erase.view.php';
