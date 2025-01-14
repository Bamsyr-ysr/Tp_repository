<?php
session_start();
include 'database.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST')
{    $username = $_POST['username'];
    $password = $_POST['password'];
    $stmt = $conn->prepare("SELECT * FROM users WHERE username = ? AND password = MD5(?)");
    $stmt->execute([$username, $password]);    $user = $stmt->fetch();
    if ($user) {        $_SESSION['user'] = $user['username'];
        header("Location: selection.php");
    }
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0,
           maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="etab_mang.css">
    <title>Document</title>
</head>
<body>
<div class="container">
    <form method="POST" action="">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username">
        <label for="password">Password:</label>
        <input type="password" id="password" name="password">
        <button type="submit">Login</button>
    </form>
</div>
</body>
</html>
