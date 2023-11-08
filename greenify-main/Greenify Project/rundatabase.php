<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$conn = mysqli_connect($dbhost, $dbuser, $dbpass);

if (!$conn) {
    echo 'Connection Failure<br>';
}
echo 'Connected Successfully<br>';
$sql = "CREATE DATABASE Greenify_Database";

if (mysqli_query($conn, $sql)) {
    echo "Database Connected Successfully";
} else {
    echo "Error Creating Database: " . mysqli_error($conn);
}
mysqli_close($conn);
?>
<br>
<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$dbname = 'Greenify_Database';
$conn = mysqli_connect($host, $user, $pass, $dbname);

$sql = "CREATE TABLE `contact_details` (
  `Name` varchar(20) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Phone` int(10) NOT NULL,
  `Message` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;";
if (mysqli_query($conn, $sql)) {
    echo "Database Table Created Successfully";
} else {
    echo "Error Creating Database Table: ";
}
mysqli_close($conn);
?>