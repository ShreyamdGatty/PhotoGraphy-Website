<?php
require('config.php');

session_start();

$username = "admin";
$password = "admin";
$error = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['username'];
    $pass = $_POST['password'];

    if ($name == $username && $pass == $password) {
        $_SESSION['loggedin'] = true;
        echo "<script>alert('success');</script>";
        header('Location:portadmin.php');
        exit;
    } else {
        $error = "Invalid login credentials.";
    }
}
?>


 <!DOCTYPE html>
 <html lang="en">
 <head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Botanic Bliss</title>
    <link rel="icon" type="image/x-icon" href="logo.ico ">
 </head>
 <!DOCTYPE html>
<html lang="en">
<head>
 <body class="body">
 <div class="login-container ">
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <style>
        body {
            font-family: "papyrus" ;
            background-color: brown ;
            display: flex  ;
            justify-content: center;  
            align-items: center  ;
            height: 200  ;
            margin: 0  ;
        }
        h2 {
            text-align: center ;
            color: #333  ;
        }
        form {
            background-color: #eee;  
            padding: 20px  ;
            border-radius: 5px;  
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1)  ;
            width: 300px  ;
            text-align: center;  
        }
        label {
            display: block  ;
            margin-bottom: 8px;  
            color: #444  ;
        }
        input[type="text"],
        input[type="password"] {
            width: 100  ;
            padding: 10px;  
            margin-bottom: 15px;  
            border: 3px solid #ccc;  
            border-radius: 7px  ;
        }
        input[type="submit"] {
            background-color:brown ;
            color: white  ;
            border: none  ;
            padding: 10px 20px;  
            border-radius: 4px ;
            cursor: pointer  ;
            width: 100%  ;
        }
        input[type="submit"]:hover {
            background-color:black  ;
        }
    </style>
</head>
<body>
    <h2>Admin Login</h2>
    <form action="" method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br><br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>
        <input type="submit" value="Login">
    </form>
</body>
</html>