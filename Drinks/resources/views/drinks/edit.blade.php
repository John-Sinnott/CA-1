<x-app-layout>
    <x-slot name="header">
        <h2 class="font-bold text-xl text-gray-800 leading-tight">
            {{ __('Create New Drink')}}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-zinc-400 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-black">
                    <h3 class="font-bold text-lg mb-4">Edit New Drink</h3>

                    <x-drink-form class="bg-zinc-200" 
                        :action="route('drinks.update', $drink)"
                        :method="'PUT'"
                        :drink="$drink"
                    />
                </div>
            </div>
        </div>
    </div>
</x-app-layout>