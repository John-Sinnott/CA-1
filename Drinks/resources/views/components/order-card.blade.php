@props(['order'])

<div class="p-4 border rounded-lg shadow bg-zinc-400">
    <h4><p class="font-semibold">Name:</p> {{ $order->customer_name }}</h4>
    <h4><p class="font-semibold">Review:</p> {{ $order->comment }}</h4>
    <h4><p class="font-semibold">Date:</p> {{ $order->order_date }}</h4>
</div>



    
   