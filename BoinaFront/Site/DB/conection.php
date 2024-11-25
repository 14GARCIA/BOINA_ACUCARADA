 
<?php
$servername = "localhost";
$database = " PIdatabase";
$username = "root";
$password = "password";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

$sql_command = "Create database 'adrian' ";


mysqli_query($conn,$sql_command);

mysqli_close($conn);

?>

 <?php 
 

?> 