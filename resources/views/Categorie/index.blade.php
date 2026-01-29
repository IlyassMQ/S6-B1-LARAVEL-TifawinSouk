<h1>Categories</h1>

<a href="{{ route('category.create') }}">+ Add Category</a>


<table border="1" cellpadding="5">
    <tr>
        <th>Name</th>
        <th>Slug</th>
        <th>Description</th>
        <th>Actions</th>
    </tr>

    @foreach ($categories as $category)
        <tr>
            <td>{{ $category->name }}</td>
            <td>{{ $category->slug }}</td>
            <td>{{ $category->description }}</td>
            <td>
                <a href="{{ route('category.edit', $category) }}">Edit</a>

                <form action="{{ route('category.destroy', $category) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button>Delete</button>
                </form>
            </td>
        </tr>
    @endforeach
</table>
