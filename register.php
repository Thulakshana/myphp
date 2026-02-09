<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="POST" action="register_in.php">

<input type="text" name="id" placeholder="id">

<input type="text" name="namee" placeholder="Name">
<input type="text" name="address" placeholder="Address">
<input type="text" name="tel" placeholder="Telephone">


<button type="submit" name="submit">register</button>
</form>

<!--^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^-->

<form method="POST" action="register_up.php">

<input type="text" name="id" placeholder="id">

<input type="text" name="namee" placeholder="Name">
<input type="text" name="address" placeholder="Address">
<input type="text" name="tel" placeholder="Telephone">


<button type="submit" name="submit">update</button>
</form>


<!--^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^-->

<form method="POST" action="deletee.php">

<input type="text" name="id" placeholder="id">

<button type="submit" name="submit">delete</button>
</form>

</body>
</html>