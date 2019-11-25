<?php

namespace App\Http\Controllers;


use App\User;
use App\Servicio;
use App\Pago;
use Illuminate\Http\Request;
use Carbon\Carbon;

class HomeEstilistaController extends Controller
{
    public function __construct()
    {
        $this->middleware('Estilista');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('homeEstilista',[
            'servicios' => Servicio::all()->pluck('nombre', 'id'),
            'pagos' => Pago::where('estilista_id',  auth()->user()->id)->get()
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
            'valor' => 'required'
        ]);
        $pago = new Pago;
        $now = new \DateTime();
        $pago->valor = $validaData["valor"];
        $pago->fecha = Carbon::now()->toDateTimeString();
        $pago->servicio_id =$validaData["servicio"];
        $pago->estilista_id = auth()->user()->id;
        $pago->save();
        return redirect('/homeEstilista');
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
        //
    }
}
