<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LocaFilms</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js">
</head>
<body style="background-color: gray;">
<nav class="bg-dark navbar navbar-expand-lg  ">
  <div class="container-fluid">
    <a class="navbar-brand text-light" href="/index.php">Accueil</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarScroll">
      <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            GENRE
          </a>
          <ul class="dropdown-menu text-light" style="background-color: gray;">
            <li><a class="dropdown-item" style="color:white" href="#">Action</a></li>
            <li><a class="dropdown-item" style="color:white" href="#">Another action</a></li>
          </ul>
        </li>
       
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Recherche" aria-label="Search">
        <button class="btn btn-outline-light" type="submit">Recherche</button>
      </form>
    </div>
  </div>
</nav>

<?= $content ?>
<footer class=" bg-dark d-flex justify-content-center  mt-5 p-1" style="position: absolute; bottom: 0;width: 100%;">
    
      <a href="https://twitter.com/_Wizz_Fr">
        <img src="/public/image/Twitter.png" style="height: 50px;"></a>
      <a href="https://www.instagram.com/clem.clr_/">
        <img src="/public/image/instagram.png" style="height: 50px;"></a>
    
  </footer>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
</body>
</html>