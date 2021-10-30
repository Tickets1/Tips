<?php
session_start();
require_once "connection.php";

$login = $_POST['login'];
$password = $_POST['password'];

$query = "SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$password'";
$check_user = mysqli_query($connect, $query);// or die (mysqli_error($connect));
if (mysqli_num_rows($check_user)>0){
    $user = mysqli_fetch_assoc($check_user);
    $_SESSION['user'] = [
        "id" => $user['id_user'],
        "first_name" => $user['first_name'],
        "last_name" => $user['last_name'],
        "login" => $user['login'],
        "email" => $user['email']
    ];
    header('Location: index.php');
} else {
    $_SESSION['message'] = "Не верный логин или пароль";
    header('Location: authorization.php');
}
?>















?>
