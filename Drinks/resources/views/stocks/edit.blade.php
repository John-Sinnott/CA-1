<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Edit Review
        </h2>
    </x-slot>

    <div class="py-12 max-w-2xl mx-auto">
        <div class="bg-white p-6 rounded-lg shadow">
            <form action="{{ route('stocks.update', $stock) }}" method="POST" class="space-y-4">
                @csrf
                @method('PUT')

                <div>
                     <label for="rating" class="block font-medium text-gray-700">Rating</label>
                                    <select name="rating" id="rating" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
                                      
                                         {{-- This loop creates option elements from 1 - 10.
                                            so i = 1 and the loop runs untill it reaches 10 going up in increments of 1 each time creating an option value for each number. --}}
                                         @for ($i = 1; $i <= 10; $i++)
                                             <option value="{{ $i }}" {{ (old('rating', $stock->rating ?? '') == $i) ? 'selected' : '' }}>
                                                {{ $i }}
                                        @endfor
                                    </select>
                </div>

                <div>
                    <label for="comment" class="block font-medium text-gray-700">Review</label>
                    <textarea name="comment" id="comment" rows="3" 
                        class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">{{ $stock->comment }}</textarea>
                </div>

                <div>
                    <select name="stock_type" id="stock_type">
                                <option  value="single">Single Item</option>
                                <option  value="four_pack">Four Pack</option>
                                <option  value="six_pack">Six Pack</option>
                                <option  value="ten_pack">Ten Pack</option>
                                <option  value="twelve_pack">Twelve Pack</option>
                            </select>
                </div>

                <div class="flex space-x-2">
                    <button type="submit" 
                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                        Update
                    </button>
                    <a href="{{ route('drinks.show', $stock->drink_id) }}" 
                        class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded">
                        Cancel
                    </a>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
