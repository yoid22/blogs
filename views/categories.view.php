<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categories</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        /* Brain Rot Unleashed! */
        @keyframes brainRot {
            0% { transform: scale(1); opacity: 1; }
            10% { transform: scale(1.4) rotate(45deg); opacity: 0.9; }
            20% { transform: scale(1.5) rotate(-60deg); opacity: 0.7; }
            30% { transform: scale(1.7) rotate(90deg); opacity: 0.6; }
            40% { transform: scale(1.8) rotate(-120deg); opacity: 0.5; }
            50% { transform: scale(1.6) rotate(180deg); opacity: 0.7; }
            60% { transform: scale(1.7) rotate(-240deg); opacity: 0.8; }
            70% { transform: scale(1.5) rotate(270deg); opacity: 0.9; }
            80% { transform: scale(1.4) rotate(-300deg); opacity: 1; }
            100% { transform: scale(1) rotate(360deg); opacity: 1; }
        }

        @keyframes wiggle {
            0% { transform: rotate(0deg); }
            25% { transform: rotate(20deg); }
            50% { transform: rotate(-30deg); }
            75% { transform: rotate(15deg); }
            100% { transform: rotate(-10deg); }
        }

        @keyframes sparkle {
            0% { opacity: 0.3; transform: scale(1); }
            50% { opacity: 1; transform: scale(1.2); }
            100% { opacity: 0.3; transform: scale(1); }
        }

        @keyframes explode {
            0% { transform: scale(1); opacity: 1; }
            30% { transform: scale(1.5); opacity: 0.6; }
            60% { transform: scale(2); opacity: 0.3; }
            100% { transform: scale(1); opacity: 1; }
        }

        @keyframes pulseRainbow {
            0% { transform: scale(1); box-shadow: 0 0 10px red, 0 0 20px orange, 0 0 30px yellow, 0 0 40px green; }
            25% { transform: scale(1.1); box-shadow: 0 0 10px purple, 0 0 20px cyan, 0 0 30px blue; }
            50% { transform: scale(1.2); box-shadow: 0 0 10px green, 0 0 20px yellow, 0 0 30px purple; }
            75% { transform: scale(1.3); box-shadow: 0 0 10px pink, 0 0 20px red, 0 0 30px orange; }
            100% { transform: scale(1); box-shadow: 0 0 10px red, 0 0 20px orange, 0 0 30px yellow, 0 0 40px green; }
        }

        @keyframes lightning {
            0% { box-shadow: 0 0 10px blue; }
            25% { box-shadow: 0 0 20px blue, 0 0 50px white; }
            50% { box-shadow: 0 0 30px white, 0 0 80px cyan; }
            75% { box-shadow: 0 0 40px cyan, 0 0 100px blue; }
            100% { box-shadow: 0 0 50px white, 0 0 150px yellow; }
        }

        @keyframes randomBounce {
            0% { transform: scale(1); }
            50% { transform: scale(1.3) rotate(20deg); }
            100% { transform: scale(1) rotate(-20deg); }
        }

        .skibbidy {
            animation: brainRot 1.2s infinite ease-in-out;
        }

        .wiggle {
            animation: wiggle 1s infinite ease-in-out;
        }

        .sparkle {
            animation: sparkle 1.5s infinite ease-in-out;
        }

        .explode {
            animation: explode 2s infinite ease-in-out;
        }

        .pulseRainbow {
            animation: pulseRainbow 2.5s infinite;
        }

        .lightning {
            animation: lightning 1.2s infinite alternate;
        }

        .randomBounce {
            animation: randomBounce 2s infinite alternate;
        }

        .glow-effect {
            text-shadow: 0 0 15px rgba(255, 255, 255, 0.8), 0 0 25px rgba(255, 0, 255, 0.8), 0 0 35px rgba(0, 255, 255, 0.8), 0 0 45px rgba(255, 255, 0, 0.8);
        }

        .rotate-glitch {
            animation: randomBounce 0.6s infinite ease-in-out;
        }

        .bg-chaos {
            background: linear-gradient(45deg, #ff00cc, #00ccff, #ffff00, #ff0000);
            animation: randomBounce 1.5s infinite;
        }

        .spin {
            animation: spin 3s infinite linear;
        }

        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }

        .scale-in {
            transform: scale(0.9);
            animation: brainRot 2.5s infinite alternate;
        }

        .shake {
            animation: shake 0.5s ease-in-out infinite;
        }

        @keyframes shake {
            0% { transform: translateX(0); }
            25% { transform: translateX(-5px); }
            50% { transform: translateX(5px); }
            75% { transform: translateX(-5px); }
            100% { transform: translateX(0); }
        }

    </style>
</head>
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

</body>
</html>
