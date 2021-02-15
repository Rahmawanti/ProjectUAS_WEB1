<?php
require_once "koneksi.php";
$id = $_POST["id"];
$username = $_POST["username"];
$email = $_POST["email"];
$password = $_POST["password"];

$q = $database_connection->prepare("UPDATE `user` SET `username` = ?,
`email` = ?, `password` = ? WHERE `user`.`id` = ?");
$q->execute([$username, $email, $password, $id]);
header("Location: ../view3.php");
