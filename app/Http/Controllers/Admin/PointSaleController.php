<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Fridge;
use App\Models\User;
use App\Models\PointSale;
use Illuminate\Http\Request;


class PointSaleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pointsales = PointSale::all();
        
        return view('admin.pointsales.index', compact('pointsales'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $fridge = Fridge::pluck('number','id');
        $user = User::pluck('name','id');

        return view('admin.pointsales.create', [
            'fridge'=>$fridge,
            'user'=>$user
        ]);

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
            'name' => 'required|unique:point_sales',
            'location' => 'required',
            'fridge_id' => 'required|unique:point_sales',
            'user_id' => 'required|unique:point_sales',
        ]);

        $pointsale = Pointsale::create($request->all());
        
        return redirect()->route('admin.pointsales.index', $pointsale)->with('info', 'El Punto se ha creado con exito');
    }
    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Pointsale $pointsale)
    {
        return view('admin.pointsales.show', compact('pointsale'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Pointsale $pointsale)
    {

        $fridge = Fridge::pluck('number','id');
        $user = User::pluck('name','id');

        return view('admin.pointsales.edit',[

            'fridge'=>$fridge,
            'user'=>$user,
        ], compact('pointsale'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pointsale $pointsale)
    {
        $request->validate([
            'name' => "required:point_sales,name,$pointsale->id",
            'location' => 'required',
            'fridge_id' => "required:point_sales,fridge_id,$pointsale->id",
            'user_id' => "required:point_sales,user_id,$pointsale->id",
        ]);

        $pointsale->update($request->all());

        return redirect()->route('admin.pointsales.edit', $pointsale)->with('info', 'El Punto se actualizo con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pointsale $pointsale)
    {
        $pointsale->delete();
        return redirect()->route('admin.pointsales.index', $pointsale)->with('info', 'El Producto se Elimino con exito');
    }

    public function fridge(Fridge $fridge){
        $pointsale = PointSale::where('fridge_id', $fridge ->id);
    }

    public function user(User $user){
        $pointsale = PointSale::where('user_id', $user ->id);
    }
}