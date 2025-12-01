<?php

namespace App\Http\Controllers;
//ppp
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
        $drink->load('stocks.user');
        $drink->load('orders');
        return view('drinks.show', compact('drink'));
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
        $request->validate([
            'brand' => 'required|string|max:255',
            'description' => 'nullable|string',
            'vol' => 'required|string|max:10',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Handle image upload if provided
        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images/drinks'), $imageName);
            $drink->image_url = $imageName;
        }

        // Update the Fields
        $drink->brand = $request->brand;
        $drink->description = $request->description;
        $drink->vol = $request->vol;

        // Save changes
        $drink->save();

        return redirect()
            ->route('drinks.index')
            ->with('success', 'Drink updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Drink $drink)
    {
        // If the drink has an image, delete it from storage
        if ($drink->image_url && file_exists(public_path('images/drinks/' . $drink->image_url))) {
            unlink(public_path('images/drinks/' . $drink->image_url));
        }

        $drink->delete();

        return redirect()
            ->route('drinks.index')
            ->with('success', 'Drink deleted successfully!');
    }
}
