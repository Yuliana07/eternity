<?php 
    $connection_to_database = mysqli_connect('localhost', 'j75231108','yuliana7', 'j75231108');
    $delete = "DELETE FROM projects WHERE id = {$_GET['id']} ";
    $query = mysqli_query($connection_to_database, $delete);
    header("Location: index.php");
    exit;
?>