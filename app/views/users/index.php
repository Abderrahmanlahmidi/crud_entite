<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users List</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen p-6">

<div class="bg-white p-6 rounded-lg shadow-lg w-full max-w-4xl">
    <h2 class="text-2xl font-bold text-gray-700 mb-6 text-center">Users List</h2>

    <div class="flex justify-end mb-4">
        <a href="/create" class="bg-green-500 text-white px-4 py-2 rounded-lg hover:bg-green-600 transition">
            + Add New User
        </a>
    </div>

    <table class="w-full border-collapse border border-gray-300">
        <thead>
        <tr class="bg-gray-200 text-gray-700">
            <th class="border border-gray-300 px-4 py-2">ID</th>
            <th class="border border-gray-300 px-4 py-2">Name</th>
            <th class="border border-gray-300 px-4 py-2">Email</th>
            <th class="border border-gray-300 px-4 py-2">Actions</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($users as $user): ?>
            <tr class="text-center bg-white border border-gray-300">
                <td class="px-4 py-2"><?= $user['id'] ?></td>
                <td class="px-4 py-2"><?= htmlspecialchars($user['nom']) ?></td>
                <td class="px-4 py-2"><?= htmlspecialchars($user['email']) ?></td>
                <td class="px-4 py-2 space-x-2">
                    <a href="/edit/<?= $user['id'] ?>" class="bg-blue-500 text-white px-3 py-1 rounded-lg hover:bg-blue-600 transition">
                        Edit
                    </a>
                    <a href="/delete/<?= $user['id'] ?>"
                       onclick="return confirm('Are you sure?')"
                       class="bg-red-500 text-white px-3 py-1 rounded-lg hover:bg-red-600 transition">
                        Delete
                    </a>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>

</body>
</html>



