<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Social Market</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/aos@next/dist/aos.css" rel="stylesheet">
    <style>
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(-10px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .fade-in {
            animation: fadeIn 1s ease-out;
        }

        @keyframes slideIn {
            from { opacity: 0; transform: translateX(-20px); }
            to { opacity: 1; transform: translateX(0); }
        }

        .slide-in {
            animation: slideIn 1s ease-out;
        }
    </style>
</head>

<body class="bg-gray-100 flex flex-col min-h-screen">
    <!-- Header -->
    <header class="w-full bg-green-600 p-4 fade-in">
        <div class="container mx-auto flex justify-between items-center">
            <div class="text-white text-2xl font-small-caps bold 24px/1 sans-serif">Social Market</div>
        </div>
    </header>

    <!-- Welcome Text -->
    <section class="flex-grow flex flex-col items-center justify-center text-center mt-8 px-4">
        <h1 data-aos="fade-up" class="text-4xl font-bold text-gray-800 slide-in">Welcome to Social Market!</h1>
        <p data-aos="fade-up" data-aos-delay="100" class="mt-4 text-lg text-gray-600 slide-in">
            Discover, Connect, and Buy!<br>
            At Social Market, we bring people together and offer a platform where social interactions and transactions <br> go hand in hand. Whether you're looking to make new friends or buy and sell products, we've got you covered.
        </p>

        <!-- Connect Button -->
        <div class="mt-6">
            <button id="connectButton" class="bg-green-600 text-white py-2 px-4 rounded-full flex items-center hover:bg-green-700 transform transition-transform duration-300 hover:scale-105">
                Connect
                <i class="fas fa-arrow-right ml-2"></i>
            </button>
        </div>
    </section>

    <!-- Footer -->
    <footer class="w-full bg-green-600 p-4 mt-8 fade-in">
        <div class="container mx-auto text-center text-white">
            &copy; 2024 Social Market. All Rights Reserved.
        </div>
    </footer>

    <!-- AOS Library Initialization -->
    <script src="https://cdn.jsdelivr.net/npm/aos@next/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/canvas-confetti@1.5.1/dist/confetti.browser.min.js"></script>
    <script src="../assets/js/font.js">
    </script>
</body>

</html>
