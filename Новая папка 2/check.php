<?php
$login = filter_var(trim($_POST['login']),
FILTER_SANITIZE_STRING);
$name = filter_var(trim($_POST['name']),
FILTER_SANITIZE_STRING);
$pass = filter_var(trim($_POST['email']),
FILTER_SANITIZE_STRING);
$pass = filter_var(trim($_POST['pass']),
FILTER_SANITIZE_STRING);

if(mb_strlen($login) < 4 | mb_strlen($login) > 40) {
  echo "Недопустимая длина логина";
  exit();
} else if(mb_strlen($name) < 3 || mb_strlen($name) > 50) {
  echo "Недопустимая длина фамилии";
    exit();
      exit();
} else if(mb_strlen($pass) < 2 || mb_strlen($pass) > 10) {
  echo "Недопустимая длина пороля";
    exit();
}

$pass = md5($pass."ghjsfkld2345");

$mysql = new mysqli('localhost', 'root', 'root', 'register-bd');
$mysql->query("INSERT INTO `users` (`login`, `pass`, `name`)
VALUES('$login', '$pass', '$name')");

$mysql->close();

header('Locations: /');



  exit();


 ?>
