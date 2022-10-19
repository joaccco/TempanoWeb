<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Fridge;

class FridgeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fridges = Fridge::all();
        
        return view('admin.fridges.index', compact('fridges'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.fridges.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'number' => 'required|unique:fridges',
            'brand' => 'required',
            'capability' => 'required',
        ]);

        $fridge = Fridge::create($request->all());
        
        return redirect()->route('admin.fridges.edit', $fridge)->with('info', 'La Heladera se almaceno con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Fridge $fridge)
    {
        return view('admin.fridges.show', compact('fridge'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Fridge $fridge)
    {
        return view('admin.fridges.edit', compact('fridge'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Fridge $fridge)
    {
        $request->validate([
            'number' => "required|unique:fridges,number,$fridge->id",
            'brand' => 'required',
            'capability' => 'required',
        ]);

        $fridge->update($request->all());

        return redirect()->route('admin.fridges.edit', $fridge)->with('info', 'La heladera se actualizo con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Fridge $fridge)
    {
        $fridge->delete();
        return redirect()->route('admin.fridges.edit', $fridge)->with('info', 'La heladera se Elimino con exito');
    }
}