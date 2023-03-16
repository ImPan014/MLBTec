<?php

namespace App\Http\Controllers;

use App\Models\Ampayer;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class AmpayerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = Ampayer::all();
        return view('Ampayers.ampayer_index', ['users' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Ampayers.ampayer_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $Ampayer = new Ampayer();

        $Ampayer->fill([
            'nombre' => request('nombre'),
            'apellidos' => request('apellidos'),
            'fecha_nac' => request('fecha_nac'),
            'curp' => request('curp'),
            'estado' => request('estado')
        ]);

        $Ampayer->save();

        return redirect()->route('ampayer_index');

    }

    /**
     * Display the specified resource.
     */
    public function show($id_ampayer)
    {
        $user = Ampayer::find($id_ampayer);
        return view('ampayer_show', ['user' => $user]);
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id_ampayer)
    {
        $user = Ampayer::find($id_ampayer);
        return view('Ampayers.ampayer_edit', ['user' => $user]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $Ampayer = Ampayer::find($request->input('id_ampayer'));

        $Ampayer->fill([
            'nombre' => request('nombre'),
            'apellidos' => request('apellidos'),
            'fecha_nac' => request('fecha_nac'),
            'curp' => request('curp'),
            'estado' => request('estado')
        ]);

        $Ampayer->save();

        return redirect()->route('ampayer_index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function down(Request $request)
    {
        $Ampayer = Ampayer::find($request->input('id_ampayer'));

        $Ampayer->fill([
            'estado' => request('estado')
        ]);

        $Ampayer->save();

        return redirect()->route('ampayer_index');
    }
}
