<h1>Edit Category</h1>

<form action="{{ route('category.update', $category) }}" method="POST">
    @csrf
    @method('PUT')

    <input type="text" name="name" value="{{ $category->name) }}">
    <br>

    <input type="text" name="slug" value="{{$category->slug) }}">
    <br>

    <textarea name="description">{{ ($category->description) }}</textarea>
    <br>

    <button type="submit">Update</button>
</form>
