@import url("https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css");
<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estadisticas</title>
    <link rel="stylesheet" href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <!-- Agregar referencia a Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" integrity="sha384-Lj8Gv1+XZuJnaaebz7WwK8NGv7VJ5En5Q5L5qK3UK1zG9f0FJiYdZw58DJbKc+xV" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">SofTEC</a>
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
                        <a class="nav-link active" aria-current="page" href="resultado">Estadistica</a>
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
    <nav class="navbar navbar-light bg-light p-3">
        <div class="container-fluid">
            <ul class="nav nav-tabs">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">
                        <img src="/images/boleto.png" style="width: 20px; height: 20px;"  >
                        Temporada
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">2023</a></li>
                        <li><a class="dropdown-item" href="#">2022</a></li>
                        <li><a class="dropdown-item" href="#">2021</a></li>
                        <li><a class="dropdown-item" href="#">2020</a></li>
                        <li><a class="dropdown-item" href="#">2019</a></li>
                        <li><a class="dropdown-item" href="#">2018</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">
                        <img src="/images/beisbol.png" style="width: 20px; height: 20px;">
                        Posiciones
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Lanzador</a></li>
                        <li><a class="dropdown-item" href="#">Receptor</a></li>
                        <li><a class="dropdown-item" href="#">Primera base</a></li>
                        <li><a class="dropdown-item" href="#">Segunda base</a></li>
                        <li><a class="dropdown-item" href="#">Tercera base</a></li>
                        <li><a class="dropdown-item" href="#">Campocorto</a></li>
                        <li><a class="dropdown-item" href="#">Jardinero Izquierdo</a></li>
                        <li><a class="dropdown-item" href="#">Jardinero Derecho</a></li>
                        <li><a class="dropdown-item" href="#">Jardinero Central</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">
                        <img src="/images/calendario.png" style="width: 20px; height: 20px;" >
                        Hasta La Fecha
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">3 Dias</a></li>
                        <li><a class="dropdown-item" href="#">1 Semana</a></li>
                        <li><a class="dropdown-item" href="#">15 Dias</a></li>
                        <li><a class="dropdown-item" href="#">Mes</a></li>
                    </ul>
                </li>
            </ul>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Buscar">
                <button class="btn btn-outline-success" type="submit">
                    <img src="/images/lupa.png" style="width: 25px; height: 25px;">
                </button>
            </form>
        </div>
    </nav>
    <div class="btn-group m-5" role="group" aria-label="Basic mixed styles example">
        <a href="Estadisticas">
            <button type="button active" class="btn btn-primary breadcrumb-item active">
                <img src="/images/baseball-player.png" style="width: 50px; height: 50px;">
                Jugador

            </button>
        </a>
        <a href="EstadisticaEquipo">
            <button type="button" class="btn btn-success ms-4">
                <img src="/images/beisbol.png" style="width: 50px; height: 50px;">
                Equipo
            </button>
        </a>

    </div>
  
    <i class="fa-regular fa-baseball-bat-ball"></i>
    <i class="fa fa-user"></i>
    <i class="fa-solid fa-magnifying-glass"></i>
    <nav class="ms-5" style="--bs-breadcrumb-divider: '';" aria-label="breadcrumb">

        <ol class="breadcrumb">

            <li class="breadcrumb-item active" aria-current="page">
                <img src="images/bate.png" style="width: 20px; height: 20px;">
                Bateadores
                </a>
            </li>
            <li class="breadcrumb-item" style="text-decoration: none;"><a href="#">
                <img src="images/lanzador.png" style="width: 20px; height: 20px;">
                Lanzadores
            </a></li>

        </ol>
    </nav>
    <table class="table">
        <thead class="table-dark">
            <tr>
                <th scope="col">Jugador</th>
                <th scope="col">Equipo</th>
                <th scope="col">J</th>
                <th scope="col">TB</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td colspan="2">Larry the Bird</td>
                <td>@twitter</td>
            </tr>
        </tbody>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>