<?php
session_start();
require 'function.php';
if (isset($_COOKIE['username']) && isset($_COOKIE['hash'])) {
    $username = $_COOKIE['username'];
    $hash = $_COOKIE['hash'];

    $result = mysqli_query(koneksi(), "SELECT * FROM user WHERE username = '$username'");
    $row = mysqli_fetch_assoc($result);

    if ($hash === hash('sha256', $row['id'], false)) {
        $_SESSION['username'] = $row['username'];
        header("Location:admin.php");
        exit;
    }
}



if (isset($_SESSION['username'])) {
    header("Location:admin.php");
    exit;
}



if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $cek_user = mysqli_query(koneksi(), "SELECT * FROM user WHERE username = '$username'");

    if (mysqli_num_rows($cek_user) > 0) {
        $row = mysqli_fetch_assoc($cek_user);
        if (password_verify($password, $row['password'])) {
            $_SESSION['username'] = $_POST['username'];
            $_SESSION['hash'] = hash('sha256', $row['id'], false);

            if (isset($_POST['remember'])) {
                setcookie('username', $row['username'], time() + 60 * 60 * 24);
                $hash = hash('sha256', $row['id']);
                setcookie('hash', $hash, time() + 60 * 60 * 24);
            }

            if (hash('sha256', $row['id']) == $_SESSION['hash']) {
                header("Location:admin.php");
                die;
            }
            header("Location:index.php");
            die;
        }
    }
    $error = true;
}

?>












<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>

    <div class="container">
        <div class="row">
            <div class="col s12 m6 offset-m3">
                <div class="card">

                    <div class="card-action blue lighten-3 white-text center ">
                        <h3>Login</h3>
                    </div>

                    <div class="card-content">
                        <form action="" method="POST">
                            <?php if (isset($error)) : ?>
                                <p style="color :red; font-style:italic;">Wrong Username or Password</p>
                            <?php endif;?>



                            <div class="input-field">
                                <input type="text" id="username" name="username">
                                <label for="username">username</label>
                            </div>
                            <div class="input-field">
                                <input type="password" id="password" name="password">
                                <label for="password">password</label>
                            </div>
                            <div class="form-field">
                                <label>
                                 <input type="checkbox" class="filled-in" name="remember" />
                                    <span>Remember me</span>
                                 </label>
                            </div><br>
                            <div class="form-field">
                                <button type="submit" name="submit" class="waves-effect waves-light btn blue lighten-3">Login</button>
                            </div><br>
                            <div class="form-field">
                                <p>dont have account? register <a href="register.php">here</a></p>
                            </div>
                        </form>
                    </div>


                </div>
            </div>
        </div>
    </div>


















      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="js/materialize.min.js"></script>
    </body>
  </html>