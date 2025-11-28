@props(['order'])

<div class="p-4 border rounded-lg shadow bg-zinc-200 space-y-2">
    <h4><span class="font-semibold">Customer:</span> {{ $order->customer_name }}</h4>
    <h4><span class="font-semibold">Comment:</span> {{ $order->comment ?? 'N/A' }}</h4>
    <h4><span class="font-semibold">Order Date:</span> {{ $order->order_date?->format('Y-m-d') ?? 'N/A' }}</h4>

    <h4 class="font-semibold mt-2">Drinks Ordered:</h4>
    <ul class="list-disc pl-6">
        @foreach($order->drinks as $drink)
            @php
                $stock = $drink->stocks()->where('user_id', auth()->id())->first();
            @endphp
            <li>
                <span class="font-semibold">{{ $drink->brand }}</span>
                - Stock Type: {{ $stock?->stock_type ?? 'N/A' }}
            </li>
        @endforeach
    </ul>
</div>