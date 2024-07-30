<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Trip; // Asegúrate de que esta línea esté correcta

class TripController extends Controller
{
    public function store(Request $request)
{
        // Validación
        $validated = $request->validate([
            'origin' => 'required|string|max:255',
            'destiny' => 'required|string|max:255',
        ]);

        // Crear un nuevo viaje
        $trip = Trip::create($validated);

        // Responder con el viaje creado
        return response()->json($trip, 201);
}

public function index()
{
    $trips = Trip::all();
    return response()->json($trips);
}
}
