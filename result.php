<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "stud_det";
$roll = $_POST['roll'];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT sname, department, gender, dob, address, mobile, email FROM student WHERE roll = '$roll'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<strong>Name: </strong>" . $row["sname"]. "<br>"."<strong>Department: </strong>" . $row["department"]. "<br>"."<strong>Gender: </strong>" . $row["gender"]. "<br>"."<strong>Date of Birth: </strong>" . $row["dob"]. "<br>"."<strong>Address: </strong>" . $row["address"]. "<br>"."<strong>Mobile: </strong>" . $row["mobile"]. "<br>"."<strong>Email: </strong>" . $row["email"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>