<?php

require_once 'connect.php';

$Email = $_POST['email'];
$Password = $_POST['password'];

$check_user = mysqli_query($connect, "SELECT * FROM `klient` WHERE `Email` = '$Email' AND `Parol` = '$Password'");

if (mysqli_num_rows($check_user) > 0) {

        header('Location: index.php');
}
else {
        echo "<script>alert('Неверный логин или пароль!');</script>";
    }
    ?>