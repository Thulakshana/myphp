<?php
include_once 'db.php';

$id = $_POST['id'];   // id to delete

/* DELETE query */
$stmt = mysqli_prepare($connect,
    "DELETE FROM users WHERE id = ?");

/* Bind parameter (i = integer) */
mysqli_stmt_bind_param($stmt, "i", $id);

/* Execute */
mysqli_stmt_execute($stmt);

/* Check result */
if (mysqli_stmt_affected_rows($stmt) > 0) {
    header("Location: register.php?delete=success");
} else {
    header("Location: register.php?delete=notfound");
}

exit();
?>
