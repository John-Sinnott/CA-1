<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('All Drinks') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    {{-- Drink Details --}}
                    <h3 class="font-semibold text-lg mb-4">Drink Details</h3>
                    <x-drink-details 
                        :title="$drink->brand" 
                        :image="$drink->image_url" 
                        :vol="$drink->vol" 
                        :description="$drink->description" 
                        :stocks="$drink->stocks" 
                    />

                    {{-- Existing Stocks --}}
                    <h4 class="font-semibold text-md mt-8">Stocks</h4>
                    @if($drink->stocks->isEmpty())
                        <p class="text-gray-600">No stock yet.</p>
                    @else
                        <ul class="mt-4 space-y-4">
                            @foreach($drink->stocks as $stock)
                                <li class="bg-gray-100 p-4 rounded-lg">
                                    <p class="font-semibold">{{ $stock->user->name }} ({{ $stock->created_at->format('M d, Y') }})</p>
                                    <p>Amount: {{ $stock->rating * 10 }}%</p>
                                    <p>{{ $stock->comment }}</p>
                                </li>
                            @endforeach
                        </ul>
                    @endif

                    {{-- Add Stock --}}
                    <h4 class="font-semibold text-md mt-8">Add Stock</h4>
                    <form action="{{ route('drinks.stocks.store', $drink) }}" method="POST" class="space-y-4">
                        @csrf
                        <div>
                            <label for="rating" class="block font-medium text-gray-700">Amount (%)</label>
                            <select name="rating" id="rating" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
                                @for ($i = 1; $i <= 10; $i++)
                                    <option value="{{ $i }}">{{ $i * 10 }}%</option>
                                @endfor
                            </select>
                        </div>

                        <div>
                            <label for="comment" class="block font-medium text-gray-700">Quality + Date of Stock Delivery</label>
                            <textarea name="comment" id="comment" rows="3" placeholder="Write your stock here..." class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"></textarea>
                        </div>

                        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                            Submit Stock
                        </button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
