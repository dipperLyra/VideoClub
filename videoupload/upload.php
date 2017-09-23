<?php
if($_SERVER["REQUEST_METHOD"]=="POST") {
    $error = "";
    $sucess="";
    $description = $_POST[desc];
    $description=stripslashes($description);
    $description=htmlspecialchars($description, ENT_QUOTES | ENT_HTML5, 'UTF-8');
    $name = $_FILES['vide']['name'];
    $tmp_name = $_FILES['vide']['tmp_name'];
//}
    $path = "/var/www/html/";
    if (file_exists($path . $name)) {
        $error = "file already exists";
    } else {
        move_uploaded_file($tmp_name, $path . $name);
        $sucess="uploaded successfully";
    }
}
$servername = "localhost";
$username = "franc";
$password = "come1234";
$dbname = "videoupload";
$connection = new mysqli($servername, $username, $password, $dbname);
if ($connection->connect_error) {
    die("error in connection" . $connection->connect_error);

}
//echo "succesfully conected";

$sql = "INSERT INTO upload(Description,Video)
VALUES('$description','$name')";

if ($connection->query($sql) === TRUE) {
    echo "";
} else {
    echo "submission failed" . $connection->error;
}
$connection->close();
?>