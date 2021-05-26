<?php

require 'function.php';

$shoes = query("SELECT * FROM shoes")



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
      <?php foreach($shoes as $sepatu) : ?>
        <tbody>
          <tr>
            <td><?= $sepatu["nama"]  ?></td>
            <td><?= $sepatu["harga"]  ?></td>
            <td><?= $sepatu["stock"]  ?></td>
            <td><?= $sepatu["size"]  ?></td>
            <td>
              <img src="img/<?= $sepatu["pict"] ?>" alt="" width="100px">
            </td>
 
          </tr>
      <?php endforeach; ?>    
        </tbody>
      </table>
      </div>
















      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="js/materialize.min.js"></script>
    </body>
  </html>