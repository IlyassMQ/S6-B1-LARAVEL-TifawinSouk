<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Edit Product</title>
</head>

<body>
    <div class="min-h-screen bg-gray-900 flex items-center justify-center p-6">

        <div class="w-full max-w-xl bg-gray-800 rounded-lg shadow p-6">

            <h1 class="text-2xl font-bold text-gray-100 mb-6"> Edit Product </h1>

            <form action="{{ route('products.update', $product) }}" method="POST" class="space-y-4">
                @csrf
                @method('PUT')

                <div>
                    <label class="block text-sm font-medium text-gray-300 mb-1"> Product Name </label>
                    <input type="text" name="name" value="{{ $product->name }}" class="w-full border border-gray-600 rounded px-3 py-2 bg-gray-700 text-gray-100" placeholder="Product name">
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-300 mb-1"> Reference </label>
                    <input type="text" name="reference" value="{{ $product->reference }}" class="w-full border border-gray-600 rounded px-3 py-2 bg-gray-700 text-gray-100" placeholder="Reference">
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-300 mb-1"> Description </label>
                    <textarea name="description" class="w-full border border-gray-600 rounded px-3 py-2 bg-gray-700 text-gray-100" placeholder="Description">{{ $product->Description }}</textarea>
                </div>

                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-300 mb-1"> PRICE </label>
                        <input type="number" name="price" value="{{ $product->price }}" class="w-full border border-gray-600 rounded px-3 py-2 bg-gray-700 text-gray-100">
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-300 mb-1"> Stock </label>
                        <input type="number" name="stock" value="{{ $product->stock }}" class="w-full border border-gray-600 rounded px-3 py-2 bg-gray-700 text-gray-100">
                    </div>
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-300 mb-1"> Category </label>
                    <select name="category_id" class="w-full border border-gray-600 rounded px-3 py-2 bg-gray-700 text-gray-100">
                        <option value=""> Select Category </option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}" > {{ $category->name }} </option>
                        @endforeach
                    </select>
                </div>

                <div class="flex justify-end gap-3 pt-4">
                    <a href="{{ route('products.index') }}" class="px-4 py-2 border border-gray-500 rounded text-gray-300">Cancel</a>
                    <button type="submit" class="bg-green-700 text-white px-6 py-2 rounded">Update Product</button>
                </div>

            </form>
        </div>
    </div>

</body>

</html>
