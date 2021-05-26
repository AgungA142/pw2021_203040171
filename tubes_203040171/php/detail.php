<?php

if (!isset($_GET['id'])) {
    header("Location: index.php");
    exit;
}

require 'function.php';

$id= $_GET['id'];

$shoes = query("SELECT * FROM shoes WHERE id =$id")[0];

?>

<html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
      <link rel="stylesheet" href="styledetail.css">

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>


     <!-- navbar -->
     <div class="navbar-fixed">
     <nav class="black">
      <div class="nav-wrapper">
        <a href="#" class="brand-logo center"><img src="img/Sailor and Bright.png" alt=""></a>
       <ul id="nav-mobile" class="left hide-on-med-and-down">
         <li><a href="index.php" class="waves-effect waves-light btn blue lighten-3"><i class="material-icons left">arrow_back</i>Back</a></li>
       </ul>
     </div>
    </nav>
  </div>


  <br>
  <br>
  <br>























    <div class="container" style="width:350px;">
    <div class="card" >
    <div class="card-image waves-effect waves-block waves-light">
      <img class="activator" src="img/<?= $shoes["pict"] ?>" alt=""  >
    </div>
    <div class="card-content">
      <span class="card-title activator grey-text text-darken-4">Item Detail<i class="material-icons right">more_vert</i></span>
      <p><a href="#">Buy</a></p>
    </div>
    <div class="card-reveal">
      <span class="card-title grey-text text-darken-4">Detail<i class="material-icons right">close</i></span>
      <p>Nama :<?= $shoes["nama"]  ?></p>
      <p>Harga :<?= $shoes["harga"]  ?></p>
      <p>Stock :<?= $shoes["stock"]  ?></p>
      <p>Size :<?= $shoes["size"]  ?></p>
    </div>
  </div>
 </div>



   <!--JavaScript at end of body for optimized loading-->
   <script type="text/javascript" src="js/materialize.min.js"></script>
   </body>
  </html>





      