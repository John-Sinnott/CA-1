@props([
  "title",
  "image",
  "vol",
  'description' => 'No description available.'
])

<div
  class="p-6 bg-white border rounded-lg shadow-md hover:shadow-lg transition duration-300"
>
  <h4 class="font-bold text-lg">
    {{ $title }}
    <span class="text-sm text-gray-500">({{ $vol }} ABV)</span>
  </h4>
  <img src="{{ asset("images/drinks/" . $image) }}" alt="{{ $title }}" class="mx-auto mb-4  w-32 h-32 object-fit-cover" />
</div>
