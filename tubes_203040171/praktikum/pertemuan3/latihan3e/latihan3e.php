<?php
$barang = [
    [
        "nama" => "Nike Air Jordan XXXXV PF",
        "size" => "US 9-11",
        "harga" => "Rp.2.599.000",
        "stock" => 5,
        "pict" => "p-1.jpg"
    ],
    [
        "nama" => "Nike Air Jordan 7 RETRO GC ",
        "size" => "US 10",
        "harga" => "Rp.2.999.000",
        "stock" => 4,
        "pict" => "p-2.jpg"
    ],
    [
        "nama" => "Nike Air Jordan 1 MID SE",
        "size" => "US 12",
        "harga" => "Rp.1.799.0000",
        "stock" => 1,
        "pict" => "p-3.jpg"
    ], [
        "nama" => "Twisted Resort chuck 70",
        "size" => "US 9.5-11",
        "harga" => "Rp.900.000",
        "stock" => 10,
        "pict" => "p-4.jpg"
    ],
    [
        "nama" => "Converse x Telfar Chuck 70",
        "size" => "-",
        "harga" => "Rp.1.699.000",
        "stock" => "SOLD",
        "pict" => "p-5.jpg"
    ],
    [
        "nama" => "Industrial Glam chuck 70",
        "size" => "US 11",
        "harga" => "Rp.850.000",
        "stock" => 1,
        "pict" => "p-6.jpg"
    ],
    [
        "nama" => "Adidas Ultra 4D 5.0 Shoes",
        "size" => "US 10.5",
        "harga" => "Rp.2.850.000",
        "stock" => 1,
        "pict" => "p-7.jpg"
    ],
    [
        "nama" => "Adidas NMD_R1 Shoes",
        "size" => "-",
        "harga" => "Rp.2.000.000",
        "stock" => "SOLD",
        "pict" => "p-8.jpg"
    ],
    [
        "nama" => "Ultraboost 5 DNA shoes",
        "size" => "-",
        "harga" => "Rp.2.000.000",
        "stock" => "SOLD",
        "pict" => "p-9.jpg"
    ],


];



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
      <?php foreach($barang as $item => $jual) : ?>
        <tbody>
          <tr>
            <td><?= $jual["nama"]  ?></td>
            <td><?= $jual["harga"]  ?></td>
            <td><?= $jual["stock"]  ?></td>
            <td><?= $jual["size"]  ?></td>
            <td>
              <img src="img/<?= $jual["pict"] ?>" alt="" width="100px">
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