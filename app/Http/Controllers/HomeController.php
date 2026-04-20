<?php

namespace App\Http\Controllers;

use App\Models\Award;
use App\Models\Company;
use App\Models\Raffle;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $empresa = Company::first();
        // $sorteo = Raffle::where('active', 1)->first();
        // $premios = Award::where('raffle_id', $sorteo->id)->get();

        // 📌 Todos los sorteos activos
        $sorteos = Raffle::where('active', 1)
            ->orderBy('date', 'asc')
            ->get();

        // 🎯 El más próximo
        $sorteo = $sorteos->first();

        // 🏆 Premios del más próximo
        $premios = $sorteo 
            ? Award::where('raffle_id', $sorteo->id)->get()
            : collect();

        return view('home', compact('sorteos', 'sorteo', 'premios', 'empresa'));
    }

    public function tickets()
    {
        $empresa = Company::first();
        return view('tickets', compact('empresa'));
    }

    public function ganadores()
    {
        $empresa = Company::first();
        $sorteos = Raffle::where('active', 1)
            ->orderBy('date', 'asc')
            ->get();
        $awards = Award::whereIn('raffle_id', $sorteos->pluck('id'))->get();
        return view('ganadores', compact('empresa', 'sorteos', 'awards'));
    }
}
