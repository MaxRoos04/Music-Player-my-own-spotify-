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

if (isset($_POST['username']) && isset($_POST['password']) && isset($_POST['email'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    /*$password2 = $_POST['password2'];*/
    $email = $_POST['email'];
    $username = $conn->real_escape_string($username);
    $sql = "SELECT * FROM user WHERE uUsername = '$username'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        echo"<br>Username taken<br><a href = '../register.php'>Try Again</a>";
    }
    else
    {
        $sql = "INSERT INTO user (uUsername, uPassword, uEmail) VALUES ('$username', '$password', '$email')";
        if ($conn->query($sql) === TRUE) {
            header('Location: ../login.php');
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }

    


    /*if (empty($username) || empty($password) || empty($password2) || empty($password2)) {
        $_SESSION["errormsg"]='you must fill all';
    }else{
        if (empty($password) || empty($password2)) {
           $_SESSION["errormsg"] = "you must fill password";
        }
    else{

        if ($password == $password2) {
            $hashpass = md5($password);
            $query="insert into users values (null, '$username', '$email', '$hashpass')";
            $result=mysqli_query($conn,$query);
            echo "success";
        }else{
            $_SESSION["errormsg"] = "passwords must be same";
        }
}
}*/


}

?>