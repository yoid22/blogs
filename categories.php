<?php

require "functions.php";
require "Database.php";
$config = require "config.php";

$db = new Database($config["database"]);

$select = "SELECT * FROM categories";
$params = [];
if (isset($_GET['search']) && $_GET['search']!=""){
    $search_query="%" . $_GET['search'] . "%";
    $select .= " WHERE category_name LIKE :nosaukums";
    $params= ["nosaukums"=>$search_query];
}

$sigma = $db->query($select, $params)->fetchAll();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categories</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-b from-pink-100 via-purple-200 to-indigo-300 font-sans leading-relaxed">

    <!-- Main Container -->
    <div class="max-w-7xl mx-auto px-6 py-12">

        <!-- Header -->
        <div class="text-center mb-12">
            <h1 class="text-6xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-yellow-400 via-red-500 to-pink-600">🚀 Categories 🚀</h1>
        </div>

        <!-- Search Form -->
        <div class="flex justify-center mb-8 animate-pulse">
            <form method="GET" class="flex space-x-4 items-center bg-gradient-to-r from-teal-400 via-green-500 to-yellow-500 p-6 rounded-xl shadow-2xl max-w-lg w-full transform hover:scale-105 transition duration-500 ease-in-out">
                <input type="text" name="search" placeholder="Search categories..." class="w-full p-4 rounded-full text-gray-900 placeholder-gray-700 focus:outline-none focus:ring-4 focus:ring-pink-500 transition duration-300 shadow-xl">
                <button type="submit" class="px-8 py-4 bg-gradient-to-r from-blue-400 via-green-400 to-yellow-400 text-white font-bold rounded-full shadow-2xl hover:bg-gradient-to-l focus:outline-none focus:ring-4 focus:ring-indigo-600">
                    🔍 Search 🔍
                </button>
            </form>
        </div>

        <!-- Categories List -->
        <?php if (count($sigma) == 0): ?>
            <div class="text-center text-2xl text-red-600 font-semibold">
                <p>NOT FOUND 🤢😱😰😨🤯😤😡🤬😠🤮💀💀💀💀💀💀💀🐵</p>
            </div>
        <?php else: ?>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8 animate-bounce">
                <?php foreach($sigma as $goon): ?>
                    <div class="bg-gradient-to-r from-blue-300 via-purple-300 to-pink-300 p-8 rounded-2xl shadow-xl hover:scale-105 transition-all duration-500 ease-in-out transform hover:rotate-3">
                        <h3 class="text-2xl font-bold text-white text-center"><?php echo htmlspecialchars($goon["category_name"]); ?></h3>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>

    </div>

</body>
</html>
