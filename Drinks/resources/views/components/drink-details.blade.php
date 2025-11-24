@props([
  "title",
  "image",
  "vol",
  'description' => 'No description available.',
  "stocks" => []
])
<div>
  <div
    class="max-w-xl p-6 mx-auto bg-gray-300 border rounded-lg shadow-md hover:shadow-lg transition duration-300"
  >
    <!-- Limit the overall container width to make the component more compact -->

    <!-- Drink Title -->

    <h1 class="mb-2 font-bold text-grey-900" style="font-size: 3rem">
      {{ $title }}
      <span class="ml-3 text-gray-900 text-xl">({{ $vol }} ml)</span>
    </h1>
    <!-- Heading with larger text and color -->

    <!-- Drink Cover Image -->

    <div class="overflow-hidden flex mb-4 rounded-lg justify-center">
      <!-- Image is further restricted to a smaller size -->

      <img
        src="{{ asset("images/drinks/" . $image) }}"
        alt="{{ $title }}"
        class="object-cover w-full max-w-xs h-auto"
      />
      <!-- Restrict image to max-w-xs (20rem) and ensure responsiveness -->
    </div>
    <p class="text-gray-900 font-semibold text-base"><span>{{$description}}</span></p>
  </div>

</div>
