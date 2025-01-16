<?php require "components/navbar.php"; ?>
<?php require "components/header.php"; ?>



<body class="bg-gradient-to-b from-pink-100 via-purple-200 to-indigo-300 font-sans leading-relaxed bg-chaos">

    <!-- Main Container -->
    <div class="max-w-7xl mx-auto px-6 py-12">

        <!-- Header -->
        <div class="text-center mb-12 skibbidy">
            <h1 class="text-7xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-yellow-400 via-red-500 to-pink-600 animate__animated animate__bounceInUp glow-effect pulseRainbow">
                🚀 CATEGORIES ON FIRE! 🚀
            </h1>
            <p class="text-3xl text-yellow-500 emoji-text rotate-glitch">🔥 Skibbidy Toilet 🌚💩💥</p>
        </div>

        <!-- Search Form -->
        <div class="flex justify-center mb-8 animate-pulse">
            <form method="GET" class="flex space-x-4 items-center bg-gradient-to-r from-teal-400 via-green-500 to-yellow-500 p-6 rounded-xl shadow-2xl max-w-lg w-full transform hover:scale-105 transition duration-500 ease-in-out">
                <input type="text" name="search" placeholder="Search categories... 💀" class="w-full p-4 rounded-full text-gray-900 placeholder-gray-700 focus:outline-none focus:ring-4 focus:ring-pink-500 transition duration-300 shadow-xl">
                <button type="submit" class="px-8 py-4 bg-gradient-to-r from-blue-400 via-green-400 to-yellow-400 text-white font-bold rounded-full shadow-2xl hover:bg-gradient-to-l focus:outline-none focus:ring-4 focus:ring-indigo-600">
                    🔍 SEARCH NOW 🤪
                </button>
            </form>
        </div>

        <!-- Categories List -->
        <?php if (count($sigma) == 0): ?>
            <div class="text-center text-2xl text-red-600 font-semibold skibbidy">
                <p>NOT FOUND! 🤯🤢💀💩🚽⛔💥</p>
                <img src="https://media.giphy.com/media/MCUgxTYQ8YH5VwsnZZ/giphy.gif" alt="Brain Rot" class="mx-auto w-1/2 mt-4 sparkle explode lightning">
            </div>
        <?php else: ?>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8 animate-bounce">
                <?php foreach($sigma as $goon): ?>
                    <div class="bg-gradient-to-r from-blue-300 via-purple-300 to-pink-300 p-8 rounded-2xl shadow-xl hover:scale-105 transition-all duration-500 ease-in-out transform hover:rotate-3 skibbidy">
                        <h3 class="text-2xl font-bold text-white text-center emoji-text scale-in pulseRainbow">
                            <?php echo htmlspecialchars($goon["category_name"]); ?> 💀🎉🚽
                        </h3>
                        <div class="text-center mt-4">
                            <img src="https://i.pinimg.com/originals/6e/4a/79/6e4a79952b1b4e1f7f5e890603db1b18.gif" alt="Toilet Dance" class="w-24 mx-auto my-2 animate__animated animate__rotateIn skibbidy sparkle explode lightning">
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>

    </div>
    
    
    <iframe width="560" height="315" src="https://www.youtube.com/embed/<?php echo 'UhDSl8P6io0'; ?>" 
    frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

    <?php require "components/footer.php"; ?>
