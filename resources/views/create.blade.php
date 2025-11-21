<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Post</title>

    <!-- Tailwind or Bootstrap (optional) -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 p-10">

    <div class="max-w-xl mx-auto bg-white p-6 rounded shadow">

        <h2 class="text-2xl font-bold mb-4">Create Post</h2>

        <form action="{{ route('store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <!-- Name -->
            <label class="block font-semibold">Name:</label>
            <input 
                type="text" 
                name="name" 
                value="{{ old('name') }}"
                class="border border-gray-300 w-full p-2 rounded"
                placeholder="Enter post name"
            >
            @error('name')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror


            <!-- Description -->
            <label class="block font-semibold mt-4">Description:</label>
            <textarea 
                name="description" 
                class="border border-gray-300 w-full p-2 rounded"
                placeholder="Enter description"
            >{{ old('description') }}</textarea>
            @error('description')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror


            <!-- Image -->
            <label class="block font-semibold mt-4">Image:</label>
            <input 
                type="file" 
                name="image"
                class="border border-gray-300 w-full p-2 rounded"
            >
            @error('image')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror


            <!-- Submit button -->
            <button 
                type="submit"
                class="bg-blue-600 text-white px-4 py-2 mt-5 rounded"
            >
                Submit
            </button>

        </form>

    </div>

</body>
</html>
