<?php

namespace App\Http\Controllers;

use App\Cita;
use App\User;
use App\Servicio;
use Illuminate\Http\Request;

class CitaController extends Controller
{
    public function __construct()
    {
        
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('citas.index', [
            'estilistas' => User::where('role_id',  3)->get()->pluck('name', 'id'),
            'citas' => Cita::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('citas.create', [
            'servicios' => Servicio::all()->pluck('nombre', 'id'),
            'estilistas' => User::where('role_id',  3)->get()->pluck('name', 'id')
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validaData = $request->validate([
            'fecha' => 'required',
            'hora' => 'required',
            'servicio' => 'required',
            'estilista' => 'required'
        ]);
        $cita = new Cita;
        $cita->fecha = $validaData["fecha"];
        $cita->hora = $validaData["hora"];
        $cita->cliente_id =  auth()->user()->id;
        $cita->servicio_id = $validaData["servicio"];
        $cita->estilista_id = $validaData["estilista"];
        $cita->save();
        return redirect('/home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cita = Cita::where('estilista_id',  $id)->get();
        return view('citas.index', [
            'estilistas' => User::where('role_id',  3)->get()->pluck('name', 'id'),
            'citas' => $cita
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cita = Cita::findOrFail($id);
        $cita->delete();

        return redirect('/home');
    }
}
