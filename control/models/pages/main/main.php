<?php 

$posts = get_my("users", $conn);
$data = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$day = $_POST['day'];
	$fullName = $_POST['fullName'];
	$book_n = $_POST['book_n'];
	$id = $_POST['id'];

	// Get Prev Day Of That Day
	switch ($day) {
		case 'dayThree':
			$prev = 'dayTwo';
			break;
		case 'dayFour':
			$prev = 'dayThree';
			break;
		case 'dayFive':
			$prev = 'dayFour';
			break;
		case 'daySix':
			$prev = 'dayFive';
			break;
		case 'daySeven':
			$prev = 'daySix';
			break;
		default:
			$prev = 'dayOne';
			break;
	}


	$sum = 0;
	foreach ($posts as $post) {
		$sum += $post['dayOne'];
		$sum += $post['dayTwo'];
		$sum += $post['dayThree'];
		$sum += $post['dayFour'];
		$sum += $post['dayFive'];
		$sum += $post['daySix'];
		$sum += $post['daySeven'];
		$prevDay = $post["$prev"];
	}
	$status = ($prevDay < $book_n) ? 'green' : 'red' ;
	query("UPDATE users SET $day = :day, sum = :sum, status = :status, prev = :prev WHERE id = :id", [
		'day'	=> $book_n,
		'sum'	=> $sum,
		'prev'	=> $prevDay,
		'status'=> $status,
		'id'	=> $id
	], $conn);
	$data['message'] = 'Üstinlik';
	if ($data) {
		extract($data);
	}
}



require 'views/pages/main/main.view.php'; 