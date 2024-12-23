<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
</head>

<body>

    <section class="py-10 bg-gray-100">
        <div class="grid lg:grid-cols-2 grid-cols-1 max-w-5xl lg:mt-12 mx-auto gap-6 lg:gap-0">
            <div
                class="bg-no-repeat bg-cover bg-center rounded-lg lg:h-auto h-64"
                style="background-image: url('https://img.freepik.com/premium-photo/hand-men-type-laptop-computer-keyboard-digital-business-communication-concept_861577-834.jpg');">
                <div class="text-center lg:mt-36 mt-20 text-white p-8 bg-black bg-opacity-40 lg:h-auto h-full flex flex-col justify-center">
                    <h1 class="font-bold text-3xl lg:text-4xl">Welcome to our shop</h1>
                    <p class="text-lg lg:text-2xl font-semibold mt-4">
                        Please log in using your personal information to stay connected with us.
                    </p>
                </div>
            </div>
            <div class="bg-white w-full p-8 rounded-lg shadow-lg">
                <h1 class="text-3xl font-bold text-center text-gray-800 mb-3">Login to Your Account</h1>
                <?php if(isset($_GET["failed"]) && $_GET["failed"] == "true" ) {?>
     <div class="denger pl-16 text-red-500 font-serif font-bold text-xl">Your password doesn't match!</div>
    <?php } ?>
    <?php if(isset($_GET["user"]) && $_GET["user"] == "true" ) {?>
     <div class="denger pl-28 text-red-500 font-serif font-bold text-xl">You crate an account!</div>
    <?php } ?>
                <form action="login_action.php" method="POST" class="space-y-4">
                    <div>
                        <label for="email" class="block text-sm font-bold text-gray-600">Email</label>
                        <input type="email" id="email" name="email" required
                            class="w-full px-4 py-2 border rounded-md text-gray-700 focus:ring-2 focus:ring-blue-400 focus:outline-none"
                            placeholder="Enter your email">
                    </div>

                    <div>
                        <label for="password" class="block text-sm font-bold text-gray-600">Password</label>
                        <input type="password" id="password" name="password" required
                            class="w-full px-4 py-2 border rounded-md text-gray-700 focus:ring-2 focus:ring-blue-400 focus:outline-none"
                            placeholder="Enter your password">
                    </div>

                    <button type="submit"
                        class="w-full bg-slate-700 hover:bg-green-600 text-white py-2 rounded-md font-medium transition">
                        Login
                    </button>
                </form>

                <div class="flex items-center my-6">
                    <div class="flex-grow h-px bg-gray-300"></div>
                    <span class="mx-3 text-sm text-gray-400">OR</span>
                    <div class="flex-grow h-px bg-gray-300"></div>
                </div>
    
                <!--Here the google and facebook Login Buttons -->
                <div class="space-y-3">
                    <button
                        class="w-full flex items-center justify-center bg-zinc-950 hover:bg-red-600 text-white py-2 rounded-md transition">
                        <ion-icon class="text-white font-medium text-lg mr-2" name="logo-google"></ion-icon>
                        Login with Google
                    </button>

                    <button
                        class="w-full flex items-center justify-center bg-blue-700 hover:bg-blue-900 text-white py-2 rounded-md transition">
                        <ion-icon class="text-white font-medium text-lg mr-2" name="logo-facebook"></ion-icon>
                        Login with Facebook
                    </button>
                </div>

                <div class="text-center mt-6">
                    <p class="text-gray-600 text-sm">Don't have an account? 
                        <a href="registrationForm.php" class="text-blue-500 hover:underline font-medium">Sign up</a>
                    </p>
                </div>
            </div>
        </div>
    </section>
    

</body>

</html>