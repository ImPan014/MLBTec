
@extends('layouts.navBar')

@section('title','EstadisticaEquipo')

@section('navBar')
<nav class="navbar navbar-light bg-light p-3">
    <div class="container-fluid">
        <ul class="nav nav-tabs">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Temporada</a>
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
                <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Fecha de Juego</a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">3 Dias</a></li>
                    <li><a class="dropdown-item" href="#">1 Semana</a></li>
                    <li><a class="dropdown-item" href="#">15 Dias</a></li>
                    <li><a class="dropdown-item" href="#">Mes</a></li>
                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Enlace</a>
            </li>
        </ul>
        <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Buscar">
            <button class="btn btn-outline-success" type="submit">Buscar</button>
        </form>
    </div>
</nav>
<div class="btn-group m-5" role="group" aria-label="Basic mixed styles example">
    <a href="Estadisticas">
        <button type="button" class="btn btn-danger">Jugador</button>
    </a>
    <a href="EstadisticaEquipo">
        <button type="button" class="btn btn-success ms-4">Equipo</button>
    </a>
</div>
<nav class="ms-5" style="--bs-breadcrumb-divider: '';" aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item" style="text-decoration: none;"><a href="#">Bateadores</a></li>
        <li class="breadcrumb-item active" aria-current="page">Lanzadores</a></li>


    </ol>
</nav>
<table class="table">
    <thead class="table-dark">
        <tr>
            <th scope="col">Equipo</th>
            <th scope="col">Jugador</th>
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
@endsection