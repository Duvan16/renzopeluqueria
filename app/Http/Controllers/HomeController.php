<?php

namespace App\Http\Controllers;

use App\Cita;
use App\User;
use App\Servicio;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('Cliente');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home', [
            'citas' => Cita::where('cliente_id',  auth()->user()->id)->get(),
            'servicios' => Servicio::all(),
            'users' => User::where('role_id',  3)->get()
        ]);
    }
}
