<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Create New Order
        </h2>
    </x-slot>

    <div class="py-12 max-w-2xl mx-auto">
        <div class="bg-white p-6 rounded-lg shadow">
            <h3 class="font-semibold text-lg mb-4">Add a New Order:</h3>

            <x-order-form :action="route('orders.store')" :method="'POST'" :drinks="$drinks" />
        </div>
    </div>
</x-app-layout>

