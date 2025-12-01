@props(['order'])

<div class="p-4 border rounded-lg shadow bg-zinc-100">
    <h4><p class="font-semibold">Name:</p> {{ $order->customer_name }}</h4>
    <h4><p class="font-semibold">Review:</p> {{ $order->comment }}</h4>
    <h4><p class="font-semibold">Date:</p> {{ $order->order_date }}</h4>
    <h4 class="font-semibold mt-2">Drinks Ordered:</h4>
    <ul class="list-disc pl-6">
        <!-- Loops through al drinks associated with order
         THen looks for stocks related to drink filtered by currently logging in user,
         Returns first matching stock / null if there is none -->
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



    
   