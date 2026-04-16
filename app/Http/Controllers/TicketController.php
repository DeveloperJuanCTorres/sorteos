<?php

namespace App\Http\Controllers;

use App\Models\Raffle;
use App\Models\Ticket;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    public function index()
    {
        return view('tickets'); // sin datos al inicio
    }

    public function buscar(Request $request)
    {
        $dni = $request->dni;

        $tickets = Ticket::with('sorteo')
                    ->where('dni', $dni)
                    ->get();

        // separar por estado
        $aprobados = $tickets->where('aprobado', 1);
        $pendientes = $tickets->where('aprobado', 0);

        return view('tickets', compact('tickets', 'aprobados', 'pendientes'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'numero_documento' => 'required',
            'nombres' => 'required',
            'apellidos' => 'required',
            'telefono' => 'required',
            'departamento' => 'required',
            'comprobante' => 'required|file|mimes:jpg,jpeg,png,pdf|max:2048',
        ]);

        $sorteo = Raffle::where('active', 1)->first();

        // Guardar archivo
        $rutaComprobante = null;

        if ($request->hasFile('comprobante')) {
            $rutaComprobante = $request->file('comprobante')->store('comprobantes', 'public');
        }

        Ticket::create([
            'sorteo_id'   => $sorteo->id,
            'dni'         => $request->numero_documento,
            'nombres'     => $request->nombres,
            'apellidos'   => $request->apellidos,
            'telefono'    => $request->telefono,
            'departamento'=> $request->departamento,
            'comprobante' => $rutaComprobante,
            'aprobado'    => 0
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Registro enviado correctamente'
        ]);
    }
}
