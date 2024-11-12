<?php

namespace App\Http\Controllers;

use App\Models\Series;
use Illuminate\Http\Request;

class SeriesController extends Controller
{
    // Display all series on the home page
    public function index(): \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application
    {
        $series = Series::all();
        return view('home', compact('series'));
    }

    // Show the form for creating a new series
    public function create(): \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application
    {
        return view('series.create'); // Adjust this to point to your create view
    }

// Store a newly created series in the database
    public function store(Request $request): \Illuminate\Http\RedirectResponse
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'genre' => 'required|string|max:255',
            'seasons' => 'required|integer',
            'episodes' => 'required|integer',
            'description' => 'required|string',
        ]);

        // Create a new series instance and save it
        $serie = new Series($validatedData);
        $serie->save();

        return redirect()->route('home')->with('success', 'Series created successfully!');
    }


    // Show the form for editing the specified series
    public function edit($id): \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application
    {
        $serie = Series::findOrFail($id);
        return view('series.edit', compact('serie'));
    }

    // Update the specified series in the database
    public function update(Request $request, $id): \Illuminate\Http\RedirectResponse
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'genre' => 'required|string|max:255',
            'seasons' => 'required|integer',
            'episodes' => 'required|integer',
            'description' => 'required|string',
        ]);

        $serie = Series::findOrFail($id);
        $serie->update($validatedData);

        return redirect()->route('home')->with('success', 'Series updated successfully!');
    }

    // Remove the specified series from the database
    public function destroy($id): \Illuminate\Http\RedirectResponse
    {
        $serie = Series::findOrFail($id);
        $serie->delete();

        return redirect()->route('home')->with('success', 'Series deleted successfully!');
    }
}
