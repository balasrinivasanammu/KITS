//dbconfig.php.

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "kits";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
