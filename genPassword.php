<!Doctype html>
<html>
<head>
	<meta charset="utf-8"> 
	<title>Личный сайт студента GeekBrains</title>
	<link rel="stylesheet" href="style.css">
	
	<script>
		var word = "0123456789qwertyuiopasdfghjklzxcvbnm";
		
		function getRandomNumber(max){
			return Math.round(Math.random() * max);
		}
		function input(length) {
			return +document.getElementById(length).value;
		}

		function hide(id){
			document.getElementById(id).style.display = "none";
		}

		function write(info, text){
			document.getElementById(info).innerHTML = text;
		}

		function generateText(letters, lenght){
        var text = "";
        for(var i = 0; i < lenght; i++){
            var n = getRandomNumber(letters.length - 1);
            text = text + letters[n];
        }
        return text;
    }

		function genPassword() {
			var length = input("lenPass");
			var password = generateText(word, length);
			write("question", "Ваш пароль:<br>" + password);
			hide("button");
			hide("lenPass");
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
			
			<h1>Генератор случайных паролей</h1>
			
			<div class="box">
				<p id="question">Укажите длину желаемого пароля </p>
				<input type="text" id="lenPass">
				<br>
				<a href="#" onclick='genPassword();' id="button">Сгенерировать пароль</a>
				<br>

				
			</div>
		</div>
	</div>
</div>

<div class="footer">
	Copyright &copy; Ilya
</div>

</body>
</html>