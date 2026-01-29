<h1>Products</h1>

<a href="{{ route('products.create') }}">+ Add Product</a>


<table border="1" cellpadding="5">
    <tr>
        <th>Name</th>
        <th>Category</th>
        <th>Price</th>
        <th>Stock</th>
        <th>Image</th>
        <th>Actions</th>
    </tr>

    @foreach ($products as $product)
        <tr>
            <td>{{ $product->name }}</td>
            <td>{{ $product->category->name }}</td>
            <td>{{ $product->price }} MAD</td>
            <td>{{ $product->stock }}</td>

            <td>
                <a href="{{ route('products.edit', $product) }}">Edit</a>

                <form action="{{ route('products.destroy', $product) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button>Delete</button>
                </form>
            </td>
        </tr>
    @endforeach
</table>
