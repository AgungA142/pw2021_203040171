<?php
require 'function.php';

if(isset($_POST['add'])) {
    if(add($_POST) > 0){
         echo "<script>
            alert('Data Upload Success');
            document.location.href = 'admin.php';
        </script>";
    }else {
        echo "<script>
                alert('Data Upload Fail');
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
      <link rel="stylesheet" href="style.css">

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body>
    <h3 class="center">Add data</h3>

    <div class="container">
        <form action="" method="POST">
            <div class="input-field">
                <input type="text" name="nama" id="nama" class="validate" required>
                <label for="nama">Shoes</label>
            </div>
            <div class="input-field">
                <input type="text" name="harga" id="harga" class="validate" required>
                <label for="harga">Price</label>
            </div>
            <div class="input-field">
                <input type="text" name="stock" id="stock" class="validate" required>
                <label for="stock">Stock</label>
            </div>
            <div class="input-field">
                <input type="text" name="size" id="size" class="validate" required>
                <label for="size">Size</label>
            </div>
            <div class="file-field input-field">
                 <div class="btn">
                     <span>Choose Picture</span>
                     <input type="file" name="pict" id="pict">
                 </div>
                 <div class="file-path-wrapper">
                    <input class="file-path validate" type="text" name="pict" id="pict">
                </div>
            </div>
            <button type="submit" name="add" class="waves-effect waves-light btn blue lighten-3">Submit Data</button>
            <a href="index.php" class="waves-effect waves-light btn blue lighten-3"><i class="material-icons left">arrow_back</i>Back</a>
    
        
        </form>
        
    
    
    </div>

 <!--JavaScript at end of body for optimized loading-->
 <script type="text/javascript" src="js/materialize.min.js"></script>
</body>
</html>