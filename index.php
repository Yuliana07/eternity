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
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
    <div class="d-flex">
        <div class="dash__header">
            <div class="dash__header__inner">
                <div class="dash__header__logo">
                    <img class="dash__logo" src="img/logo.png" alt="">
                    <a class="dash__logo__test" href="#">SESC</a>
                </div>
                <div class="nav">
                    <ul class="nav__link">
                        <li><a href="http://j75231108.myjino.ru/index.php"><img src="img/iconly.png" alt=""> Главная</a></li>
                        <li><a href="http://j75231108.myjino.ru/redact/reiting.php"><img src="img/chart.png" alt=""> Рейтинг</a></li>
                        <li><a href="http://j75231108.myjino.ru/less22/index.php"><img src="img/calendar.png" alt=""> Расписание</a></li>
                        <li><a href="http://j75231108.myjino.ru/redact/table.php"><img src="img/graph.png" alt=""> Журнал</a></li>
                        <li><a href="http://j75231108.myjino.ru/predmet.php"><img src="img/info.png" alt=""> Справочник</a></li>
                    </ul>
                </div>
            </div>
        </div>
        
        <div class="block">
            <div class="head2">
                <div class="head2__header">
                    <div class="head2__title">
                    <?php 
                        	session_start();
                        	$con = mysqli_connect('localhost', 'j75231108','yuliana7', 'j75231108');
                        
                        	if(isset($_SESSION['teacher_id'])) {
                        		$select = "SELECT * FROM teachers WHERE id = {$_SESSION['teacher_id']}";
                        		$query = mysqli_query($con, $select);
                        		$select_teacher = mysqli_fetch_assoc($query);
                        
                        		echo $select_teacher['login'];
                        		echo "<a href='http://j75231108.myjino.ru/add_post.php'> Создать пост </a>";
                        		echo "<a href='logout.php'> Выйти</a>";
                        	} else {
                    ?>
                        <a style="text-decoration: none; color: #FFF;" href="signup.php" >Регистрация</a>
                        <a style="text-decoration: none; color: #FFF;" href="login.php">Войти</a>


                    <?php 
                    	}
                    ?>
                    </div>
                    <a href="http://j75231108.myjino.ru/lk/lk.php" class="head2__img">
                        <img src="<?php echo $select_teacher['photo']; ?>" style="width: initial; height: 100%; border-radius: 150px;" alt="">
                    </a>
                </div>
            </div>
            <?php 
					$get_all_posts_query = "SELECT * FROM posts_mat INNER JOIN teachers ON posts_mat.teacher_id = teachers.id ORDER BY posts_mat.id DESC";
					$posts_mat_results = mysqli_query($con, $get_all_posts_query); 
				?>
            <?php 
				for($i = 0; $i < mysqli_num_rows($posts_mat_results); $i++) {
						$post_mat = mysqli_fetch_assoc($posts_mat_results);
			?>	
        <div class="dashmain">
            <div class="dashmain__post">
                <div style="display: flex; align-items: center;" class="dashmain__title">
                    <div class="dashmain__avatar" style="height: 50px; width: 50px; overflow: hidden; border-radius: 100px;">
                        <img style="width: initial; height: 100%;" src="<?php echo $post_mat['photo']; ?>" alt="">
                    </div>
                    <h1 style="margin-bottom: 0; margin-left: 10px;"><?php echo $post_mat['login']; ?></h1>
                </div>
                <hr>
                <div class="dashmain__desc">
                    <p><?php echo $post_mat['text'] ?></p>
                </div>
                <div class="dashmain__img">
                    <img src="<?php echo $post_mat['image'] ?>" alt="">
                </div>
            </div>
        </div>
        <?php } ?> 
    </div>



</body>
</html>