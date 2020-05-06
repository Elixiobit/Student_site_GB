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

<div class="contentWrap">
	<div class="content">
		<div class="center">
			
			<h1>Игра в загадки</h1>
			
			<div class="box">
                <?php
                   if(isset($_GET['userAnswer1']) && isset($_GET['userAnswer2']) && isset($_GET['userAnswer3']) && isset($_GET['userAnswer4'])){ 
                        $userAnswer = $_GET["userAnswer1"];
                        $score = 0;
                        if($userAnswer == "Ель" || $userAnswer == "Елка" || $userAnswer == "елка" || $userAnswer == "ель"){
                            $score++;
                        }    
                        $userAnswer = $_GET["userAnswer2"];
                        if($userAnswer == "Лампочка" || $userAnswer == "лампочка"){
                            $score++;
                        }  
                        $userAnswer = $_GET["userAnswer3"];
                        if($userAnswer == "Лук" || $userAnswer == "лук" || $userAnswer == "Капуста" || $userAnswer == "капуста"){
                            $score++;
                        }  
                        $userAnswer = $_GET["userAnswer4"];
                        if($userAnswer == "Огурец" || $userAnswer == "огурец"){
                            $score++;
                        }  
                        echo "Правильных ответов: " . $score;
                }   
                        
                ?>

                <form method="GET">
                    <p>Зимой и летом одним цветом?</p>
                    <input type="text" name="userAnswer1">

                    <p>Висит груша нельзя скушать?</p>
                    <input type="text" name="userAnswer2">

                    <p>Сто одёжек и все без застёжек?</p>
                    <input type="text" name="userAnswer3">

                    <p>Без окон без дверей полна горница людей?</p>
                    <input type="text" name="userAnswer4">

                    <br>
                    <input type="submit" value="Ответить" name="">
                </form>
			</div>
		</div>
	</div>
</div>

<div class="footer">
	Copyright &copy;  Ilya
</div>

</body>
</html>