<?php
echo"connection: start<br>";
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "user";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname, 3307);
// Check connection
if ($conn->connect_error) {
    die("MySql: Connection failed: " . $conn->connect_error);
}


if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $username = $conn->real_escape_string($username);
    $password = $conn->real_escape_string($password);
    $sql = "SELECT * FROM user WHERE uUsername = '$username' AND uPassword = '$password'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            header('Location: ../MainPage.php');
        }
    } else {
        echo "invalid username/password";
    }
}

?>