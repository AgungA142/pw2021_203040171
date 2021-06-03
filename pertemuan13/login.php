<?php

session_start();

if (isset($_SESSION['login'])) {
    header("Location: index.php");
    exit;
}
require 'function.php';

//ketika tombol login ditekan

if (isset($_POST['login'])) {
    $login = login($_POST);
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>form login</h3>
    <?php if (isset($login['error'])) : ?>
        <p style="color: red; font-style:italic;"><?= $login['pesan']?></p>
    <?php endif;?>
    <form action="" method="POST">
        <ul>
            <li>
                <label for="">
                    Username :
                    <input type="text" name="username" autofocus autocomplete="off" required>
                </label>
            </li>
            <li>
                <label for="">
                    Password :
                    <input type="password" name="password" required>
                </label>
            </li>
            <li><button type="submit" name="login">login</button></li>
            <li><a href="register.php">Tambah user baru</a></li>
        </ul>


    </form>
</body>
</html>