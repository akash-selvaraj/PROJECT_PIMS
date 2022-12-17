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
$sname = $_POST['sname'];
$roll = $_POST['roll'];
$department = $_POST['department'];
$gender = $_POST['gender'];
$dob = $_POST['dob'];
$semester = $_POST['semester'];
$address = $_POST['address'];
$mobile = $_POST['mobile'];
$email = $_POST['email'];

//inserting values
$sql = "INSERT INTO student (sname, roll, department, gender, dob, semester, address, mobile, email) VALUES ('$sname', '$roll', '$department', '$gender', '$dob', '$semester', '$address', '$mobile', '$email')";
echo "<br>";
echo $sname;
echo "<br>";
echo $roll;
echo "<br>";
echo $department;
echo "<br>";
echo $gender;
echo "<br>";
echo $dob;
echo "<br>";
echo $semester;
echo "<br>";
echo $address;
echo "<br>";
echo $mobile;
echo "<br>";
echo $email;

if(mysqli_query($conn, $sql)){
            echo "<h3>Data stored successfully.
                </h3>";

            
        } else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }
mysqli_close($conn);
?>