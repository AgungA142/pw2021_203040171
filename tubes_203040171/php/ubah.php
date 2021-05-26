<?php

session_start();

if (!isset($_SESSION["username"])) {
  header("Location:login.php");
  exit;
}

require 'function.php';

$id = $_GET['id'];
$sepatu = query("SELECT * FROM shoes WHERE id =$id")[0];

if(isset($_POST['ubah'])) {
    if(ubah($_POST) > 0){
         echo "<script>
            alert('Data Change Success');
            document.location.href = 'admin.php';
        </script>";
    }else {
        echo "<script>
                alert('Data Change Fail');
                document.location.href = 'admin.php';
            </script>";
    }
    
   
}



?>



















<!DOCTYPE html>
<html lang="en">
<head>
     <!--Import Google Icon Font-->
     <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body>
    <h3 class="center">Change data</h3>

    <div class="container">
        <form action="" method="POST" enctype="multipart/form-data">
        <input type="hidden" id="id" name="id" value="<?= $sepatu['id'];?>">
            <div class="input-field">
                <input type="text" name="nama" id="nama" class="validate" required value="<?= $sepatu['nama'];?>">
                <label for="nama">Shoes</label>
            </div>
            <div class="input-field">
                <input type="text" name="harga" id="harga" class="validate" required value="<?= $sepatu['harga'];?>">
                <label for="harga">Price</label>
            </div>
            <div class="input-field">
                <input type="text" name="stock" id="stock" class="validate" required value="<?= $sepatu['stock'];?>">
                <label for="stock">Stock</label>
            </div>
            <div class="input-field">
                <input type="text" name="size" id="size" class="validate" required value="<?= $sepatu['size'];?>">
                <label for="size">Size</label>
            </div>
            <div class="file-field input-field">
                <input type="hidden" name="gambar_lama" value="<?= $sepatu['pict']?>">
                 <div class="btn">
                     <span>Choose Picture</span>
                     <input type="file" name="pict" id="pict" class="gambar" onchange="previewImage()">
                 </div>
                 <div class="file-path-wrapper">
                    <input class="file-path validate" type="text" name="pict" id="pict" value="<?= $sepatu['pict'];?>">
                </div>
                <img src="img/<?= $sepatu['pict']?>" style="display: block;" width="120px" class="img-preview">
            </div>
            <button type="submit" name="ubah" class="waves-effect waves-light btn blue lighten-3">Change Data</button>
            <a href="admin.php" class="waves-effect waves-light btn blue lighten-3"><i class="material-icons left">arrow_back</i>Back</a>
    
        
        </form>
        
    
    
    </div>

 <!--JavaScript at end of body for optimized loading-->
 <script type="text/javascript" src="js/materialize.min.js"></script>
 <script src="javascript/scriptphoto.js"></script>
</body>
</html>