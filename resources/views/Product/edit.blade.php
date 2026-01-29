<h1>Edit Product</h1>

<form action="{{ route('products.update', $product) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <input type="text" name="name" value="{{ $product->name) }}"><br>

    <input type="text" name="reference" value="{{ $product->reference) }}"><br>

    <textarea name="short_description">{{$product->short_description) }}</textarea><br>

    <input type="number" name="price" step="0.01" value="{{$product->price) }}"><br>

    <input type="number" name="stock" value="{{$product->stock) }}"><br>

    <select name="category_id">
        @foreach ($categories as $category)
            <option value="{{ $category->id }}">
                {{ $category->name }}
            </option>
        @endforeach
    </select><br>



    <button type="submit">Update</button>
</form>
