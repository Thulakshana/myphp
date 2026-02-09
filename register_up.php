<?php
include_once 'db.php';

$id      = $_POST['id'];
$name    = $_POST['namee'];
$address = $_POST['address'];
$tel     = $_POST['tel'];

/* UPDATE query with WHERE id */
$stmt = mysqli_prepare($connect,
    "UPDATE users 
     SET name = ?, address = ?, tel = ?
     WHERE id = ?");

/* Bind parameters */
mysqli_stmt_bind_param($stmt, "sssi", $name, $address, $tel, $id);

/* Execute */
mysqli_stmt_execute($stmt);

/* Optional: check affected rows */
if (mysqli_stmt_affected_rows($stmt) > 0) {
    header("Location: register.php?update=success");
} else {
    header("Location: register.php?update=notfound");
}

exit();
?>
