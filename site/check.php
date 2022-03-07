<?php

$login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
$pass = filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING);

if(mb_strlen($login) < 5 || mb_strlen($login) > 50){
	echo "Недопустимая длина логина";
	exit();
}
else if(mb_strlen($pass) < 5 || mb_strlen($pass) > 50){
	echo "Недопустимая длина имени.";
	exit();
}



$mysql = new mysqli('localhost', 'root', '', 'register_bd_new');

$result1 = $mysql->query("SELECT * FROM `users` WHERE `LOGIN` = '$login'");
$user1 = $result1->fetch_assoc();

if(!empty($user1)){
	echo "Данный логин уже используется!";
	exit();
}
$pass = md5($pass."ftyreyrwisrte");

$res = $mysql->query("INSERT users(PASS, LOGIN) 
VALUES ('" . $pass . "', '" . $login . "')");

header('Location: index.php');
exit();

