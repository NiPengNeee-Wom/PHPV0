<html>
	<head>
		<style>
			body {background-color: grey;}
		</style>
		<meta charset="utf-8" />
		<title>Kari Npidh</title>
	</head>
	<body>
		<BR />
		<center><h1>Welcome to black market</h1>
			<p style="float:right">Identifiant: <input type="text" name="login" value="<?php
			if ($_SESSION['login'] !== false)
			echo $_SESSION['login'];
			?>">
			</p>
			<p style="float:right">Mot de passe: <input type="text" name="passwd" value="<?php
			if ($_SESSION['passwd'] !== false)
			echo $_SESSION['passwd'];
			?>"></p>
		</body>
	</html>

