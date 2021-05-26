<?php

session_start();

if (!isset($_SESSION["username"])) {
  header("Location:login.php");
  exit;
}

require 'function.php';




$shoes = query("SELECT * FROM shoes");

if(isset($_GET['search'])) {
  $keyword = $_GET['keyword'];
  $shoes = query("SELECT * FROM shoes WHERE
              nama like '%$keyword%' OR
              size like '%$keyword%' OR
              harga like '%$keyword%'");
} else {
  $shoes = query("SELECT * FROM shoes");
}


?>



<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
      <link rel="stylesheet" href="styleadmin.css">

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>




    <div class="navbar-fixed" id="home">
     <nav class="black">
      <div class="nav-wrapper">
       <a href="#" class="brand-logo center"><img src="img/Sailor and Bright.png" alt=""></a>
       <ul id="nav-mobile" class="left hide-on-med-and-down">
         <li><a href="logout.php" class="waves-effect waves-light btn blue lighten-3">logout</a></li>
       </ul>
     </div>
    </nav>
  </div>

  <br>
  <br>

    <h1 class="center">Welcome to the Administrator's page</h1>


    
     <div class="container" >
     <h2>Data Table</h2>
     <nav>
    <div class="nav-wrapper white lighten-2">
      <form action="" method="GET">
        <div class="input-field">
          <input id="search" type="search" name="keyword" placeholder="Find items" autofocus class="keyword">
          <label class="label-icon" for="search"><i class="material-icons">search</i>
            <button class="waves-effect waves-light btn blue lighten-3 center" type="submit" name="search" id="tombol-cari">Search</button>
          </label>
          <i class="material-icons">close</i>
        </div>
      </form>
    </div>
  </nav>
     </div>
     <br>
     <br>
     <br>


    <!-- pagination -->
 



     <div class="container" id="container">
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
      </div>
      <br>
      <br>

      

      
      <div class="button center">
      <a href="tambah.php" class="waves-effect waves-light btn blue lighten-3 "><i class="material-icons left">add</i>Add data</a>
      </div>
      <br>
      <br>


      





       <!--JavaScript at end of body for optimized loading-->
       <script type="text/javascript" src="js/materialize.min.js"></script>
       <script src="javascript/script.js"></script>
      </body>
   </html>