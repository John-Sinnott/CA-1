<x-app-layout>
    <x-slot name="header">
        <h2 class="font-bold text-xl text-gray-800 leading-tight">
            {{ __('Edit Order') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-zinc-400 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-black">
                    <h3 class="font-bold text-lg mb-4">Edit Order</h3>

                    <x-order-form 
                        :action="route('orders.update', $order)" 
                        :method="'PUT'" 
                        :order="$order"
                        :drinks="$drinks"
                    />
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
