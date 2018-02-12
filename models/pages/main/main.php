<?php 

$posts = get_my("users", $conn);

if (is_array($posts) || is_object($posts)) {
	foreach ($posts as $post) {	
	    $sumOf = $post['dayOne']+$post['dayTwo']+$post['dayThree']+$post['dayFour']+$post['dayFive']+$post['daySix']+$post['daySeven']; 
	    $id = $post['id'];

	   query("UPDATE users SET sum = :sum WHERE id = :id", ['sum'	=> $sumOf, 'id' => $id], $conn );
	}
}

$myPosts = getBigToSmall("users", "sum", $conn);
$num = 1;
require 'views/pages/main/main.view.php';