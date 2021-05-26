<?php

if (!isset($_GET['id'])) {
    header("Location: index.php");
    exit;
}

require 'function.php';

$id= $_GET['id'];

$shoes = query("SELECT * FROM shoes WHERE id =$id")[0];

if (isset($_POST['buy'])) {
    echo "<script>
            alert('Thank You For your Purchase Please Wait 4-6 Days For The Item Delivery!');
            document.location.href = 'index.php';
        </script>";
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




    <section id="order" class="order">
    <div class="container">
        <h3 class="light center grey-text text-darken-3">Order Form</h3>
        <div class="row">
            <form class="col s12" action="" method="POST">
              <div class="row">
                <div class="input-field col s6">
                  <i class="material-icons prefix">account_circle</i>
                  <input id="icon_prefix" type="text" required class="validate">
                  <label for="icon_prefix">Full Name</label>
                </div>
                <div class="input-field col s6">
                  <i class="material-icons prefix">phone</i>
                  <input id="icon_telephone" type="tel" required class="validate">
                  <label for="icon_telephone">Phone Number</label>
                </div>
              </div>
              <div class="row">
                <div class="input-field col s12">
                  <i class="material-icons prefix">email</i>
                  <input type="email" name="email" id="email" class="validate">
                  <label for="email">Email</label>
                </div>
              </div>
              <div class="row">
                <div class="input-field col s12">
                  <i class="material-icons prefix">add_shopping_cart</i>
                  <textarea name="items" id="items" required class="materialize-textarea validate"><?= $shoes["nama"]  ?></textarea>
                  <label for="items">Items</label>
                </div>
              </div>
              <div class="row">
                <div class="input-field col s12">
                  <i class="material-icons prefix">home</i>
                  <textarea name="message" id="message" required class="materialize-textarea validate"></textarea>
                  <label for="message">Address</label>
                </div>
                <button type="submit" class="btn blue darken-2" name="buy">Checkout</button>
              </div>
            </form>
            <div class="progress">
                <div class="determinate" style="width: 100%"></div>
            </div>
    </div>
    
</section>


      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="js/materialize.min.js"></script>
    </body>
  </html>