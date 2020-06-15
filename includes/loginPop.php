<div class="hidden w-full flex flex-wrap fixed top-0 z-40" id="loginpop">

    <!-- Login Section -->
    <div class="w-full md:w-1/2 flex flex-col bg-white ">

        <div class="flex justify-center md:justify-start pt-12 md:pl-12 md:-mb-24">
            <a href="#" class="bg-gray-900 text-white font-bold text-xl p-4">Logo</a>
        </div>

        <div class="flex flex-col justify-center md:justify-start my-auto pt-8 md:pt-0 px-8 md:px-24 lg:px-32">
            <p class="text-center text-3xl">Welcome.</p>

            <!--***** Form Log IN *****-->

            <form action="index.php"
                  class="flex flex-col pt-3 md:pt-8"
                  method="post"
            >

                <div class="flex flex-col pt-4">
                    <label for="mail" class="text-lg">Email</label>
                    <input type="email" id="mail" name="mail" placeholder="your@email.com"
                           class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mt-1 leading-tight focus:outline-none focus:shadow-outline">
                </div>

                <div class="flex flex-col pt-4">
                    <label for="password" class="text-lg">Password</label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mt-1 leading-tight focus:outline-none focus:shadow-outline"
                           id="password" name="password" placeholder="Password"
                           type="password">
                </div>

                <!--**** Submit ****-->

                <button class="bg-gray-900 text-white rounded font-bold text-lg hover:bg-gray-700 p-2 mt-8"
                        name="loginBtn"
                        type="submit">Log In
                </button>
            </form>
            <div class="text-center pt-12 pb-12">
                <p>Don't have an account? <a href="#" class="underline font-semibold">Register here.</a>
                </p>
            </div>
        </div>

    </div>
    <div class="absolute right-0 m-4 text-3xl text-gray-900 md:text-white hover:text-gray-200" onclick="openLogin()">
        <i class="fas fa-window-close"></i>
    </div>
    <!-- Image Section -->
    <div class="w-1/2 shadow-2xl">

        <div class="object-cover w-full h-screen hidden md:block bg-gray-900">
        </div>
    </div>
</div>
