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
                        <li><a href="http://j75231108.myjino.ru/redact/reiting.php"><img src="img/chart.png" alt=""> Рейтинг</a></li>
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
                    <?php 
                        	session_start();
                        	$con = mysqli_connect('localhost', 'j75231108','yuliana7', 'j75231108');
                        
                        	if(isset($_SESSION['teacher_id'])) {
                        		$select = "SELECT * FROM teachers WHERE id = {$_SESSION['teacher_id']}";
                        		$query = mysqli_query($con, $select);
                        		$select_teacher = mysqli_fetch_assoc($query);
                        
                        		echo $select_teacher['login'];
                        		echo "<a href='logout.php'> Выйти</a>";
                        	} else {
                    ?>
                        <a style="text-decoration: none; color: #FFF;" href="http://j75231108.myjino.ru/signup.php" >Регистрация</a>
                        <a style="text-decoration: none; color: #FFF;" href="login.php">Войти</a>


                    <?php 
                    	}
                    ?>
                    <a href="http://j75231108.myjino.ru/lk/lk.php" class="head2__img">
                        <img src="<?php echo $select_teacher['photo']; ?>" style="width: initial; height: 100%; border-radius: 150px;" alt="">
                    </a>
                </div>
            </div>
    
            <div class="dashmain">
                <form method="POST" action="post_add.php" enctype="multipart/form-data">
                    <p class="textposta__p">Текст поста:</p>
                    <input class="textposta" type="text" name="post_mat_text" placeholder="Текст поста">
                    <p class="textposta__p">Изображение поста:</p>
                    <input type="file" name="post_mat_img" placeholder="Загрузка картинки">
                    <button class="post__button">Добавить пост</button>
                </form>
            </div>
        </div>
    </div>


	

</body>
</html>