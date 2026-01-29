<h1>Create Product</h1>

<form action="{{ route('products.store') }}" method="POST">
    @csrf

    <input type="text" name="name" placeholder="Name"><br>

    <input type="text" name="reference" placeholder="Reference"><br>

    <textarea name="short_description" placeholder="Description"></textarea><br>

    <input type="number" name="price"><br>

    <input type="number" name="stock""><br>

    <select name="category_id">
        <option value="">-- Select Category --</option>
        @foreach ($categories as $category)
            <option value="{{ $category->id }}">
                {{ $category->name }}
            </option>
        @endforeach
    </select><br>


    <button type="submit">Save</button>
</form>
