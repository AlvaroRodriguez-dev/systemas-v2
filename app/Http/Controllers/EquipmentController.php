<?php

namespace App\Http\Controllers;

use App\Models\Equipment;
use Illuminate\Http\Request;

class EquipmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $equipment = Equipment::all();
        return view('equipments.index', compact('equipment'));
    }

    public function create()
    {
        return view('equipments.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'type' => 'required|in:PC,PORTATIL,CELULAR,ACCESORIO,OTRO',
            'manufacturer' =>'',
            'model' => 'required',
            'serie_number' => 'required|unique:equipment',
            'ram' => 'required',
            'store' => 'required',
            'state' => 'required|in:DISPONIBLE,ASIGNADO,BAJA',
            'purchase_date' => 'nullable|date',
            'note' => 'required'
        ]);

        Equipment::created($request->all());
        return redirect()->route('equipments.index')->witch('success', 'Equipo registrado correctamente');
    }

    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
