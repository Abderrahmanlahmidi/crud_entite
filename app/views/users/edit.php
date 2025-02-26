<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex justify-center items-center h-screen">
<div class="bg-white p-6 rounded-lg shadow-lg w-1/3">
    <h2 class="text-2xl font-bold mb-4">Edit User</h2>
    <form action="/update/<?= $user['id'] ?>" method="POST" class="space-y-4">
        <div>
            <label class="block text-gray-700">Name:</label>
            <input type="text" name="name" value="<?= htmlspecialchars($user['nom']) ?>"
                   class="w-full p-2 border rounded-lg">
        </div>
        <div>
            <label class="block text-gray-700">Email:</label>
            <input type="email" name="email" value="<?= htmlspecialchars($user['email']) ?>"
                   class="w-full p-2 border rounded-lg">
        </div>
        <button type="submit" class="bg-blue-500 text-white p-2 rounded-lg w-full">Update</button>
    </form>
    <a href="/" class="block text-center text-gray-500 mt-4">Back to Users</a>
</div>
</body>
</html>

