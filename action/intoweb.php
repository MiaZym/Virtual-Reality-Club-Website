<?php

$name = $_POST['name'] ;
$password = filter_var(trim($_POST['password']), FILTER_SANITIZE_STRING);


$password = md5($password."sdrdthr1232");
$mysql = new mysqli('localhost', 'root', '', 'registervr-bd');

$result = $mysql->query("SELECT * FROM `users` WHERE `name` = '$name' AND `password` = '$password'");
$user = $result->fetch_assoc();
if(count($user) == 0) {
echo "No such user found";
exit();
}
setcookie('user', $user['name'], time() + 3600, "/");
$mysql->close();

header('Location: /');

?>
