<?php

namespace App\Http\Controllers;

use App\Models\Award;
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
        $sorteo = Raffle::where('active', 1)->first();
        $premios = Award::where('raffle_id', $sorteo->id)->get();
        return view('home', compact('sorteo', 'premios'));
    }

    public function tickets()
    {
        return view('tickets');
    }

    public function ganadores()
    {
        return view('ganadores');
    }
}
