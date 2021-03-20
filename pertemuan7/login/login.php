<?php
/*
agung alfatah
203040171
https://github.com/AgungA142/pw2021_203040171
Pertemuan 5 - 11 maret 2021
belajar mengenai pembuatan login sederhana
*/
?>


<?php
//cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST["submit"])) {

    //cek username dan password
    if ($_POST["username"] == "admin" && $_POST["password"] == "123") {
        //jika benar, redirect ke halaman admin
        header("Location: admin.php");
        exit;
    } else {
        //jika salah, tampilkan pesan kesalahan
        $error = true;
    }

    

    
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<body>
    <h1>Login Admin</h1>




    <?php if(isset($error)) :?>
        <p style="color: red; font-style:italic;" >Username / Password Salah!</p>
    <?php endif; ?>    
    <ul>
        <form action="" method="post">
            <li>
                <label for="username">Username :</label>
                <input type="text" name="username" id="username">
            </li>
            <li>
                <label for="password">Password :</label>
                <input type="password" name="password" id="password">
            </li>
            <li><button type="submit" name="submit">Login</button></li>
        </form>
    </ul>
</body>
</html>