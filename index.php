<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SESC</title>
    <link rel="stylesheet" href="assets/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;300;400;500;700&display=swap" rel="stylesheet">
</head>
<body id="body__dash">
    <div class="d-flex">
        <div class="dash__header">
            <div class="dash__header__inner">
                <div class="dash__header__logo">
                    <img class="dash__logo" src="img/logo.png" alt="">
                    <a class="dash__logo__test" href="#">SESC</a>
                </div>
                <div class="nav">
                    <ul class="nav__link">
                        <li><a href=""><img src="img/iconly.png" alt=""> Главная</a></li>
                        <li><a href=""><img src="img/chart.png" alt=""> Рейтинг</a></li>
                        <li><a href=""><img src="img/calendar.png" alt=""> Расписание</a></li>
                        <li><a href=""><img src="img/graph.png" alt=""> Журнал</a></li>
                        <li><a href=""><img src="img/info.png" alt=""> Справочник</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="block">
            <div class="head2">
                <div class="head2__header">
                    <div class="head2__title">
                        <h1>Николай Скрябин</h1>
                    </div>
                    <div class="head2__img">
                        <!-- <img src="img/nefu.png" alt=""> -->
                    </div>
                </div>
            </div>
    
            <div class="dashmain">
                <div class="dashmain__title">
                    <h1>Расписаниие уроков</h1>
                    <a href=""></a>
                </div>
                <table class="dashmain__table" style="display: block !important;">
                                <?php 
            	$connection_to_database = mysqli_connect('localhost', 'j75231108','yuliana7', 'j75231108');
            
            	$results = mysqli_query($connection_to_database, "SELECT * FROM projects");
            
            	?>	
            <div class="col-12 py-3">
            		<div class="col-2 text-left pt-3">
            			<a href="add.php" style="text-decoration: none;" class="text-light"> Добавить расписание <img src="add.png" alt=""> </a>
            		</div>
            	</div>
            </div>
            <div class="col-12" style='overflow:hidden'>
            	<div class="mt-2 flex-wrap">
            
            		<?php 
            			for($i = 0; $i < mysqli_num_rows($results); $i++) {
            				$project = mysqli_fetch_assoc($results);
            		?>
            		<!--карточка проекта-->
            		<div style="margin-top: 20px;" class="col-3 p-3 text-dark mt-2" >
            			<div class="col-12 bg-light rounded p-3" >
            				<div>
            					<h3><?php echo $project['title']; ?></h3>
            					<p><?php echo $project['text']; ?></p>
            					<p> <span class="fw-bold"> 1 пара: </span><?php echo $project['goal']; ?></p>
            					<p><span class="fw-bold"> 2 пара: </span><?php echo $project['donated']; ?></p>
            					<div class="mt-2 d-flex">
            						<form action="deleteProject.php" method="GET">
            								<input type="" name="id" value="<?php echo $project['id']; ?>" style="display: none;">
            								<button class="btn"><img src="delete_icon.png" alt=""></button>
            						</form>
            						<button class="btn updateBtn"><img src="edit.png" alt=""></button>	
            						<form method="GET" action="updateProject.php" class="text-center updateForm" style="display: none;">
            									<input type="text" name="id" placeholder="id" class="form-control mt-2" value="<?php echo $project['id']; ?>" style="display: none;">
            									<input type="text" name="title" placeholder="День" class="form-control mt-2" value="<?php echo $project['title']; ?>">
            									<input type="text" name="goal" placeholder="1 пара" class="form-control mt-2" value="<?php echo $project['goal']; ?>">
            									<input type="text" name="donated" placeholder="2 пара" class="form-control mt-2" value="<?php echo $project['donated']; ?>">
            									<button class="btn btn-success mt-2">Сохранить изменения</button>	
            						</form>
            							
            					</div>		
            				</div>
            			</div>
            		</div>	
            		<?php 
            			}
            		?>
                	
            	</div>
            </div>
                 </table>
                </div>
            </div>
        </div>
    </div>



</body>
</html>

<script type="text/javascript">
	let btnUpdate = document.querySelectorAll(".updateBtn");
	let form = document.querySelectorAll(".updateForm");

	for(let i = 0; i < btnUpdate.length; i++) {
		btnUpdate[i].onclick = function() {
			form[i].style.display = "block";
		}
	}
</script>