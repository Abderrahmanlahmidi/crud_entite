<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create User</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">

    <div class="bg-white p-8 rounded-lg shadow-md w-96">
        <h2 class="text-2xl font-bold text-gray-700 mb-6 text-center">Create New User</h2>

        <form action="/create" method="POST" class="space-y-4">
            <div>
                <label for="name" class="block text-sm font-medium text-gray-600">Name</label>
                <input type="text" id="name" name="name" required
                    class="mt-1 w-full px-3 py-2 border rounded-lg focus:ring focus:ring-blue-300 focus:outline-none">
            </div>

            <div>
                <label for="email" class="block text-sm font-medium text-gray-600">Email</label>
                <input type="email" id="email" name="email" required
                    class="mt-1 w-full px-3 py-2 border rounded-lg focus:ring focus:ring-blue-300 focus:outline-none">
            </div>

            <div>
                <label for="password" class="block text-sm font-medium text-gray-600">Password</label>
                <input type="password" id="password" name="password" required
                    class="mt-1 w-full px-3 py-2 border rounded-lg focus:ring focus:ring-blue-300 focus:outline-none">
            </div>

            <button type="submit" class="w-full bg-blue-500 text-white py-2 rounded-lg hover:bg-blue-600 transition">
Create User
</button>
        </form>

        <div class="text-center mt-4">
            <a href="/users" class="text-blue-500 hover:underline">Back to Users List</a>
        </div>
    </div>

</body>
</html>
