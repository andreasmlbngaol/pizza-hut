<?php

namespace App\Http\Controllers;

use App\Models\Area;
use App\Models\User;
use App\Models\Survey;
use App\Models\District;
use App\Models\Position;
use Illuminate\Http\Request;

class SurveyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if(auth()->user()->username !== 'admin') {
            $surveys = Survey::where('user_id', '=', auth()->user()->id)->orderBy('date', 'desc')->get();
        } else {
            $surveys = Survey::orderBy('rating', 'desc')->get();
        }
        return view('surveys.index', [
            'username' => auth()->user()->username,
            'surveys' => $surveys,
            'title' => 'Surveys', 
            'active' => 'Surveys',
            'user' => auth()->user()->username
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if(auth()->user()->username !== 'admin') {
            return redirect('/surveys');
        }
        return view('surveys.create', [
            'title' => 'Add Surveys',
            'active' => 'Surveys',
            'users' => User::all(),
            'areas' => Area::all(),
            'districts' => District::all(),
            'positions' => Position::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'user_id' => 'required',
            'date' => 'required',
            'rating' => 'required|min:0|max:10',
            'description' => 'required'
        ]);
        Survey::create($validatedData);
        return redirect('/surveys')->with('success', 'Survey added');
    }

    /**
     * Display the specified resource.
     */
    public function show(Survey $survey)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Survey $survey)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Survey $survey)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Survey $survey)
    {
        //
    }
}
