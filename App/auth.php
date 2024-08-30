<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Social Market</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        .form-container {
            transition: transform 0.3s ease-in-out;
        }

        .form-container.hidden {
            display: none;
        }

        .password-strength {
            margin-top: 0.5rem;
            font-size: 0.875rem;
        }

        .strength-weak {
            color: #f87171; /* Red */
        }

        .strength-medium {
            color: #fbbf24; /* Yellow */
        }

        .strength-strong {
            color: #34d399; /* Green */
        }
        .background-container {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
            z-index: -1;
            background-color: #f0f4f8; /* Light background color */
        }

        .ball {
            position: absolute;
            width: 100px;
            height: 100px;
            background: radial-gradient(circle, #34d399, #16a34a);
            border-radius: 50%;
        }
    </style>
</head>

<body class="bg-gray-100">
<div class="background-container" id="backgroundContainer"></div>
<div class="min-h-screen flex items-center justify-center">
    <div class="flex bg-white p-8 rounded-lg shadow-lg w-full max-w-md">
        <!-- Login Form -->
        <div id="loginForm" class="form-container w-full flex flex-col items-center p-6">
            <h2 class="text-2xl font-bold mb-6 text-center">Login to your account</h2>
            <form action="" method="POST" class="w-full">
                <div class="mb-4">
                    <label for="loginEmail" class="block text-gray-700 font-bold mb-2">Email</label>
                    <input type="email" name="email" id="loginEmail" placeholder="Enter your email" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-green-800">
                </div>
                <div class="mb-6 relative">
                    <label for="loginPassword" class="block text-gray-700 font-bold mb-2">Password</label>
                    <input type="password" name="password" id="loginPassword" placeholder="Enter your password" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-green-800">
                    <span class="absolute inset-y-0 right-0 flex items-center pr-3 cursor-pointer mt-7" onclick="togglePasswordVisibility('login')">
                        <i class="fas fa-eye  text-green-800" id="toggleLoginPassword"></i>
                    </span>
                </div>
                <button type="submit" class="w-full bg-green-600 text-white px-4 py-2 font-bold rounded-lg hover:bg-green-700 transition duration-300">Login</button>
                <div class="mt-4 text-center">
                    <button type="button" onclick="showSignUp()" class="text-green-800 hover:underline">Don't have an account? Sign up</button>
                </div>
            </form>
        </div>

        <!-- Sign Up Form -->
        <div id="signUpForm" class="form-container hidden w-full flex flex-col items-center p-6">
            <h2 class="text-2xl font-bold mb-6 text-center">Create an Account</h2>
            <form action="" method="POST" class="w-full">
                <div class="mb-4">
                    <label for="name" class="block text-gray-700 font-bold mb-2">Name</label>
                    <input type="text" name="name" id="name" placeholder="Enter your name" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-green-800">
                </div>
                <div class="mb-4">
                    <label for="signUpEmail" class="block text-gray-700 font-bold mb-2">Email</label>
                    <input type="email" name="email" id="signUpEmail" placeholder="Enter your email" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-green-800">
                </div>
                <div class="mb-6 relative">
                    <label for="signUpPassword" class="block text-gray-700 font-bold mb-2">Password</label>
                    <input type="password" name="password" id="signUpPassword" placeholder="Enter your password" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-green-800" onkeyup="checkPasswordStrength()">
                    <span class="absolute inset-y-0 right-0 flex items-center pr-5 cursor-pointer mt-7" onclick="togglePasswordVisibility('signup')">
                        <i class="fas fa-eye text-green-800" id="toggleSignUpPassword"></i>
                    </span>
                    <div id="passwordStrength" class="password-strength mt-2"></div>
                </div>
                <button type="submit" class="w-full bg-green-600 text-white px-4 py-2 font-bold rounded-lg hover:bg-green-700 transition duration-300">Sign Up</button>
                <div class="mt-4 text-center">
                    <button type="button" onclick="showLogin()" class="text-green-800 hover:underline">Already have an account? Login</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script src="../assets/js/auth.js">
</script>

</body>

</html>
