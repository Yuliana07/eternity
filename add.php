<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style>
		html{
			height:100%;

		}
		body{
			height:100%;
			background: rgb(2,0,36);
			background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(9,9,121,1) 35%, rgba(0,212,255,1) 100%);
		}
		
		.title{
			font-family:Arial;
			font-size:90px
		}
	</style>
</head>
<body class="text-light bg-dark" style="background-attachment:fixed">
	<?php 
	$connection_to_database = mysqli_connect('localhost', 'j75231108','yuliana7', 'j75231108');

	$results = mysqli_query($connection_to_database, "SELECT * FROM projects");

?>	
<div class="col-12 py-3">
		<div class="col-2 text-left pt-3">
			<a href="add.php" class="text-light"> Добавить расписание <img src="add.png" alt=""> </a>
		</div>
</div>
<div class="col-12" style='overflow:hidden'>
		<div class="col-6 mx-auto">
				<form method="GET" action="insertProject.php" class="text-center">
									<input type="text" name="title" placeholder="День" class="form-control mt-2">
									<input type="text" name="goal" placeholder="1 пара" class="form-control mt-2">
									<input type="text" name="donated" placeholder="2 пара" class="form-control mt-2">
									<button class="btn btn-success mt-2">Добавить расписание</button>	
				</form>
		</div>я
</div>

</body>
</html>