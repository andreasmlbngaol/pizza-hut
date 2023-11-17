<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use Illuminate\Http\Request;

class RecipeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('recipes.index', [
            'recipes' => Recipe::orderBy('name')->get(),
            'title' => 'Recipes', 
            'active' => 'Recipes',
            'user' => auth()->user()->username
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if(auth()->user()->username !== 'admin') {
            return redirect('/recipes');
        }
        return view('recipes.create', [
            'title' => 'Add Recipe',
            'active' => 'Recipes',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'making' => 'required',
            'serving' => 'required'
        ]);
        Recipe::create($validatedData);
        return redirect('/recipes')->with('success', 'Recipe added');
    }

    /**
     * Display the specified resource.
     */
    public function show(Recipe $recipes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Recipe $recipes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Recipe $recipes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Recipe $recipes)
    {
        //
    }
}
