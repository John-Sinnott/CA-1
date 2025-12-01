@props(['order', 'currentDrink'])
 <!-- the order card component, displays all the details about an order such as customers name, their comment on the order, the date and the drink that the order was connected too. -->
<div class="p-4 border rounded-lg shadow bg-zinc-200 space-y-2">

    <!--  Displays customers name -->
    <h4><span class="font-semibold">Customer:</span> {{ $order->customer_name }}</h4>
    <!-- Displayes the order comment -->
    <h4><span class="font-semibold">Order Info:</span> {{ $order->comment ?? 'N/A' }}</h4>
    <!-- Displays the Date the order was made, using laravels chaining ->? to avoid errors if the date is null -->
    <h4><span class="font-semibold">Order Date:</span> {{ $order->order_date?->format('Y-m-d') ?? 'N/A' }}</h4>
    <!-- The Foreach fetches the stock entry for this drink that belings to the specified user_id. -->
    <h4 class="font-semibold mt-2">Drinks Ordered:</h4>
    <ul class="list-disc pl-6">
    @foreach($order->drinks as $drink)
            @php
            // it fetchs the stock/rating record for the drink attached to the current user
                $stock = $drink->stocks()->where('user_id', auth()->id())->first();
            @endphp
            <li>
                <span class="font-semibold">{{ $drink->brand }}</span>

            </li>
        @endforeach
    </ul>
</div>