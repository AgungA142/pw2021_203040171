<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
     <style>
       nav {
        position: fixed;
        background: rgba(0, 0,0, 0.2);
        padding: 0px 20px;
      }

      header {
      background-image: url(img/back.jpg);
      background-size: cover;
      width: 100%;
      height: 700px;
      }

      .container p {
        font-size: 25px;
      }
     </style>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>

 <!-- Dropdown Structure -->
 <header>
 <div class="navbar-fixed">
<ul id="dropdown1" class="dropdown-content">
  <li><a href="praktikum/pertemuan1/">Pertemuan 1</a></li>
  <li><a href="praktikum/pertemuan2/">Pertemuan 2</a></li>
  <li class="divider"></li>
  <li><a href="praktikum/pertemuan3/">Pertemuan 3</a></li>
  <li><a href="praktikum/pertemuan4/">Pertemuan 4</a></li>
  <li class="divider"></li>
  <li><a href="praktikum/pertemuan5/">Pertemuan 5</a></li>
  <li><a href="praktikum/pertemuan6/">Pertemuan 6</a></li>

</ul>
<ul id="dropdown2" class="dropdown-content">
  <li><a href="#!">Pertemuan 1</a></li>
  <li><a href="#!">Pertemuan 2</a></li>
  <li class="divider"></li>
  <li><a href="#!">Pertemuan 3</a></li>
</ul>
<nav>
  <div class="nav-wrapper">
    <a href="#!" class="brand-logo">Pemograman Web 2021</a>
    <ul class="right hide-on-med-and-down">
      <li><a href="php/index.php">Tubes</a></li>
      <!-- Dropdown Trigger -->
      <li><a class="dropdown-trigger" href="#!" data-target="dropdown1">Praktikum<i class="material-icons right">arrow_drop_down</i></a></li>
      <li><a class="dropdown-trigger" href="#!" data-target="dropdown2">Kuliah<i class="material-icons right">arrow_drop_down</i></a></li>
    </ul>
  </div>
</nav>
</div>




<!-- carousel  -->

<section>
    <div class="container">
      <div class="row center ">
        <div class="col s12 m12 ">
          <h2 class="black-text">SELAMAT DATANG</h2>
          <p>Halaman ini merupakan Landing page yang berisi seluruh kegiatan perkuliahan pemograman web di universitas pasundan pada tahun 2021 yang saya kerjakan .</p>
        </div>
      </div>
      <div class="row center">
        <div class="col s12 m4">
          <a data-target="modal1" class="waves-effect waves-light btn modal-trigger">Praktikum</a>
        
        </div>
        <div class="col s12 m4">
        <a data-target="modal2" class="waves-effect waves-light btn modal-trigger">Kuliah</a>

        </div>
        <div class="col s12 m4">
        <a href="php/index.php" class="waves-effect waves-light btn modal-trigger">Tubes</a>

        </div>
        <div class="modal" id="modal1">
          <div class="modal-content">
            <ul class="collection with-header">
             <li class="collection-header"><h4>Praktikum</h4></li>
             <li class="collection-item"><a href="praktikum/pertemuan1/">Pertemuan 1</a></li>
             <li class="collection-item"><a href="praktikum/pertemuan2/">Pertemuan 2</a></li>
             <li class="collection-item"><a href="praktikum/pertemuan3/">Pertemuan 3</a></li>
             <li class="collection-item"><a href="praktikum/pertemuan4/">Pertemuan 4</a></li>
             <li class="collection-item"><a href="praktikum/pertemuan5/">Pertemuan 5</a></li>
             <li class="collection-item"><a href="praktikum/pertemuan6/">Pertemuan 6</a></li>
            </ul>
          </div>
        </div>
        <div class="modal" id="modal2">
          <ul class="collection with-header">
            <li class="collection-header"><h4>Kuliah</h4></li>
            <div class="row">
              <div class="col m6 s12">
                <li class="collection-item"><a href="kuliah/pertemuan2/">Pertemuan 2</a></li>
                <li class="collection-item"><a href="kuliah/pertemuan3/">Pertemuan 3</a></li>
                <li class="collection-item"><a href="kuliah/pertemuan4/">Pertemuan 4</a></li>
                <li class="collection-item"><a href="kuliah/pertemuan5/">Pertemuan 5</a></li>
                <li class="collection-item"><a href="kuliah/pertemuan6/">Pertemuan 6</a></li>
                <li class="collection-item"><a href="kuliah/pertemuan7/">Pertemuan 7</a></li>
              </div>
              <div class="col m6 s12">
                <li class="collection-item"><a href="kuliah/pertemuan8/">Pertemuan 8</a></li>
                <li class="collection-item"><a href="kuliah/pertemuan9/">Pertemuan 9</a></li>
                <li class="collection-item"><a href="kuliah/pertemuan10/">Pertemuan 10</a></li>
                <li class="collection-item"><a href="kuliah/pertemuan11/">Pertemuan 11</a></li>
                <li class="collection-item"><a href="kuliah/pertemuan12/">Pertemuan 12</a></li>
                <li class="collection-item"><a href="kuliah/pertemuan13/">Pertemuan 13</a></li>
              </div>
            </div>
          </ul>
        </div>
      </div>
    </div>
</section>
 </header>










      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <script>

        const dropdown = document.querySelectorAll('.dropdown-trigger');
        M.Dropdown.init(dropdown);


         const carousel = document.querySelectorAll('.carousel');
        M.Carousel.init(carousel);


        const modal = document.querySelectorAll('.modal');
        M.Modal.init(modal);
      </script>
    </body>
  </html>