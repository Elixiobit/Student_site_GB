<!Doctype html>
<html>
<head>
	<meta charset="utf-8"> 
	<title>Личный сайт студента GeekBrains</title>
	<link rel="stylesheet" href="style.css">
	
	<script>
		var answer = parseInt(Math.random() * 100);
		
		function hide(id){
			document.getElementById(id).style.display = "none";
		}

		function antiHide(id){
			document.getElementById(id).style.display = "";
		}

		function readInt(userAnswer){
			return +document.getElementById(userAnswer).value;
			}

		function alluser(numberUser) {
			if(numberUser == "user1"){
				var user1 = ("<u>Первый игрок</u><br>");
				return user1;
			} else{
				var user2 = ("<u>Второй игрок</u><br>");
				return user2;
			} 
		}

		function write(info, text){
			document.getElementById(info).innerHTML = text;
		}

		function guess(comAnswer, user, button, otherButton){
			antiHide(otherButton);
			var numberUser = alluser(user);
			var userAnswer = readInt(comAnswer);
			if(userAnswer == answer){
				write(user, numberUser + "<b>Поздравляю, вы угадали!</b>");
				hide(button);
				hide(otherButton);
			} else if(userAnswer > answer){
				write(user, numberUser + "Вы ввели слишком большое число.");
				hide(button);
			} else if(userAnswer < answer){
				write(user, numberUser + "Вы ввели слишком маленькое число.");
				hide(button);
			}
		}		
	</script>

</head>
<body>
<div class="content">
	<?php
		include "menu.php";
	?>
<div class="contentWrap">
	<div class="content">
		<div class="center">
			
			<h1>Угадайка на двоих</h1>
			
			<div class="box">
				<h2><i>Угадайте число от 0 до 100</i></h2>
				<p id="user1">Первый игрок:</p>
				<input type="text" id="answer1">
				<br>
				<a href="#" onclick='guess("answer1", "user1", "button1", "button2");' id="button1">Ответить</a>
				<br>

				<div class="box_p">
					<p id="user2">Второй игрок:</p>
				</div>
				<input type="text" id="answer2_1">
				<br>
				<a href="#" onclick='guess("answer2_1", "user2", "button2","button1");' id="button2">Ответить</a>

			</div>
		</div>
	</div>
</div>

<div class="footer">
	Copyright &copy; Ilya
</div>

</body>
</html>