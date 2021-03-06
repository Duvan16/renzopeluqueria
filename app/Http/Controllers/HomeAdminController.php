<?php

namespace App\Http\Controllers;

use App\User;
use App\Servicio;
use App\Pago;
use Illuminate\Http\Request;
use Carbon\Carbon;

class HomeAdminController extends Controller
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
        return view('homeAdmin', [
            'servicios' => Servicio::all()->pluck('nombre', 'id'),
            'estilistas' => User::where('role_id',  3)->get()->pluck('name', 'id'),
            'pagos' => Pago::where('estado',  0)->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'servicio' => 'required',
            'estilista' => 'required',
            'valor' => 'required'
        ]);
        $pago = new Pago;
        $now = new \DateTime();
        $pago->valor = $validaData["valor"];
        $pago->fecha = Carbon::now()->toDateTimeString();
        $pago->servicio_id = $validaData["servicio"];
        $pago->estilista_id = $validaData["estilista"];
        $pago->save();
        return redirect('/homeAdmin');
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
        $pago = Pago::findOrFail($id);
        $pago->estado = true;
        $pago->save();

        return redirect('/homeAdmin');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pago = Pago::findOrFail($id);
        $pago->delete();

        return redirect('/homeAdmin');
    }
}
