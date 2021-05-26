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

 <!-- Dropdown Structure -->
<ul id="dropdown1" class="dropdown-content">
  <li><a href="#!">Pertemuan 1</a></li>
  <li><a href="#!">Pertemuan 2</a></li>
  <li class="divider"></li>
  <li><a href="#!">Pertemuan 3</a></li>
</ul>
<ul id="dropdown2" class="dropdown-content">
  <li><a href="#!">Pertemuan 1</a></li>
  <li><a href="#!">Pertemuan 2</a></li>
  <li class="divider"></li>
  <li><a href="#!">Pertemuan 3</a></li>
</ul>
<nav>
  <div class="nav-wrapper">
    <a href="#!" class="brand-logo">Pemograman Web 2020</a>
    <ul class="right hide-on-med-and-down">
      <li><a href="php/index.php">Tubes</a></li>
      <!-- Dropdown Trigger -->
      <li><a class="dropdown-trigger" href="#!" data-target="dropdown1">Praktikum<i class="material-icons right">arrow_drop_down</i></a></li>
      <li><a class="dropdown-trigger" href="#!" data-target="dropdown2">Kuliah<i class="material-icons right">arrow_drop_down</i></a></li>
    </ul>
  </div>
</nav>

      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <script>

        const dropdown = document.querySelectorAll('.dropdown-trigger');
        M.Dropdown.init(dropdown);
      </script>
    </body>
  </html>