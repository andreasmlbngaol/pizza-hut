<?php

namespace App\Http\Controllers;

use App\Models\Selling;
use Illuminate\Http\Request;

class SellingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if(auth()->user()->username !== 'admin') {
            $sellings = Selling::where('user_id', '=', auth()->user()->id)->orderBy('date', 'desc')->get();
        } else {
            $sellings = Selling::orderBy('surplus', 'desc')->get();
        }
        return view('sellings.index', [
            'username' => auth()->user()->username,
            'sellings' => $sellings,
            'title' => 'Sellings', 
            'active' => 'Sellings'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Selling $selling)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Selling $selling)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Selling $selling)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Selling $selling)
    {
        //
    }
}
