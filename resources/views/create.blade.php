<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>

    <style type="text/tailwindcss">
        @layer utilities{
            .container{
                @apply px-10 mx-auto;
            }
        }
    </style>

    <title>Create</title>
</head>
<body>
    <div class="container">
        
        <div class="flex justify-between my-5">
            <h2 class="text-red-500 text-xl font-semibold">Create</h2>
            <a href="/" class="bg-green-600 text-white rounded py-2.5 px-4">Back to Home</a>
        </div>

        <div>
            <form action="" method="POST" enctype="multipart/form-data">
                <div class="flex flex-col gap-5">

                    <input 
                        type="text" 
                        name="name" 
                        placeholder="Enter name"
                        class="border border-gray-300 rounded p-2"
                    >

                    <input 
                        type="text" 
                        name="description" 
                        placeholder="Enter description"
                        class="border border-gray-300 rounded p-2"
                    >

                    <input 
                        type="file" 
                        name="image"
                        class="border border-gray-300 rounded p-2"
                    >

                    <input 
                        type="submit" 
                        value="Submit"
                        class="bg-blue-600 text-white py-2 rounded cursor-pointer"
                    >
                </div>
            </form>
        </div>

    </div>

</body>
</html>
