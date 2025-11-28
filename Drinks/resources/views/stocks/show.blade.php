<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Stock Review Details
        </h2>
    </x-slot>

    <div class="py-12 max-w-2xl mx-auto">
        <div class="bg-white p-6 rounded-lg shadow space-y-4">
            <div>
                <h3 class="font-semibold text-gray-700">Drink</h3>
                <p>{{ $stock->drink->brand ?? 'N/A' }}</p>
            </div>

            <div>
                <h3 class="font-semibold text-gray-700">Rating</h3>
                <p>{{ $stock->rating }}</p>
            </div>

            <div>
                <h3 class="font-semibold text-gray-700">Stock Type</h3>
                <p>{{ $stock->stock_type }}</p>
            </div>

            <div>
                <h3 class="font-semibold text-gray-700">Review</h3>
                <p>{{ $stock->comment ?? 'No comment' }}</p>
            </div>

            <div class="flex space-x-2">
                <a href="{{ route('stocks.edit', $stock) }}" 
                   class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded">
                   Edit
                </a>
                <a href="{{ route('stocks.index') }}" 
                   class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded">
                   Back
                </a>
            </div>
        </div>
    </div>
</x-app-layout>
