<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('All Drinks') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-zinc-400 overflow-hidden shadow-sm sm:rounded-lg">
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
                                <li class="bg-gray-300 p-4 rounded-lg">
                                    <p class="font-semibold">
                                        {{ $stock->user->name }} 
                                        ({{ $stock->created_at->format('M d, Y') }})
                                    </p>
                                    <p class="font-semibold">Rating: {{ $stock->rating }}</p>
                                    <p class="font-semibold">Type: {{ $stock->stock_type }}</p>
                                    <p class="font-semibold">Review:  {{ $stock->comment }}</p>

                                    {{-- Edit/Delete Buttons --}}
                                    @if(auth()->id() === $stock->user_id || auth()->user()->role === 'admin')
                                        <div class="mt-4 flex space-x-2">
                                            {{-- Edit button --}}
                                            <a href="{{ route('drinks.stocks.edit', ['drink' => $drink->id, 'stock' => $stock->id]) }}" class="bg-amber-500 hover:bg-amber-600 text-white font-bold py-1 px-3 rounded" >
                                            Edit
                                            </a>

                                            {{-- Delete button --}}
                                            <form action="{{ route('drinks.stocks.destroy', ['drink' => $drink->id, 'stock' => $stock->id]) }}" 
                                                method="POST"
                                                onsubmit="return confirm('Are you sure you want to delete this review?');">
                                                @csrf
                                                @method('DELETE')
                                                 <button type="submit" class="bg-red-500 hover:bg-red-600 text-white font-bold py-1 px-3 rounded">
                                                    Delete
                                                </button>
                                            </form>
                                        </div>
                                    @endif
                                </li>
                            @endforeach
                        </ul>
                    @endif
               
                    {{-- Add Stock --}}
                    <h4 class="font-bold text-md mt-8">Add Stock</h4>
                    <form action="{{ route('drinks.stocks.store', $drink) }}" method="POST" class="space-y-4">
                        @csrf
                        <div class="flex gap-4">
                            {{-- Wrapped both the option fields in a flex div so that they appear next to eachother aside from underneath with a width of 50% --}}
                            <div class="w-1/2">
                                <label for="rating" class="block text-black font-medium text-bold ">Leave A Rating!</label>
                                    <select name="rating" id="rating" required class="bg-gray-200 mt-1 block w-full border-gray-300 rounded-md shadow-sm">
                                         {{-- This loop creates option elements from 1 - 10.
                                            so i = 1 and the loop runs untill it reaches 10 going up in increments of 1 each time creating an option value for each number. --}}
                                         @for ($i = 1; $i <= 10; $i++)
                                             <option value="{{ $i }}">{{ $i }}</option>
                                        @endfor
                                    </select>
                            </div>
                            {{-- This is the select field for each quantity of drink you can purchase, from single - twelve pack --}}
                        <div class="w-1/2">
                            <label for="stock_type" class="block text-black font-medium text-bold ">Type of Stock</label>
                            <select name="stock_type" id="stock_type" required class="bg-gray-200 mt-1 block w-full border-gray-300 rounded-md shadow-sm">
                                <option  value="Single">Single Item</option>
                                <option  value="Four Pack">Four Pack</option>
                                <option  value="Six Pack">Six Pack</option>
                                <option  value="Ten Pack">Ten Pack</option>
                                <option  value="Twelve Pack">Twelve Pack</option>
                            </select>
                        </div>
                    </div>

                        <div>
                            <label for="comment" class="block text-black font-medium text-bold">Review of Stock</label>
                            <textarea name="comment" id="comment" rows="3" placeholder="Write your review here..." class="bg-gray-200 mt-1 block w-full border-gray-300 rounded-md shadow-sm"></textarea>
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
