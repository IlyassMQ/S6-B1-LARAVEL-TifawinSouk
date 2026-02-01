<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Products</title>
</head>
<body>

<div class="p-6 bg-gray-900 min-h-screen">

    <div class="flex justify-between items-center mb-5">
        <h1 class="text-2xl font-bold text-gray-100">Products</h1>
        <a href="{{ route('products.create') }}" class="bg-blue-700 text-white px-4 py-2 rounded">+ Add Product</a>
        <a href="{{ route('category.index') }}" class="bg-blue-700 text-white px-4 py-2 rounded">Categorie</a>
    </div>

    

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-5">

        @foreach ($products as $product)
            <div class="bg-gray-800 rounded shadow">

                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRT16iPO5NNKfjwf6rhtewnzt6S60c6RdzFlw&s" class="w-full h-40 object-fit rounded-t" alt="">

                <div class="p-4">
                    <h2 class="font-semibold text-gray-100">{{ $product->name }}</h2>

                    <p class="text-sm text-gray-400">{{ $product->category->name }}</p>

                    <p class="text-lg font-bold text-blue-400 mt-1">{{ $product->price }} PRICE</p>

                    <p class="text-sm mt-1 text-gray-300">Stock : {{ $product->stock }}</p>

                    

                    <div class="flex gap-2 mt-3">
                        <a href="{{ route('products.edit', $product) }}" class="flex-1 text-center bg-yellow-300 text-black py-1 rounded">Edit</a>

                        <form action="{{ route('products.destroy', $product) }}" method="POST" onsubmit="return confirm('Delete this product ?')">
                            @csrf
                            @method('DELETE')
                            <button class="bg-red-700 text-white px-3 py-1 rounded">DELETE</button>
                        </form>
                    </div>
                </div>

            </div>
        @endforeach

    </div>

</div>

</body>
</html>
