
<?php
$servername = "localhost:3306";
$username = "root";
$password = "";
$dbname = "test";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$registration = $_POST['registration']; //This field is not required
$pass= $_POST['password'];
$pass=mysql_real_escape_string($pass);




$sql = "INSERT INTO otp (pass)
VALUES ('$pass')";

if ($conn->query($sql) === TRUE) {
    echo json_encode(array("abc"=>'successfuly registered'));
} else {
    echo json_encode(array("abc"=>'"Error: " . $sql . "<br>" . $conn->error'));
}

$conn->close();
?>
