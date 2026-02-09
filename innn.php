<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Example</title>
</head>
<body>

<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
  Name: <input type="text" name="fname">
  <input type="submit" value="Submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['fname']); // Sanitize input
    if (empty($name)) {
        echo "<p style='color:red;'>Name is empty</p>";
    } else {
        echo "<p>Hello, " . $name . "!</p>";
    }
}
?>

</body>
</html>
