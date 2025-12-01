@props(['order'])

<div class="p-4 border rounded-lg shadow bg-zinc-400">
    <h4><p class="font-semibold">Name:</p> {{ $order->customer_name }}</h4>
    <h4><p class="font-semibold">Review:</p> {{ $order->comment }}</h4>
    <h4><p class="font-semibold">Date:</p> {{ $order->order_date }}</h4>
    <h4 class="font-semibold mt-2">Drinks Ordered:</h4>
    <ul class="list-disc pl-6">
    @foreach($order->drinks as $drink)
            @php
                $stock = $drink->stocks()->where('user_id', auth()->id())->first();
            @endphp
            <li>
                <span class="font-semibold">{{ $drink->brand }}</span>
            </li>
        @endforeach
    </ul>
</div>



    
   