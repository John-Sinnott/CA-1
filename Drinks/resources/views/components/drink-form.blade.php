@props(['action', 'method'])

<form action="{{ $action }}" method="POST" enctype="multipart/form-data">
    @csrf
    @if($method === 'PUT' || $method === 'PATCH')
        @method($method)
    @endif

    <!-- Brand -->
    <div
      class="
        mb-4
      "
    >
        <label for="brand"
          class="
            block
            text-sm text-gray-700
          "
        >Brand</label>
        <input
            type="text"
            name="brand"
            id="brand"
            value="{{ old('brand', $drink->brand ?? '') }}"
            required
              class="
                block
                w-full
                mt-1
                border-gray-300 rounded-md
                shadow-sm
                focus:ring-indigo-500 focus:border-indigo-500
              "
            
        />
        @error('brand')
            <p
              class="
                text-sm text-red-600
              "
            >{{ $message }}</p>
        @enderror
    </div>

    <!-- Volume -->
    <div
      class="
        mb-4
      "
    >
        <label for="vol"
          class="
            block
            text-sm text-gray-700
          "
        >Volume (ml)</label>
        <input
            type="text"
            name="vol"
            id="vol"
            value="{{ old('vol', $drink->vol ?? '') }}"
            required
              class="
                block
                w-full
                mt-1
                border-gray-300 rounded-md
                shadow-sm
                focus:ring-indigo-500 focus:border-indigo-500
              "
            
        />
        @error('vol')
            <p
              class="
                text-sm text-red-600
              "
            >{{ $message }}</p>
        @enderror
    </div>

    <!-- Description -->
    <div
      class="
        mb-4
      "
    >
        <label for="description"
          class="
            block
            text-sm text-gray-700
          "
        >Description</label>
        <textarea
            name="description"
            id="description"
            rows="3"
              class="
                block
                w-full
                mt-1
                border-gray-300 rounded-md
                shadow-sm
                focus:ring-indigo-500 focus:border-indigo-500
              "
            
        >{{ old('description', $drink->description ?? '') }}</textarea>
        @error('description')
            <p
              class="
                text-sm text-red-600
              "
            >{{ $message }}</p>
        @enderror
    </div>

    <!-- Image -->
    <div
      class="
        mb-4
      "
    >
        <label for="image"
          class="
            block
            text-sm text-gray-700
          "
        >Drink Image</label>
        <input
            type="file"
            name="image"
            id="image"
            {{ isset($drink) ? '' : 'required' }}
              class="
                block
                w-full
                mt-1
                border-gray-300 rounded-md
                shadow-sm
                focus:ring-indigo-500 focus:border-indigo-500
              "
            
        />
        @error('image')
            <p
              class="
                text-sm text-red-600
              "
            >{{ $message }}</p>
        @enderror
    </div>

    <!-- Submit Button -->
    <div>
        <x-primary-button>
            {{ isset($drink) ? 'Update Drink' : 'Add Drink' }}
        </x-primary-button>
    </div>
</form>
