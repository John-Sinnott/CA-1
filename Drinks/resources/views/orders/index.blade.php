<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Orders') }}
        </h2>
    </x-slot>

    <div class="py-12"> 
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-gray-400 overflow-hidden shadow-sm sm:rounded-lg p-6">
                <div class="p-6 text-gray-900">
                    <h3 class="font-semibold text-lg mb-4">List of Orders</h3>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                    @foreach($orders as $order)
                        <div class="bg-zinc-200 border p-4 rounded-lg shadow-md hover:shadow-lg transition duration-200">
                            <a href="{{ route('orders.show', $order) }}">
                                <x-order-card
                                :customer_name="$order->customer_name"
                                :comment="$order->comment"
                                :quantity="$order->quantity"
                                :order_date="$order->order_date"
                                :order="$order"
                                
                                />
                            </a>

                            {{-- Edit and Delete Buttons --}}
                            <div class="mt-4 flex space-x-2">
                                @if(auth()->user()->role === 'admin')
                                    <a href="{{ route('orders.edit', $order) }}" 
                                       class="bg-blue-300 hover:bg-blue-600 text-black font-bold py-2 px-4 rounded">
                                       Edit
                                    </a>
                                    <form action="{{ route('orders.destroy', $order) }}" method="POST" 
                                          onsubmit="return confirm('Are you sure you want to delete this order?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" 
                                                class="bg-red-300 hover:bg-red-600 text-gray-800 font-bold py-2 px-4 rounded">
                                            Delete
                                        </button>
                                    </form>
                                @endif
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    {{-- Success alert component --}}
    <x-alert-success>
        {{ session('success') }}
    </x-alert-success>
</x-app-layout>
