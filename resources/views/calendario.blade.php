<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />

@extends('layouts.app')

@section('content')
    <h1>Calendario Lineal</h1>

    <p>Selecciona un día:</p>
    <form action="{{ route('calendario') }}" method="GET">
        <input type="date" name="dia" value="{{ $diaSeleccionado }}">
        <button type="submit">Buscar</button>
    </form>
    <h2>{{ date('l, j F Y', strtotime($diaSeleccionado)) }}</h2>
    <p>{{ $informacionCalendario[$diaSeleccionado] ?? 'No hay información para este día' }}</p>


@endsection

</html>