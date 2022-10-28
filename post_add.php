<?php 
	session_start();

	$uploaded_file_path = "img/" . basename($_FILES['post_mat_img']['name']);
	$source_file = $_FILES['post_mat_img']['tmp_name']; 
	$upload = move_uploaded_file($source_file, $uploaded_file_path);

	$con = mysqli_connect('localhost', 'j75231108','yuliana7', 'j75231108');
	$query_text = "INSERT INTO posts_mat (text, image, teacher_id) VALUES ('{$_POST['post_mat_text']}', '{$uploaded_file_path}', '{$_SESSION['teacher_id']}')";
	$query = mysqli_query($con, $query_text);

	header("Location: index.php");	
?>