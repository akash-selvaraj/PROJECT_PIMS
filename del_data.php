<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "stud_det";

$conn = new mysqli($servername, $username, $password, $dbname);
if (!$conn) {
	die("<h3>Connection failed :</h3>" . mysqli_connect_error());
}
echo "<h3>Connected successfully</h3>";

$roll = $_POST['roll'];
$sql = "DELETE FROM student WHERE `student`.`roll` = '$roll'";
if(mysqli_query($conn, $sql)){
            echo "<h3>Data Deleted successfully.
                </h3>";

            
        } else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }
mysqli_close($conn);
?>