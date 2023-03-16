<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\jugadores;
use Illuminate\Http\Request;

class jugadoresController extends Controller
{
        public function proximosPartidos()
    {
        $partidos = jugadores::where('fecha_nac', '>=', Carbon::now()->format('Y-m-d'))
            ->orderBy('fecha_nac', 'asc')
            ->get();
        return view('partidos.proximos', ['partidos' => $partidos]);
    }
        /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = jugadores::all();
        return view('Jugadores.jugadores', ['users' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Jugadores.jugador_form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $Jugadores = new jugadores();

        $Jugadores->fill([
            'nombre' => request('nombre'),
            'apellidos' => request('apellidos'),
            'fecha_nac' => request('fecha_nac'),
            'curp' => request('curp'),
            'estatus' => request('estatus')
        ]);

        $Jugadores->save();

        return redirect()->route('jugadores');

    }

    /**
     * Display the specified resource.
     */
    public function show($id_afiliacion)
    {
        $user = jugadores::find($id_afiliacion);
        return view('jugador', ['user' => $user]);
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id_afiliacion)
    {
        $user = jugadores::find($id_afiliacion);
        return view('Jugadores.jugador_form_act', ['user' => $user]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $Jugadores  = jugadores::find($request->input('id_afiliacion'));

        $Jugadores->fill([
            'nombre' => request('nombre'),
            'apellidos' => request('apellidos'),
            'fecha_nac' => request('fecha_nac'),
            'curp' => request('curp'),
            'estatus' => request('estatus')
        ]);

        $Jugadores->save();

        return redirect()->route('jugadores');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $Jugadores = jugadores::find($request->input('id_afiliacion'));

        $Jugadores->fill([
            'estatus' => request('estatus')
        ]);

        $Jugadores->save();

        return redirect()->route('jugadores');
    }
}
