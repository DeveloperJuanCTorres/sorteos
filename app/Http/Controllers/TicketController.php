<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Raffle;
use App\Models\Ticket;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    public function index()
    {
        $empresa = Company::first();
        return view('tickets', compact('empresa')); // sin datos al inicio
    }

    public function buscar(Request $request)
    {
        $empresa = Company::first();
        $dni = $request->dni;

        $tickets = Ticket::with('sorteo')
                    ->where('dni', $dni)
                    ->get();

        // separar por estado
        $aprobados = $tickets->where('aprobado', 1);
        $pendientes = $tickets->where('aprobado', 0);

        $sinResultados = $tickets->isEmpty();

        return view('tickets', compact('tickets', 'aprobados', 'pendientes', 'empresa', 'sinResultados'))->with('busqueda', true);
    }

    public function store(Request $request)
    {

        $request->validate([
            'tipo_documento' => 'required|in:dni,ce,pasaporte',

            'numero_documento' => [
                'required',
                'string',
                function ($attr, $value, $fail) use ($request) {
                    if ($request->tipo_documento === 'dni' && !preg_match('/^\d{8}$/', $value)) {
                        $fail('El DNI debe tener 8 dígitos.');
                    }
                    if ($request->tipo_documento === 'ce' && strlen($value) < 9) {
                        $fail('Carnet inválido.');
                    }
                    if ($request->tipo_documento === 'pasaporte' && strlen($value) < 6) {
                        $fail('Pasaporte inválido.');
                    }
                }
            ],

            'nombres' => 'required|regex:/^[\pL\s]+$/u',
            'apellidos' => 'required|regex:/^[\pL\s]+$/u',

            'correo' => 'required|email',
            'telefono' => 'required|digits:9',

            'departamento' => 'required|string',

            'comprobante' => 'required|file|mimes:jpg,jpeg,png|max:2048', // 2MB
        ]);

        // $request->validate([
        //     'numero_documento' => 'required',
        //     'nombres' => 'required',
        //     'apellidos' => 'required',
        //     'telefono' => 'required',
        //     'departamento' => 'required',
        //     'comprobante' => 'required|file|mimes:jpg,jpeg,png,pdf|max:2048',
        // ]);

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
