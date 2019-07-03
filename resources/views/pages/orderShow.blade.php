<h4>{{ $order->id }}</h4>
<h4>{{ $order->customer_name }}</h4>
<h4>{{ $order->order_date }}</h4>
<h4>{{ $order->order_location }}</h4>
@if($order->orderDetails->count())
    <ul>
        @foreach($order->orderDetails as $orderDetail)
            <li>{{ $orderDetail }}</li>
        @endforeach
    </ul>
@endif