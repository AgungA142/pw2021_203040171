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
      <link rel="stylesheet" href="style3.css">

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























    <div class="container">
    <table class="centered responsive-table">
        <thead>
          <tr>
              <th>Shoes</th>
              <th>Price</th>
              <th>Stock</th>
              <th>Size</th>
              <th>Picture</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><?= $shoes["nama"]  ?></td>
            <td><?= $shoes["harga"]  ?></td>
            <td><?= $shoes["stock"]  ?></td>
            <td><?= $shoes["size"]  ?></td>
            <td>
              <img src="img/<?= $shoes["pict"] ?>" alt="" width="100px">
            </td>
 
          </tr>
        </tbody>
      </table>
      </div>





      