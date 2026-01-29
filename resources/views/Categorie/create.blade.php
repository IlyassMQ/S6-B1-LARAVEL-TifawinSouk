<h1>Create Category</h1>

<form action="{{ route('category.store') }}" method="POST">
    @csrf

    <input type="text" name="name" placeholder="Name">
    <br>

    <input type="text" name="slug" placeholder="Slug">
    <br>

    <textarea name="description" placeholder="Description"></textarea>
    <br>

    <button type="submit">Save</button>
</form>
