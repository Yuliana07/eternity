<?php 
    $connection_to_database = mysqli_connect('localhost', 'j75231108','yuliana7', 'j75231108');
    $update = "UPDATE projects SET title = '{$_GET["title"]}', text = '{$_GET["text"]}', goal = '{$_GET["goal"]}', donated = '{$_GET["donated"]}', img = '{$_GET["img"]}' WHERE id = '{$_GET["id"]}'";
    $results = mysqli_query($connection_to_database, $update);
    header("Location: index.php");
    exit;
?>