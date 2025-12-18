<?php

	session_start();

	if ((isset($_SESSION['zalogowany'])) && ($_SESSION['zalogowany']==true)){
		header('Location: app.php');
		exit();
	}

?>

<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <link rel="stylesheet" href="style.css">
	<title>Sticky Friends</title>
</head>

<body>
<a href="./"><div class="logo"></div></a>
    <div class="login">
	<form action="zaloguj.php" method="post">
		<div class="loginUser"></div>
		<br /> <input placeholder="Login" type="text" name="login" class="loginLogin" /> <br />
		<br /> <input placeholder="Password" type="password" name="haslo" class="loginPass"/> <br /><br />
		<input type="submit" value="Zaloguj się" class="loginButton" /><br/><br/>
		
	</form>
	
	<?php
	if(isset($_SESSION['blad']))	echo $_SESSION['blad'];
?><br/>
<div class="loginToRegister">Nie masz konta? <a href="./rejestracja.php">Zarejestruj się</a></div>
</div>
</body>
</html>