<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css"/>
    <title>Document</title>
</head>
<center>
<body>
    <img src="logo.png">
    <br>
    <br>
    

    <form action="backend/bRegister.php" method="post">
        <label for="username">Username</label>
        <br>
        <br>
        <input type="text" name="username" id="username">
        <br>
        <br>
        <label for="password">Password</label>
        <br>
        <br>
        <input type="password" name="password" id="password">
        <br>
        <br>
        <label for="password">Confirm Password</label>
        <br>
        <br>
        <input type="password" name="password2" id="password2">
        <br>
        <br>
        <label for="email">Email</label>
        <br>
        <br>
        <input type="email" name="email" id="email">
        <br>
        <br>
        <br>
        <br>
        <button type="submit" value="Register">Register</button>
 
</body>
</center>
</html>