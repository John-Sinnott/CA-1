
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Drinks') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                <div class="p-6 text-gray-900">
                    <h3 class="font-semibold text-lg mb-4">List of Drinks</h3>
                </div>
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                        @foreach($drinks as $drink)
                        <a href="{{route('drinks.show', $drink) }}">
                            <x-drink-card
                                :title="$drink->brand"
                                :image="$drink->image_url"
                                :vol="$drink->vol"
                                :description="$drink->description"
                            />
                        </a>
                        @endforeach
                    </div>
                {{-- <ul class="flex flex-wrap gap-6">
                    @foreach ($drinks as $drink)
                        <li class="w-48 border rounded p-4 flex flex-col items-center">
                            <img src="{{ asset('images/' . $drink->image_url) }}" alt="{{ $drink->brand }}" />
 
                            <span class="font-semibold text-center">{{ $drink->brand }}</span>
                        </li>
                    @endforeach
                </ul> --}}
            </div>
        </div>
    </div>
    {{-- alert-success a component created to display a success message that may be sent from the controller for examplewhen a drink is deleted a message will display "Drink Deleted Successfully" will appear --}}
    <x-alert-success>
        {{ session('success') }}
    </x-alert-success>
</x-app-layout>                       