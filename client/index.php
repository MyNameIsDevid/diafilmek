<!DOCTYPE html>
<html lang="hu">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
  <title>Diafilmek</title>
</head>

<body>
  <div class="container bg-light p-0">

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark rounded shadow ">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item p-2 m-2">
            <a class="nav-link" href="http://localhost/diafilmek/client/index.php?program=fooldal.php">Főoldal</a>
          </li>
          <li class="nav-item p-2 m-2">
            <a class="nav-link" href="http://localhost/diafilmek/client/index.php?program=statisztika.php">Statisztika</a>
          </li>
          <li class="nav-item p-2 m-2">
            <a class="nav-link" href="http://localhost/diafilmek/client/index.php?program=kiadok.php">Kiadók</a>
          </li>
          <li class="nav-item p-2 m-2">
            <a class="nav-link" href="http://localhost/diafilmek/client/index.php?program=ujkiado.php">Új kiadó</a>
          </li>
        </ul>
      </div>
    </nav>

    <div class="row p-3 justify-content-center">
      <!--az URL-ben kapott program betöltése-->
      <?php
      if (isset($_GET['program'])) {
          include $_GET['program'];
      } else
          include("fooldal.php");
      ?>
    </div>

  </div>
 
  <script src="bootstrap/jquery-3.5.1.min.js"></script>
  <script src="bootstrap/bootstrap.bundle.js"></script>
  <script>
    let navs = document.getElementsByClassName("nav-link");

      for(let i = 0; i < navs.length; i++){
          if(navs[i].href == document.URL){
            navs[i].style.color = "orange";
          }
      }

  </script>
</body>

</html>