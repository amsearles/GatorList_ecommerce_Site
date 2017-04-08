 <?php
$mysql_hostname = "localhost";
$mysql_user = "hpvong";
$mysql_password = "hin058426";
$mysql_database = "student_hpvong";
// Create connection
$conn = new mysqli($mysql_hostname, $mysql_user, $mysql_password, $mysql_database);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
?>

