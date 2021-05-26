<?php

$conn = mysqli_connect("localhost","root","");

mysqli_select_db($conn, "pw_tubes_203040171");

$result = mysqli_query($conn, "SELECT * FROM shoes" );
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
      <?php while($row = mysqli_fetch_assoc($result)) : ?>
        <tbody>
          <tr>
            <td><?= $row["nama"]  ?></td>
            <td><?= $row["harga"]  ?></td>
            <td><?= $row["stock"]  ?></td>
            <td><?= $row["size"]  ?></td>
            <td>
              <img src="img/<?= $row["pict"] ?>" alt="" width="100px">
            </td>
 
          </tr>
      <?php endwhile; ?>    
        </tbody>
      </table>
      </div>
















      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="js/materialize.min.js"></script>
    </body>
  </html>