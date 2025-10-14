@props([
  "title",
  "image",
  "vol",
  'description' => 'No description available.'
])
<div>
  <div
    class="max-w-xl p-6 mx-auto bg-white border rounded-lg shadow-md hover:shadow-lg transition duration-300"
  >
    <!-- Limit the overall container width to make the component more compact -->

    <!-- Book Title -->

    <h1 class="mb-2 font-bold text-black-600" style="font-size: 3rem">
      {{ $title }}
      <span class="ml-3 text-gray-500 text-xl">({{ $vol }} ml)</span>
    </h1>
    <!-- Heading with larger text and color -->

    <!-- Book Cover Image -->

    <div class="overflow-hidden flex mb-4 rounded-lg justify-center">
      <!-- Image is further restricted to a smaller size -->

      <img
        src="{{ asset("images/drinks/" . $image) }}"
        alt="{{ $title }}"
        class="object-cover w-full max-w-xs h-auto"
      />
      <!-- Restrict image to max-w-xs (20rem) and ensure responsiveness -->
    </div>
    <p class="text-gray-700 text-base"><span>{{$description}}</span></p>
  </div>
</div>
