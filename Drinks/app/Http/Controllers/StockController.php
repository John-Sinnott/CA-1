<?php

namespace App\Http\Controllers;

use App\Models\Stock;
use App\Models\Drink;
use Illuminate\Http\Request;

class StockController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $stocks = Stock::with('drink')->get();
        return view('stocks.index', compact('stocks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $drinks = Drink::all(); // fetch all drinks
        return view('stocks.create', compact('drinks'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request,)
    {
        $validated = $request->validate([
            'drink_id' => 'required|exists:drinks,id',
            'rating' => 'required|integer|min:1|max:25',
            'stock_type' => 'required|string',
            'comment' => 'nullable|string|max:1000',
        ]);

        $drink = Drink::findOrFail($validated['drink_id']);

        $drink->stocks()->create([
            'user_id' => auth()->id(),
            'rating' => $validated['rating'],
            'stock_type' => $validated['stock_type'],
            'comment' => $validated['comment'],
        ]);

        return redirect()->route('drinks.show', $drink)
            ->with('success', 'Stock added successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Drink $drink, Stock $stock) {
        return view('stocks.show', compact('stock'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Drink $drink, Stock $stock)
    {
        return view('stocks.edit', compact('drink', 'stock'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Drink $drink, Stock $stock)
    {
        $validated = $request->validate([
            'rating' => 'required|integer|min:1|max:25',
            'stock_type' => 'required|string',
            'comment' => 'nullable|string|max:1000',
        ]);

        $stock->update([
            'rating' => $validated['rating'],
            'stock_type' => $validated['stock_type'],
            'comment' => $validated['comment'],
        ]);

        $stock->update($validated);

        return redirect()->route('drinks.show', $stock->drink_id)
            ->with('success', 'Stock updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Drink $drink, Stock $stock)
    {
        $stock->delete();

        return redirect()->route('drinks.show', $drink)
            ->with('success', 'Stock deleted successfully.');
    }
}
