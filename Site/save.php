<?php

$name = htmlspecialchars($_POST["name"]);
$email = htmlspecialchars($_POST["email"]);
$tel = htmlspecialchars($_POST["tel"]);
$message = htmlspecialchars($_POST["message"]);

		$link = mysqli_connect('localhost', 'root', '', 'basename') or die('Cant connect: ');
		$query = "INSERT INTO `mysite` VALUES ('$name','$email','$tel','$message')";
		mysqli_query($link, $query) or die('Cant query: ');
		header("Location: file:index.html");
?>