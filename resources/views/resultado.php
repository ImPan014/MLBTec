<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
  <!-- para iconos  -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
  <title>Inicio</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="/">
        <img src="images/imagen3.png" style="width:100px; height: 100px;" alt="">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="home">Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="resultado">Resultado</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="Estadisticas">Estadistica</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Enlace dropdown
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item" href="tabla"></a></li>
              <li><a class="dropdown-item" href="#">Otra acción</a></li>
              <li><a class="dropdown-item" href="#">Algo más aquí</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="container row">
    <a href="tabla" style="color: black;" class=" col-sm-12 col-md-12 col-lg-3 col-xl-3">
      <div class="resultadoCaja border border-warning border-4 rounded rounded-3 p-1 col-12">
        <div class=" mt-2 mb-2" style="background-color: #D6EAF8;" hash="tabla">

          <div class="position-relative ps-1" style=" height: 25px;">
            <span class=" position-absolute start-0"> <b>Momento</b> </span>
            <span class="position-absolute end-0"> <b>Tiempo</b> </span>
          </div>
        </div>
        <div class="card mb-3" style="max-width: 540px">
          <div class="row g-0">
            <div class="col-md-4">
              <img src="..." class="img-fluid rounded-start" alt="..." />
            </div>
            <div class="col-md-8 position-relative">
              <span class="card-title position-absolute start-0"><p>EQUIPO</p></span>
              <span class="card-text position-absolute end-0">1</span>
            </div>
          </div>
        </div>
        <hr />
        <div class="card mb-3" style="max-width: 540px">
          <div class="row g-0">
            <div class="col-md-4">
              <img src="..." class="img-fluid rounded-start" alt="..." />
            </div>
            <div class="col-md-8 position-relative">
              <span class="card-title position-absolute start-0">EQUIPO 1</span>
              <span class="card-text position-absolute end-0">1</span>
            </div>
          </div>
        </div>
      </div>
    </a>
  </div>
  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>