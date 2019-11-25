<?php

namespace App\Http\Controllers;

use App\Servicio;
use Illuminate\Http\Request;

class ServicioController extends Controller
{
    public function __construct()
    {
        $this->middleware('Admin');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return View('servicios.index', [
            'servicios' => Servicio::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('servicios.create');
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
            'nombre' => 'required|min:3',
            'descripcion' => 'required|min:3',
            'tarifaEstimada' => 'required',
            'tiempoEstimado' => 'required'
        ]);

        $servicio = new Servicio();
        $servicio->nombre =  $validaData['nombre'];
        $servicio->descripcion =  $validaData['descripcion'];
        $servicio->tarifaEstimada =  $validaData['tarifaEstimada'];
        $servicio->tiempoEstimado =  $validaData['tiempoEstimado'];
        $servicio->save();

        return redirect('/servicios');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $servicio = Servicio::findOrFail($id);
        return view('servicios.edit', [
            'servicio' => $servicio
        ]);
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
        $servicio = Servicio::findOrFail($id);
        $servicio->nombre =  $request->get('nombre');
        $servicio->descripcion =  $request->get('descripcion');
        $servicio->tarifaEstimada =  $request->get('tarifaEstimada');
        $servicio->tiempoEstimado =  $request->get('tiempoEstimado');
        $servicio->save();

        return redirect('/servicios');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $servicio = Servicio::findOrFail($id);
        $servicio->delete();

        return redirect('/servicios');
    }

    public function confirmDelete($id)
    {
        $servicio = Servicio::findOrFail($id);
        return view('servicios.confirmDelete', [
            'servicio' => $servicio
        ]);
    }
}
