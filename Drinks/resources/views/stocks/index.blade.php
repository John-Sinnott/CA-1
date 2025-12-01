<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Stock Reviews
        </h2>
    </x-slot>

    <div class="py-12 max-w-4xl mx-auto">
        <div class="bg-white p-6 rounded-lg shadow">
            <a href="{{ route('stocks.create') }}"
               class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mb-4 inline-block">
                Add New Review
            </a>
            <!-- Creates a table display, shows all the related headings for the stocks -->
            <table class="min-w-full divide-y divide-gray-200 mt-4">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">ID</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Drink</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Rating</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Stock Review</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Stock Type</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Actions</th>
                    </tr>
                </thead>
                <!-- foreach individual stock with a stock review adds their data in a table format -->
                <tbody class="bg-white divide-y divide-gray-200">
                    @foreach($stocks as $stock)
                        <tr>
                            <td class="px-6 py-4">{{ $stock->id }}</td>
                            <td class="px-6 py-4">{{ $stock->drink->brand ?? 'N/A' }}</td>
                            <td class="px-6 py-4">{{ $stock->rating }}</td>
                            <td class="px-6 py-4"><textarea name="" id="">{{ $stock->comment }}</textarea></td>
                            <td class="px-6 py-4">{{ $stock->stock_type }}</td>
                            <td class="px-6 py-4  space-x-2">
                                <!-- view link to route to stocks.show which shows the indivual stock information -->
                                <a href="{{ route('drinks.stocks.show', ['drink' => $stock->drink->id, 'stock' => $stock->id]) }}" class="text-blue-600 hover:text-blue-900">
                                    View
                                </a>
                                <!-- edit link routes to stocks.edit to edit and update a stock -->
                                <a href="{{ route('drinks.stocks.edit', ['drink' => $stock->drink->id, 'stock' => $stock->id]) }}" class="text-yellow-600 hover:text-yellow-900">
                                    Edit
                                </a>
                                <form action="{{ route('drinks.stocks.destroy', ['drink' => $stock->drink->id, 'stock' => $stock->id]) }}" method="POST" class="inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-600 hover:text-red-900" onclick="return confirm('Are you sure?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            @if($stocks->isEmpty())
                <p class="mt-4 text-gray-500">No stock reviews yet.</p>
            @endif
        </div>
    </div>
</x-app-layout>
