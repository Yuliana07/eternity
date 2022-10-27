<?php 
	$connection_to_database = mysqli_connect('localhost', 'j75231108','yuliana7', 'j75231108');
	$insert_query = "INSERT INTO projects (title, text, goal, donated, img) VALUES ('{$_GET['title']}', '{$_GET['text']}', '{$_GET['goal']}', '{$_GET['donated']}', '{$_GET['img']}')";
	$result_insert = mysqli_query($connection_to_database, $insert_query);
	header("Location: index.php");
	exit;
?>	