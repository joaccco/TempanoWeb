<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\Ticket;
use App\Models\User;

class TicketsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tickets = Ticket::all();
        
        return view('admin.tickets.index', compact('tickets'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $products = Product::all();
        $users = User::pluck('name', 'id');

        return view('admin.tickets.create', compact('products', 'users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        $ticket = Ticket::create($request->all());

        if ($request->product) {
            $ticket->products()->attach($request->products);
           }

        return redirect()->route('admin.tickets.edit', $ticket)->with('info', 'El remito se almaceno con exito'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view ('admin.tickets.show', compact('ticket'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::pluck('name', 'id');
        $user = User::pluck('user', 'id');

        return view('admin.tickets.create', compact('products', 'users'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ticket $ticket)
    {
        $request->validate([
            'number' => "required|unique:products,number,$ticket->id",
            'date' => 'required|unique:products',
            'mount' => 'required',
            'status' => 'required',
            'detail' => 'required',
            'product_id' => 'required',
            'user_id' => 'required',

        ]);
        $ticket = Ticket::update($request->all());
        
        return redirect()->route('admin.tickets.edit', $ticket)->with('info', 'El remito se actualizo con exito'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
