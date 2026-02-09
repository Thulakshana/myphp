<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    


<?php
//read
$myfile = fopen("webdictionary.txt", "r") or die("Error: Unable to open file!");
echo fread($myfile, filesize("webdictionary.txt"));
fclose($myfile);

echo"<br>";


//file eka iwara weakanm read karanawa 
$myfiles = fopen("webdictionary.txt", "r") or die("Unable to open file!");
// Output one line until end-of-file
while(!feof($myfiles)) {
  echo fgets($myfiles) . "<br>";
}
fclose($myfiles);



//file create and write
$myfiless = fopen("newfile.txt", "w") or die("Unable to open file!");
$txt = "John Doe\n";
fwrite($myfiless, $txt);
$txt = "Jane Doe\n";
fwrite($myfiless, $txt);
fclose($myfiless);



?>




</body>
</html>