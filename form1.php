<?php
// Define variables and set to empty values
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";

// Function to sanitize input
function test_input($data) {
    $data = trim($data);               // remove spaces from both ends
    $data = stripslashes($data);       // remove backslashes
    $data = htmlspecialchars($data);   // convert special characters to HTML entities
    return $data;
}

// Form validation
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (empty($_POST["name"])) {
        $nameErr = "Name is required";
    } else {
        $name = test_input($_POST["name"]);
    }

    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
    } else {
        $email = test_input($_POST["email"]);
    }

    if (empty($_POST["website"])) {
        $website = "";
    } else {
        $website = test_input($_POST["website"]);
    }

    if (empty($_POST["comment"])) {
        $comment = "";
    } else {
        $comment = test_input($_POST["comment"]);
    }

    if (empty($_POST["gender"])) {
        $genderErr = "Gender is required";
    } else {
        $gender = test_input($_POST["gender"]);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>PHP Form Validation</title>
<style>
.error { color: red; }
</style>
</head>
<body>

<h2>PHP Form Example</h2>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">

Name: <input type="text" name="name" value="<?php echo $name; ?>">
<span class="error">* <?php echo $nameErr; ?></span>
<br><br>

E-mail: <input type="text" name="email" value="<?php echo $email; ?>">
<span class="error">* <?php echo $emailErr; ?></span>
<br><br>

Website: <input type="text" name="website" value="<?php echo $website; ?>">
<span class="error"><?php echo $websiteErr; ?></span>
<br><br>

Comment: <textarea name="comment" rows="5" cols="40"><?php echo $comment; ?></textarea>
<br><br>

Gender:
<input type="radio" name="gender" value="female" <?php if ($gender=="female") echo "checked"; ?>> Female
<input type="radio" name="gender" value="male" <?php if ($gender=="male") echo "checked"; ?>> Male
<input type="radio" name="gender" value="other" <?php if ($gender=="other") echo "checked"; ?>> Other
<span class="error">* <?php echo $genderErr; ?></span>
<br><br>

<input type="submit" name="submit" value="Submit">
</form>

<?php
// Display submitted data
if ($_SERVER["REQUEST_METHOD"] == "POST" && $name && $email && $gender) {
    echo "<h3>Your Input:</h3>";
    echo "Name: $name <br>";
    echo "Email: $email <br>";
    echo "Website: $website <br>";
    echo "Comment: $comment <br>";
    echo "Gender: $gender <br>";
}
?>

</body>
</html>
