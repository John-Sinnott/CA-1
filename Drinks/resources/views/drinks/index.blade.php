
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
                <ul class="flex flex-wrap gap-6">
                    @foreach ($drinks as $drink)
                        <li class="w-48 border rounded p-4 flex flex-col items-center">
                            <img src="{{ asset('images/' . $drink->image_url) }}" alt="{{ $drink->brand }}" />
 
                            <span class="font-semibold text-center">{{ $drink->brand }}</span>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</x-app-layout>                       