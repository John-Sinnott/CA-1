<?php

namespace App\Http\Controllers;

use App\Models\Drink;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DrinkController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $drinks = Drink::all();
        return view('drinks.index', compact('drinks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('drinks.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate input
        $request->validate([
            'brand' => 'required|string|max:255',
            'description' => 'nullable|string',
            'vol' => 'required|string|max:10',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',

        ]);

        // Check if the image is uploaded and handle it
        $imageName = null;
        if ($request->hasFile('image')) {

            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images/drinks'), $imageName);
        }
        // Create a Drink record in the database
        Drink::create([
            'brand' => $request->brand,
            'description' => $request->description,
            'vol' => $request->vol,
            'image_url' => $imageName,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        //Redirect to the indexp age with a success message
        return to_route('drinks.index')->with('success', 'Drink created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Drink $drink)
    {
        return view('drinks.show')->with('drink', $drink);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Drink $drink)
    {
        return view('drinks.edit')->with('drink', $drink);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Drink $drink)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Drink $drink)
    {
        //
    }
}
