<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />

    <link rel="stylesheet" href="//cdn.datatables.net/1.13.3/css/jquery.dataTables.min.css">
    <title>Jugadores</title>
</head>

<body>

    <div class="container">

        <table id="jugadores" class="table table-striped" style="width:100%">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Apellidos</th>
                    <th>Curp</th>
                    <th>Fecha de nacimiento</th>
                    <th>Estado</th>
                    <th>Actualizar</th>
                    <th>Baja</th>
                </tr>
            </thead>

            <tbody>

                @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->nombre }}</td>
                        <td>{{ $user->apellidos }}</td>
                        <td>{{ $user->curp }}</td>
                        <td>{{ $user->fecha_nac }}</td>
                        <td
                        @if ($user->estatus == 0)
                                style = "color: red;"
                            @else
                            style = "color: green;"
                            @endif
                            >
                            
                            {{ $user->estatus }}
                        </td>
                        <td>
                            <form action="{{route('jugador_form_act', ['id_afiliacion' => $user->id_afiliacion])}}" method="get"><button type="submit"
                                    class="btn btn-primary">Actualizar</button>
                                    <input type="hidden" name="id_afiliacion" value="{{$user->id_afiliacion}}">
                            </form>
                        </td>
                        <td>
                            <form action="{{route('jugador_baja', ['id_afiliacion' => $user->id_afiliacion])}}" method="get"><button type="submit"
                                    class="btn btn-danger">Baja</button>
                                    <input type="hidden" name="id_afiliacion" value="{{$user->id_afiliacion}}">
                                    <input type="hidden" name="estatus" value="0">
                            </form>
                        </td>
                    </tr>
                @endforeach

            </tbody>
            <tfoot>
                <tr>
                    <th>Nombre</th>
                    <th>Apellidos</th>
                    <th>Curp</th>
                    <th>Fecha de nacimiento</th>
                    <th>Estado</th>
                    <th>Baja</th>
                    <th>Actualizar</th>
                </tr>
            </tfoot>
        </table>
        <a name="" id="" class="btn btn-success" href="{{route('jugador_form')}}" role="button">Agregar</a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"
        integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
    <script src="//cdn.datatables.net/1.13.3/js/jquery.dataTables.min.js"></script>
    <script>
        let table = new DataTable('#jugadores');
    </script>
</body>

</html>
