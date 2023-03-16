<?php 
namespace App\Http\Controllers;

use App\Models\jugadores;
use Illuminate\Http\Request;
use App\Models\calendario;
use App\Http\Requests\CalendarioRequest;
use Spatie\LaravelIgnition\Recorders\QueryRecorder\Query;
use Carbon\Carbon;


class CalendarioController extends Controller
{
    public function index(Request $request)
    {
        // Lógica para obtener información del calendario
        $informacionCalendario = [
            '2023-03-15' => 'Cumpleaños de Juan',
            '2023-03-20' => 'Inicio de la primavera',
            '2023-03-25' => 'Inicio de la semana',
            '2023-03-30' => 'Inicio de la tarde',   
        ];

        // Obtener el día seleccionado en la URL
        $diaSeleccionado = $request->query('dia', date('Y-m-d'));
      

        return view('calendario', [
            'informacionCalendario' => $informacionCalendario,
            'diaSeleccionado' => $diaSeleccionado,
       
        ]);
    }

}


?>

