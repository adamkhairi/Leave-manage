<?php require "connexion.php";
@include "includes/header.php"; ?>

<main>
    <section class="section_Slide flex justify-center">
        <div class="w-full h-screen relative p-16">
<!--**** Alert ****-->
<?php
if (isset($_GET['error'])) {

    if ($_GET['error'] == 'emptyfields'){
echo "
<div class=\"flex error bg-orange-200 p-4\">
                <div class=\"mr-4\">
                    <div class=\"h-10 w-10 text-white bg-orange-600 rounded-full flex justify-center items-center\">
                        <i class=\"text-3xl fas fa-exclamation-circle\"></i>
                    </div>
                </div>
                <div class=\"flex justify-between w-full\">
                    <div class=\"text-orange-600\">
                        <p class=\"mb-2 font-bold\">
                            Info alert
                        </p>
                        <p class=\"\">
                            Please fill the inputs and retry
                        </p>
                    </div>
                    <div class=\"text-base text-gray-500\" onclick='closeAlert()'>
                        <span>x</span>
                    </div>
                </div>
            </div>
";
    }
    else if ($_GET['error'] == 'invalidMail') {

        echo "
        <div class=\"flex error bg-orange-200 p-4\">
                <div class=\"mr-4\">
                    <div class=\"h-10 w-10 text-white bg-orange-600 rounded-full flex justify-center items-center\">
                        <i class=\"text-3xl fas fa-exclamation-circle\"></i>
                    </div>
                </div>
                <div class=\"flex justify-between w-full\">
                    <div class=\"text-orange-600\">
                        <p class=\"mb-2 font-bold\">
                            Info alert
                        </p>
                        <p class=\"\">
                            Please verify your Email and retry !
                        </p>
                    </div>
                    <div class=\"text-base text-gray-500\" onclick='closeAlert()'>
                        <p>x</p>
                    </div>
                </div>
            </div>
        ";
    } else if ($_GET['error'] == 'invalidPwd') {

        echo "
        <div class=\"flex error bg-orange-200 p-4\">
                <div class=\"mr-4\">
                    <div class=\"h-10 w-10 text-white bg-orange-600 rounded-full flex justify-center items-center\">
                        <i class=\"text-3xl fas fa-exclamation-circle\"></i>
                    </div>
                </div>
                <div class=\"flex justify-between w-full\">
                    <div class=\"text-orange-600\">
                        <p class=\"mb-2 font-bold\">
                            Info alert
                        </p>
                        <p class=\"\">
                Please verify your Password and retry !
                        </p>
                    </div>
                    <div class=\"text-base text-gray-500\" onclick='closeAlert()'>
                        <p>x</p>
                    </div>
                </div>
            </div>
        ";
    } else if ($_GET['error'] == 'invalidInfo') {

        echo "
        <div class=\"flex error bg-orange-200 p-4\">
                <div class=\"mr-4\">
                    <div class=\"h-10 w-10 text-white bg-orange-600 rounded-full flex justify-center items-center\">
                        <i class=\"text-3xl fas fa-exclamation-circle\"></i>
                    </div>
                </div>
                <div class=\"flex justify-between w-full\">
                    <div class=\"text-orange-600\">
                        <p class=\"mb-2 font-bold\">
                            Info alert
                        </p>
                        <p class=\"\">
                         Please verify your Informations and retry !
                        </p>
                    </div>
                    <div class=\"text-base text-gray-700\" onclick='closeAlert()'>
                        <p>x</p>
                    </div>
                </div>
            </div>
        ";
    }
}
?>


            <!--*****-->
            <div class="relative z-20 flex flex-wrap h-full -mt-20 pt-32">

                <div class="w-full flex flex-column justify-center md:justify-end md:w-1/2">
                    <img src="dist/img/back1.svg" class="w-5/6" alt=""/>
                </div>

                <div class="w-full md:w-1/2 p-10 flex justify-center items-center text-gray-600">

                    <div class="max-w-xs">
                        <h1 class="text-6xl mb-4 leading-none">Welcome</h1>
                        <p class="mb-8 text-sm leading-relaxed">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            Amet autem beatae error esse molestias nulla voluptatem, voluptates? Nobis omnis, quae.
                        </p>
                        <a href="#" onclick="openLogin()"
                           class="bg-gray-900 text-white uppercase font-sans text-xs px-4 py-3">Start now<i
                                    class="ml-1 fa fa-chevron-right" aria-hidden="true"></i></a>
                    </div>

                </div>

            </div>

            <div class="z-10 w-1/2 h-full bg-gray-900 absolute top-0 left-0 -ml-20"></div>


        </div>
    </section>
    <!--************-->
    <hr>
    <!--**************-->
    <section class="section_infos shadow-sm ">
        <div class="w-full py-40">
            <div class="flex flex-wrap max-w-3xl mx-auto items-center">
                <!--                ***-->
                <div class="w-4/12 pr-6">
                    <h2 class="text-5xl text-gray-900 leading-tight text-right font-bold">About us</h2>
                </div>
                <!--                *****-->
                <div class="w-8/12">
                    <p class="opacity-75 leading-relaxed mb-8">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Amet autem beatae error esse molestias nulla voluptatem, voluptates? Nobis omnis, quae.</p>
                    <a href="#" class="bg-gray-900 text-white uppercase font-sans text-xs px-4 py-3">Learn more
                        <i class="ml-1 fa fa-chevron-right" aria-hidden="true"></i>
                    </a>
                </div>

            </div>


        </div>
    </section>
    <!--********-->
    <hr>

    <!--    *********-->
    <!--*********** POPUPS **********-->
    <!--Login-->
    <div class="hidden w-full flex flex-wrap fixed top-0 z-40" id="loginpop">

        <!-- Login Section -->
        <div class="w-full md:w-1/2 flex flex-col bg-white ">

            <div class="flex justify-center md:justify-start pt-12 md:pl-12 md:-mb-24">
                <a href="#" class="bg-gray-900 text-white font-bold text-xl p-4">Logo</a>
            </div>

            <div class="flex flex-col justify-center md:justify-start my-auto pt-8 md:pt-0 px-8 md:px-24 lg:px-32">
                <p class="text-center text-3xl">Welcome.</p>

                <!--***** Form Log IN *****-->

                <form action="functions/flogin.php"
                      class="flex flex-col pt-3 md:pt-8"
                      method="post"
                      >

                    <div class="flex flex-col pt-4">
                        <label for="email" class="text-lg">Email</label>
                        <input type="email" id="email" name="email" placeholder="your@email.com"
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

        <!-- Image Section -->
        <div class="w-1/2 shadow-2xl">
            <div class="absolute right-0 m-4 text-3xl text-white hover:text-gray-200" onclick="openLogin()">
                <i class="fas fa-window-close"></i>
            </div>
            <img class="object-cover w-full h-screen hidden md:block" src="https://source.unsplash.com/IXUM4cJynP0">
        </div>
    </div>

</main>

<?php @include "includes/footer.php"; ?>
