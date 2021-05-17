<?php
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
      <link rel="stylesheet" href="index.css">

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>

    <!-- navbar -->
    <div class="navbar-fixed" id="home">
     <nav class="black">
      <div class="nav-wrapper">
        <a href="#" class="brand-logo center"><img src="img/Sailor and Bright.png" alt=""></a>
       <ul id="nav-mobile" class="left hide-on-med-and-down">
         <li><a href="#home">Home</a></li>
          <li><a href="#products">Product</a></li>
        </ul>
       <ul id="nav-mobile" class="right hide-on-med-and-down">
         <li><a href="login.php" class="waves-effect waves-light btn blue lighten-3">login</a></li>
       </ul>
     </div>
    </nav>
  </div>

  <br>
  <br>



 
    






<!-- card -->
<section id="products" class="products white scrollspy ">
    <div class="container">
        <div class="row">
            <h3 class="light center grey-text text-darken-3">Our Product</h3>
            <div class="container">
     <nav>
    <div class="nav-wrapper grey lighten-2">
      <form action="" method="GET">
        <div class="input-field">
          <input id="search" type="search" name="keyword" placeholder="Find items" autofocus>
          <label class="label-icon" for="search"><i class="material-icons">search</i>
          </label>
          <button class="waves-effect waves-light btn blue lighten-3 center" type="submit" name="search">Search</button>
          <i class="material-icons">close</i>
        </div>
      </form>
    </div>
  </nav>
     </div>
     <br>
     <br>
     <br>
            <div class="col m12 s12">
                <div class="card">
                    <div class="card-content">
                      <h2> Shoes List</h2>
                    </div>
                    <?php if(empty($shoes)):?>
                      <div class="card-action">
                      <a>Items not found</a>
                    </div>
        <?php else :?>
                   <?php foreach($shoes as $sepatu) : ?> 
                    <div class="card-action">
                      <a href="detail.php?id=<?= $sepatu['id']?>"><?= $sepatu["nama"]?></a>
                    </div>
                   <?php endforeach; ?> 
                   <?php endif; ?>
                  </div>
            </div>

    </div>
</section>










      <!-- testimoni  -->
     <div class="background-testi">TESTIMONIAL
      <div class="carousel carousel-slider testimoni black">
    <a class="carousel-item" href="#one!"><img src="img/1.jpg"></a>
    <a class="carousel-item" href="#two!"><img src="img/2.jpg"></a>
    <a class="carousel-item" href="#three!"><img src="img/3.jpg"></a>
  </div>
  </div> 







  <!-- footer -->
<footer class="page-footer black lighten-1 scrollspy" id="contact">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
            <i class="large material-icons center">call</i>
          <h5 class="white-text">Contact us</h5>
         <ul>
             <li>Phone: 021 225 278</li>
             <li>address:Jl.Ciratu no 90 Sukabumi West Java, Indonesia</li>
         </ul>
        </div>
        <div class="col l4 offset-l2 s12">
          <h5 class="white-text">Owner's social-media</h5>
          <ul id="contact" class="contact" style="display: flex; ">
            <li><a style="margin:0px 15px 0px 15px;" href="https://www.instagram.com/agung.alfatah/?hl=id" target="_blank"><img src="img/instagram.png" alt=""></a></li>
            <li><a style="margin:0px 15px 0px 15px;" href="https://web.facebook.com/agung.alfatah101/" target="_blank"><img src="img/facebook.png" alt=""></a></li>
            <li><a style="margin:0px 15px 0px 15px;" href="https://twitter.com/AgungAlfatah5" target="_blank"><img src="img/twitter.png" alt=""></a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
      SN3KEARZ© 2020 Copyright Text
      <a class="waves-effect waves-light btn right" href="#products"><i class="material-icons left">keyboard_arrow_up</i>Back to top</a>
      </div>
    </div>
  </footer>













      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <script>
        const carousel = document.querySelectorAll('.carousel');
        M.Carousel.init(carousel);

        const scroll = document.querySelectorAll('.scrollspy')
          M.ScrollSpy.init(scroll, {
              scrollOffset: 50
          });




      </script>
    </body>
  </html>