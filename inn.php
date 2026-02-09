<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="get" action="">
  Name (GET): <input type="text" name="name">
  <input type="submit">
</form>

<form method="post" action="">
  Name (POST): <input type="text" name="name">
  <input type="submit">
</form>

<?php
if ($_GET) {
    echo "GET name: " . $_GET['name'] . "<br>";
}

if ($_POST) {
    echo "POST name: " . $_POST['name'] . "<br>";
}

if ($_REQUEST) {
    echo "REQUEST name: " . $_REQUEST['name'] . "<br>";
}
?>

</body>
</html>