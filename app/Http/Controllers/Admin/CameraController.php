<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Camera;
use Illuminate\Http\Request;

class CameraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cameras = Camera::all();
        
        return view('admin.cameras.index', compact('cameras'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.cameras.create');
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
            'number' => 'required|unique:cameras',
            'brand' => 'required',
            'detail' => 'required',
        ]);

        $camera = Camera::create($request->all());
        
        return redirect()->route('admin.cameras.index', $camera)->with('info', 'La Camara se almaceno con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Camera $camera)
    {
        return view('admin.cameras.show', compact('camera'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Camera $camera)
    {
        return view('admin.cameras.edit', compact('camera'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Camera $camera)
    {
        $request->validate([
            'number' => "required|unique:cameras,number,$camera->id",
            'brand' => 'required',
            'detail' => 'required',
        ]);

        $camera->update($request->all());

        return redirect()->route('admin.cameras.edit', $camera)->with('info', 'La Camara se actualizo con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Camera $camera)
    {
        $camera->delete();

        return redirect()->route('admin.cameras.index', $camera)->with('info', 'La Camara se Elimino con exito');
    }
}
