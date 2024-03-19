<?php

require_once 'connect.php';

$Familia = $_POST['familia'];
$Ima = $_POST['ima'];
$Otchestvo = $_POST['otchestvo'];
$Telefon = $_POST['telefon'];
$Email = $_POST['email'];
$Password = $_POST['password'];


mysqli_query($connect, query: "INSERT INTO `klient` (`ID`, `Familia`, `Ima`, `Otchestvo`, `Telefon`, `Email`, `Parol` ) VALUES (NULL, '$Familia', '$Ima', '$Otchestvo', '$Telefon', '$Email', '$Password')" );
header('Location: author.php');