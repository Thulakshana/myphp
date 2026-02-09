<?php
include_once 'db.php';

$id      = $_POST['id'];
$name    = $_POST['namee'];
$address = $_POST['address'];
$tel     = $_POST['tel'];

$stmt = mysqli_prepare($connect, 
    "INSERT INTO users (id, name, address, tel) VALUES (?, ?, ?, ?)");

mysqli_stmt_bind_param($stmt, "isss", $id, $name, $address, $tel); //prapare statement use
mysqli_stmt_execute($stmt);

header("Location:register.php?signup=success");
exit();
?>
