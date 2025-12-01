<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use App\Models\Drink;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $orders = Order::with('drinks')->get();
        return view('orders.index', compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $drinks = Drink::all();
        return view('orders.create', compact('drinks'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'customer_name' => 'required|string|max:255',
            'comment' => 'nullable|string|max:1000',
            'order_date' => 'nullable|date',
            'drinks' => 'nullable|array',
            'quantity' => 'nullable|integer|min:1',
        ]);

        $order = Order::create([
            'customer_name' => $data['customer_name'],
            'comment' => $data['comment'] ?? null,
            'order_date' => $data['order_date'] ?? null,
            'quantity' => $data['quantity'] ?? 0,
        ]);

        // Attach selected drinks to the pivot table 
        if (!empty($data['drinks'])) {
            foreach ($data['drinks'] as $drinkId) {
                $order->drinks()->attach($drinkId);
            }
        }

        return redirect()->route('orders.show', $order)->with('success', 'Order created!');
    }
    

    /**
     * Display the specified resource.
     */
    public function show(Order $order)
    {
        $order->load('drinks.stocks');
        return view('orders.show', compact('order'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Order $order)
    {
        $order->load('drinks');
        $drinks = Drink::all();
        return view('orders.edit', compact('order', 'drinks'));
        $order->drinks()->sync($request->input('drinks', []));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Order $order)
    {
        $data = $request->validate([
            'customer_name' => 'required|string|max:255',
            'comment' => 'nullable|string|max:1000',
            'order_date' => 'nullable|date',
            'drinks' => 'nullable|array',
            'quantity' => 'nullable|integer|min:1',
        ]);

        $order->update([
            'customer_name' => $data['customer_name'],
            'comment' => $data['comment'] ?? null,
            'order_date' => $data['order_date'] ?? null,
            'quantity' => $data['quantity'] ?? $order->quantity,
        ]);


        $order->drinks()->sync($data['drinks'] ?? []);

        return redirect()->route('orders.show', $order)->with('success', 'Order updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Order $order)
    {
        $order->delete();
        return redirect()->route('orders.index')->with('success', 'Order deleted successfully.');
    }
}
