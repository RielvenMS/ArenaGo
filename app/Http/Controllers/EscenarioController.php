<?php

namespace App\Http\Controllers;

use App\Models\Escenario;
use Illuminate\Http\Request;

class EscenarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $escenarios = Escenario::with('usuario')->get();
        $escenarioAleatorio = Escenario::inRandomOrder()->first();
        return view('escenarios', compact('escenarios', 'escenarioAleatorio'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('escenarios.create');
    }

    public function show($id)
    {
        $escenario = Escenario::findOrFail($id)->refresh();
        return view('escenarios.detalle', compact('escenario'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'nombre_escenario' => 'required|string|max:255',
            'descripcion'      => 'nullable|string',
            'direccion'        => 'required|string',
            'latitud'          => 'required|numeric|between:-90,90',
            'longitud'         => 'required|numeric|between:-180,180',
            'municipio'        => 'required|string',
            'deporte'          => 'required|string',
            'estado'           => 'required|string', // ASEGÚRATE DE QUE ESTÉ AQUÍ
            'horarios'         => 'nullable|string',
            'iluminacion'      => 'required|string',
            'suelo'            => 'required|string',
            'capacidad'        => 'required|integer',
            'imagen'           => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'banos'      => 'required|string',
        ]);

        // Lógica para guardar la foto en storage/app/public/escenarios
        if ($request->hasFile('imagen')) {
            $ruta = $request->file('imagen')->store('escenarios', 'public');
            $data['imagen'] = $ruta;
        }

        $data['user_id'] = auth()->id(); // Asigna el usuario logueado automáticamente
        Escenario::create($data);

        return redirect()->route('escenarios.index')->with('success', 'Escenario creado.');
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Escenario $escenario)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Escenario $escenario)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Escenario $escenario)
    {
        //
    }

    public function mapa(Request $request)
    {
        // Iniciamos la consulta
        $query = Escenario::query();

        // Filtro por Municipio
        if ($request->filled('municipio')) {
            $query->where('municipio', $request->municipio);
        }

        // Filtro por Deporte (soporta múltiples seleccionados)
        if ($request->filled('deporte')) {
            $query->whereIn('deporte', $request->deporte);
        }

        // Obtenemos los resultados filtrados
        $escenarios = $query->get();

        return view('mapa', compact('escenarios'));
    }

    public function apiEscenarios(Request $request)
    {
        // 1. Iniciamos la consulta
        $query = Escenario::query();

        // 2. Filtro de Municipio: Si viene un valor, filtramos estrictamente
        if ($request->filled('municipio')) {
            $query->where('municipio', '=', $request->municipio);
        }

        // 3. Filtro de Deporte: Filtramos solo por los seleccionados
        if ($request->filled('deporte')) {
            $query->whereIn('deporte', (array)$request->deporte);
        }

        return response()->json($query->get());
    }
}
