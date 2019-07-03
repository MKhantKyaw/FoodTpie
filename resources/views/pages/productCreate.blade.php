<h1>Create a product</h1>
<form method="POST" action="/products">
    @csrf
    <input type="text" name="product_name" placeholder="product name">
    <input type="text" name="category" placeholder="category">
    <input type="text" name="price" placeholder="price">
    <button type="submit">Create product</button>
</form>