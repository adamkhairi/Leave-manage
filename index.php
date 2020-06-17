<?php require "connexion.php";
@include "includes/header.php"; ?>


<section class="section_Slide flex justify-center">
    <div class="w-full h-screen relative p-16">


        <!--*****-->
        <div class="relative z-20 flex flex-wrap h-full -mt-32 pt-32">

            <div class="w-full  bg-transparent flex flex-column justify-center -ml-8 md:justify-start md:w-1/2">
                <!--                    <img src="dist/img/bg-1.svg" class="w-5/6" alt="Header Background"/>-->
                <img src="dist/img/bg-1.svg" class="w-11/12 md:mt-20 m-8" alt="Header Background"/>

            </div>

            <div class="w-full md:w-1/2 p-10 flex justify-center items-center text-gray-600">

                <div class="max-w-xs">
                    <h1 class="text-6xl mb-4 leading-none ">Welcome</h1>
                    <p class="mb-8 text-sm leading-relaxed">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Amet autem beatae error esse molestias nulla voluptatem, voluptates? Nobis omnis, quae.
                    </p>
                    <a href="#" onclick="openLogin()"
                       class="bg-gray-900 text-white shadow uppercase font-sans text-xs px-4 py-3 hover:bg-gray-700">Start
                        now<i
                                class="ml-1 fa fa-chevron-right" aria-hidden="true"></i></a>
                </div>

            </div>

        </div>

        <div class="z-10 w-1/2 h-full bg-gray-900 absolute top-0 left-0 bottom-0">

        </div>


    </div>
</section>
<!--************-->
<hr>
<!--**************-->
<section class="section_infos shadow-sm " id="about-us">
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
                <a href="#"
                   class="bg-gray-900 text-white shadow uppercase  text-xs px-4 py-3 hover:bg-gray-700">Learn
                    more
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

<?php include "includes/loginPop.php"; ?>


<!--**** Alert ****-->
<?php
include "includes/error.php"
?>

<?php include "includes/footer.php"; ?>
