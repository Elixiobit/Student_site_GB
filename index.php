<!Doctype html>
<html>
<head>
	<meta charset="utf-8"> 
	<title>Личный сайт студента GeekBrains</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="content">

<?php
    include "menu.php";
?>
	<h1>Личный сайт студента GeekBrains</h1>
	<div class="center"> 
	<img src="img/Bear.jpg">
		<div class="box_text">
			<p><b>Добрый день</b>. Меня зовут <i> Илья</i>. Я совсем недавно начал программиромать, однако уже написал свой личный сайт. И чем дальше тем интересней</p>
			  
			 <p>В этом мне помог IT-портал <a href="https://geekbrains.ru">GeekBrains</a></p>
	 
			 <p> На этом сайте вы сможете сыграть в несколько игр которые я написал: <br>
			<a href="puzzle.php">Загадки</a>
			<a href="guess.php">Угадайка</a>
			<a href="guessTwo.php">Угадайка на двоих</a>
			<a href="genPassword.php">Генератор паролей</a>
			</p>
		</div>	
	</div>	
</div>

<div class="footer">
	Copyright &copy; <?php echo date("Y");?> Ilya
</div>

</body>
</html>