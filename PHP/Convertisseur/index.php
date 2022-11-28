<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Convertisseur</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
</head>
<body>
<nav class="navbar navbar-expand-lg bg-primary">
  <div class="container-fluid bg-primary">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">Disabled</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<h1>HTLM</h1>
<div>
<?php
$tab = array("Angleterre",
"USA" ,
"Canada" ,
"Japon" ,
"Maroc" ,
"Mexique",
"Inde" );
$pays = readline("entrez un pays : ");
$value = readline("entrez un nombre a convertir : ");

switch ($pays) {

    case 'Angleterre':
        $value = $value * 0.88;
        echo "= " . $value . " Livre sterling" ;
        break ;
    
    case 'USA' :
        $value = $value * 1.04;
        echo "= " . $value . " Dollars" ; 
        break ;
    
    case 'Canada' :
        $value = $value * 1.38;
        echo "= " . $value . " Dollars CA" ; 
        break ;

    case 'Japon' : 
       $value = $value * 145;
        echo "= " . $value . " Yen" ; 
        break ;
    
    case 'Mexique' :
        $value = $value * 20;
        echo "= " . $value . " Pesos" ; 
        break ;

    case 'Maroc' :
        $value = $value * 11.11;
        echo "= " . $value . " Dirham marocain" ; 
        break ;

    case 'Inde' : 
        $value = $value * 84.5;
        echo "= " . $value . " Roupie indienne" ; 
        break ;

}
?>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
</div>



</body>
</html>