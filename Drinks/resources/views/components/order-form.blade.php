@props(['action', 'method' => 'POST', 'order' => null, 'drinks'])


<form action="{{ $action }}" method="POST" class="space-y-4">
    @csrf
    @if($method === 'PUT') @method('PUT') @endif

    <!-- Displayes the customers name -->
    <div>
        <label for="customer_name" class="block font-medium text-gray-700">Customer Name</label>
        <input type="text" name="customer_name" id="customer_name"
               value="{{ old('customer_name', $order->customer_name ?? '') }}"
               required class="block w-full mt-1 border-gray-300 rounded-md shadow-sm">
        @error('customer_name') <p class="text-red-600">{{ $message }}</p> @enderror
    </div>

    <!-- Displays the comment on the order -->
    <div>
        <label for="comment" class="block font-medium text-gray-700">Comment</label>
        <textarea name="comment" id="comment" rows="3"
                  class="block w-full mt-1 border-gray-300 rounded-md shadow-sm">{{ old('comment', $order->comment ?? '') }}</textarea>
        @error('comment') <p class="text-red-600">{{ $message }}</p> @enderror
    </div>

    <!-- Displays the date the order was made -->
    <div>
    <label for="order_date" class="block font-medium text-gray-700">Order Date</label>
    <input type="text" name="order_date" id="order_date"
           value="{{ old('order_date', $order->order_date ?? '') }}"
           placeholder="YYYY-MM-DD"
           class="block w-full mt-1 border-gray-300 rounded-md shadow-sm">
    @error('order_date') <p class="text-red-600">{{ $message }}</p> @enderror
</div>

    <!-- Displayes a select field with each of the drinks available -->
<div>
    <h3 class="font-semibold mb-2">Select Drink</h3>
    <select name="drinks[]" multiple class="form-select border-gray-300 rounded-md shadow-sm w-full" required>
        <option value="">-- Select a Drink --</option>
        @foreach($drinks as $drink)
        <option value="{{ $drink->id }}"
            {{ isset($order) && $order->drinks->contains($drink->id) ? 'selected' : '' }}>
            {{ $drink->brand }}
        </option>
    @endforeach
    </select>
    @error('drink_id') <p class="text-red-600">{{ $message }}</p> @enderror
</div>

<div class="w-1/2">
     <label for="stock_type" class="block text-black font-medium text-bold ">Type of Stock</label>
         <select name="stock_type" id="stock_type" required class="bg-gray-200 mt-1 block w-full border-gray-300 rounded-md shadow-sm">
            <option  value="Single">Single Item</option>
            <option  value="Four Pack">Four Pack</option>
            <option  value="Six Pack">Six Pack</option>
            <option  value="Ten Pack">Ten Pack</option>
            <option  value="Twelve Pack">Twelve Pack</option>
        </select>
</div>

    <!-- Submit button to confirm the update -->
    <div>
        <button type="submit"
                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
            {{ $method === 'POST' ? 'Create Order' : 'Update Order' }}
        </button>
    </div>
</form>
