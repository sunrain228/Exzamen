<?php 

require_once 'connect.php';
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Авторизация</title>
	<link rel="stylesheet" href="main.css">
	<script type='text/javascript' src='jQuery\jquery-3.6.0.min.js'></script>
</head>
<body>
	<form action="singin.php" method="POST">
		<label>Авторизация</label>
		<input type="email" name="email" placeholder="Введите свою почту" required>
		<input type="password" name="password" placeholder="Введите свой пароль" required> <br><br>
		<button type="submit" >Войти</button>
		<p>
             <a href="registracia.php">Зарегистрироваться</a>
        </p>
	</form>
</body>
</html>