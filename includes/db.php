 <!--config.php -->
<?php
$servername = "localhost";
$username = "u809801411_edu";
$password = "nY=2cmIzABL";
$dbname = "u809801411_edu";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
