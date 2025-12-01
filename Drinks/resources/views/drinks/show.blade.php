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

                    {{-- shows all Existing Stocks for the specific drink--}}
                
                    <h4 class="font-semibold text-md mt-8">Rating</h4>
                    @if($drink->stocks->isEmpty())
                        <p class="text-gray-600">No Ratings yet.</p>
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

                                    {{-- Edit/Delete Buttons for users with the admin role --}}
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
            
                    {{-- Link to Add Rating --}}
                    <a href="{{ route('stocks.create', $drink) }}" class="bg-cyan-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded inline-block mt-2">
                        Add New Rating
                    </a>
                    
            <div class="py-12">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-zinc-200 overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 text-gray-900">
                            
                        <h3 class="font-semibold text-lg mb-4">Orders for this Drink</h3>

                        @forelse($drink->orders as $order)
                            <x-order-details :order="$order" :current-drink="$drink" />
                             @empty
                                <p class="text-gray-600">No orders for this drink yet.</p>
                        @endforelse

                        </div>
                    </div>
                </div>
            </div>
               
           
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
