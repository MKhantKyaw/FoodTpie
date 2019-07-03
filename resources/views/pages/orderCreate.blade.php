<h1>Create an order</h1>
<form method="POST" action="/orders">
    @csrf
    <input type="text" name="customer_name" placeholder="customer_name">
    <input type="text" name="order_date" placeholder="order_date" value="{{ date("Y-m-d") }}">
    <input type="text" name="order_location" placeholder="order_location">
    <button type="submit">Create order</button>
</form>