<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Create Stock Review
        </h2>
    </x-slot>

    <div class="py-12 max-w-2xl mx-auto">
        <div class="bg-white p-6 rounded-lg shadow">
            <form action="{{ route('stocks.store') }}" method="POST" class="space-y-4">
                @csrf

                <!-- Drink Selection -->
                <div>
                    <label for="drink_id" class="block font-medium text-gray-700">Drink</label>
                    <select name="drink_id" id="drink_id" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
                        <option value="">-- Select a Drink --</option>
                            @foreach($drinks as $drink)
                        <option value="{{ $drink->id }}" {{ old('drink_id') == $drink->id ? 'selected' : '' }}>
                            {{ $drink->brand }}
                        </option>
                            @endforeach
                    </select>
                    @error('drink_id') <p class="text-red-600">{{ $message }}</p> @enderror
                    </div>

                <!-- Rating -->
                <div>
                    <label for="rating" class="block font-medium text-gray-700">Rating</label>
                    <select name="rating" id="rating" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
                        @for ($i = 1; $i <= 10; $i++)
                            <option value="{{ $i }}" {{ old('rating') == $i ? 'selected' : '' }}>
                                {{ $i }}
                            </option>
                        @endfor
                    </select>
                    @error('rating') <p class="text-red-600">{{ $message }}</p> @enderror
                </div>

                <!-- Comment -->
                <div>
                    <label for="comment" class="block font-medium text-gray-700">Review</label>
                    <textarea name="comment" id="comment" rows="3"
                        class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">{{ old('comment') }}</textarea>
                    @error('comment') <p class="text-red-600">{{ $message }}</p> @enderror
                </div>

                <!-- Stock Type -->
                <div>
                    <label for="stock_type" class="block font-medium text-gray-700">Stock Type</label>
                    <select name="stock_type" id="stock_type" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
                        <option value="Single" {{ old('stock_type') == 'Single' ? 'selected' : '' }}>Single Item</option>
                        <option value="Four Pack" {{ old('stock_type') == 'Four Pack' ? 'selected' : '' }}>Four Pack</option>
                        <option value="Six Pack" {{ old('stock_type') == 'Six Pack' ? 'selected' : '' }}>Six Pack</option>
                        <option value="Ten Pack" {{ old('stock_type') == 'Ten Pack' ? 'selected' : '' }}>Ten Pack</option>
                        <option value="Twelve Pack" {{ old('stock_type') == 'Twelve Pack' ? 'selected' : '' }}>Twelve Pack</option>
                    </select>
                    @error('stock_type') <p class="text-red-600">{{ $message }}</p> @enderror
                </div>

                <!-- Submit -->
                <div class="flex space-x-2">
                    <button type="submit"
                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                        Create
                    </button>
                    <a href="{{ route('stocks.index') }}"
                        class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded">
                        Cancel
                    </a>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
