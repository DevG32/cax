<?php
require("connection.php");
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <title>Login | CAX</title>
    <link rel="stylesheet" href="login.css">
    <link rel="icon" type="image/x-icon" href="img/">
</head>
<body>
    <div class="container">
        <form action="index.php" method="POST">
            <input type="text" placeholder="name.surname@lspd.net" name="email" autocomplete="off" required>
            <input type="password" placeholder="Password" name="password" autocomplete="off" required>
            <button name="submit">Login</button>
        </form>
    </div>
</body>
</html>
