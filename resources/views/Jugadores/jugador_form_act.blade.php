<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <title>Jugadores</title>
</head>

<body>
    <div class="container">
        <h1>Jugador</h1>
        <form action="{{route('jugador_update')}}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="nombreInput" class="form-label">Nombre:</label>
                <input type="text" class="form-control" id="nombre" name="nombre" value="{{$user->nombre}}">
            </div>
            <div class="mb-3">
                <label for="apellidosInput" class="form-label">Apellidos:</label>
                <input type="text" class="form-control" id="apellidos" name="apellidos" value="{{$user->apellidos}}">
            </div>
            <div class="mb-3">
                <label for="curpInput" class="form-label">CURP:</label>
                <input type="text" class="form-control" id="curp" name="curp" value="{{$user->curp}}">
            </div>
            <div class="mb-3">
                <label for="abreviacionInput" class="form-label">Abreviación:</label>
                <input type="date" class="form-control" id="fecha_nac" name="fecha_nac" value="{{$user->fecha_nac}}">
            </div>
            <div class="mb-3">
                <label for="abreviacionInput" class="form-label">Estado:</label>
                <select name="estatus" id="estatus" class="form-select form-select-lg">
                    <option value="0">Baja</option>
                    <option value="1">Alta</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
            <input type="hidden" name="id_afiliacion" value="{{$user->id_afiliacion}}">
        </form>
        <a name="" id="" class="btn btn-success mt-5" href="{{route('jugadores')}}" role="button">Regresar</a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>