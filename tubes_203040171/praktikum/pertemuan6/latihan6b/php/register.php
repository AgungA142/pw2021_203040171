<?php
require 'function.php';

if (isset($_POST["register"])) {

    if (registrasi($_POST) > 0) {
        echo "<script>
        alert('Registration succes');
        document.location.href = 'login.php';
    </script>";
    }else {
        echo "<script>
        alert('Registration fail');
    </script>";
    }

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
                        <h3>Register</h3>
                    </div>

                    <div class="card-content">
                        <form action="" method="POST">

                            <div class="input-field">
                                <input type="text" id="username" name="username">
                                <label for="username">username</label>
                            </div>
                            <div class="input-field">
                                <input type="password" id="password" name="password">
                                <label for="password">password</label>
                            </div>
                            <div class="form-field">
                                <button type="submit" name="register" class="waves-effect waves-light btn blue lighten-3">Register</button>
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