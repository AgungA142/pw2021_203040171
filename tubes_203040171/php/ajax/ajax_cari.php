<?php 
require '../function.php';

    $keyword = $_GET['keyword'];
    $query = "SELECT * FROM shoes WHERE
                 nama like '%$keyword%' OR
                 size like '%$keyword%' OR
                 harga like '%$keyword%'";
    $shoes = query($query);




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



    <table class="centered responsive-table tab">
        <thead>
          <tr>
              <th>option</th>
              <th>Shoes</th>
              <th>Price</th>
              <th>Stock</th>
              <th>Size</th>
              <th>Picture</th>
          </tr>
        </thead>
        <?php if(empty($shoes)):?>
        <tbody>
          <tr>
            <td colspan="7">
              <h1 style="color: red;">Data not found</h1>
            </td>
          </tr>
          </tbody>
        <?php else :?>
        <?php foreach($shoes as $sepatu) : ?>
        <tbody>
          <tr>
            <td>
            <a href="ubah.php?id=<?= $sepatu['id']?>" class="waves-effect waves-light btn blue lighten-3"><i class="material-icons left">create</i>Change</a>
            <a href="hapus.php?id=<?= $sepatu['id']?>" onclick="return confirm('Delete the data?')" class="waves-effect waves-light btn blue lighten-3"><i class="material-icons left">delete</i>Delete</a>
            
            </td>
            <td><?= $sepatu["nama"]  ?></td>
            <td><?= $sepatu["harga"]  ?></td>
            <td><?= $sepatu["stock"]  ?></td>
            <td><?= $sepatu["size"]  ?></td>
            <td>
              <img src="img/<?= $sepatu["pict"] ?>" alt="" width="100px">
            </td>
 
          </tr>
          <?php endforeach;?>
          <?php endif;?>
        </tbody>
      </table>

      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="js/materialize.min.js"></script>
    </body>
  </html>