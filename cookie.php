<?php
// Set the cookie
$cookie_name = "username";
$cookie_value = "Alex Porter";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // expires in 30 days

// Optional: check if cookie is already available
$cookie_set = isset($_COOKIE[$cookie_name]);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Cookie Example</title>
</head>
<body>

<?php
if ($cookie_set) {
    echo "Cookie '" . htmlspecialchars($cookie_name) . "' is set!<br>";
    echo "Value is: " . htmlspecialchars($_COOKIE[$cookie_name]);
} else {
    echo "Cookie named '" . htmlspecialchars($cookie_name) . "' is not set yet.<br>";
    echo "It will be available on the next page load!";
}
?>

</body>
</html>
