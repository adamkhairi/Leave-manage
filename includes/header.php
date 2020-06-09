<?php session_start(); ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="dist/css/tailwind.css">
    <link rel="stylesheet" href="dist/css/main.css">
    <script src="https://kit.fontawesome.com/8ac7442e81.js" crossorigin="anonymous"></script>
    <title>Leave Manage</title>
</head>
<body>
<nav class="w-full px-6 bg-white shadow-lg relative z-30 sticky top-0">
    <div class="container mx-auto max-w-4xl h-16 flex justify-around text-xs md:text-sm">

        <div class="h-full flex items-center">
            <a href="index.php" class="text-gray-900 no-underline mr-6">
                <span class="m-0 sm:ml-2">Home</span>
            </a>
            <a href="#about-us" class="text-gray-900 text-center sm:text-left no-underline mr-6">
                <span class=" m-0 sm:ml-2">About us</span>
            </a>
        </div>

        <div class="flex justify-center mt-12 text-center md:mt-12 shadow">
            <a href="#"
               class="bg-gray-900 h-12 md:h-16 rounded-lg w-32 text-white font-bold text-xs md:text-xl p-4 hover:bg-transparent">Logo</a>
        </div>

        <div class="h-full flex items-center">

            <?php
            if (!empty($_SESSION['email'])) {

                if ($_SESSION['userType'] == 1) {
                    echo "
                   <a href=\"directeur.php\" class=\"text-gray-900 no-underline ml-6 hover:bg-gray-200\">
                        <span class=\"m-0 sm:ml-2\">Profile</span>
                    </a>
                ";

                } else if ($_SESSION['userType'] == 2) {
                    echo "
                   <a href=\"admin.php\" class=\"text-gray-900 no-underline ml-6 hover:bg-gray-100 px-4 py-1 pr-5\">
                        <span class=\"m-0 sm:ml-2\">Profile</span>
                    </a>
                ";
                }else if ($_SESSION['userType'] == 3) {
                    echo "
                   <a href=\"employer.php\" class=\"text-gray-900 no-underline ml-6\">
                        <span class=\"m-0 sm:ml-2\">Profile</span>
                    </a>
                ";
                }
                echo "
                   <a href=\"functions/logout.php\"
                    class=\"button3 bg-gray-900 px-5 py-2 border rounded text-gray-200 hover:bg-gray-700 shadow ml-6\">
                     <span>Log Out</span>
                   </a>
               
                ";
            } else {
                echo "
                   <a href=\"#\"  onclick=\"openLogin()\"
                    class=\"button3 bg-gray-900 px-5 py-2 border rounded text-gray-200 hover:bg-gray-700 shadow ml-6\">
                     <span>Log In</span>
                   </a>
               
                ";
            }

            ?>

        </div>
    </div>
</nav>

<!--<div class="w-full md:w-1/4 lg:w-1/6 bg-gray-900 md:bg-gray-900 px-2 text-center fixed bottom-0 md:pt-8 md:top-0 md:left-0 h-16 md:h-screen md:border-r-4 md:border-gray-600">-->
<!--   <div class=" w-1/3">-->
<!--        <img src="dist/img/logo.png" class="hidden md:flex text-center mx-auto pb-8 w-16" alt="logo">-->
<!--   </div>-->
<!--    <div class="md:relative mx-auto mx-auto lg:px-6">-->
<!--        <ul class=" flex flex-row md:flex-col text-center md:text-left">-->
<!--            <li class="mr-3 flex-1 text-center">-->
<!--                <a href="index.php" class="block py-1 md:py-5 pl-1 align-middle text-gray-800 no-underline hover:text-pink-500 border-b-2 border-gray-800 md:border-gray-900 hover:border-pink-500">-->
<!--                    <i class="fas fa-home pr-0 md:pr-3 text-lg hover:text-3xl"></i><span class="pb-1 md:pb-0 text-xs md:text-base text-gray-600 md:text-gray-400 block md:inline-block">Home</span>-->
<!--                </a>-->
<!--            </li>-->
<!--            <li class="mr-3 flex-1 text-center px-2">-->
<!--                <a href="#" class="block py-1 md:py-5 pl-1 align-middle text-gray-800 no-underline hover:text-pink-500 border-b-2 border-gray-800 md:border-gray-900 hover:border-pink-500">-->
<!--                    <i class="fas fa-user-circle pr-0 md:pr-3 text-lg hover:text-3xl"></i><span class="pb-1 md:pb-0 text-xs md:text-base text-gray-600 md:text-gray-400 block md:inline-block">Profile</span>-->
<!--                </a>-->
<!--            </li>-->
<!--            <li class="mr-3 flex-1 text-center">-->
<!--                <a href="#" class="block py-1 md:py-5 pl-1 align-middle text-gray-800 no-underline hover:text-pink-500 border-b-2 border-gray-800 md:border-gray-900 hover:border-pink-500">-->
<!--                    <i class="fas fa-user-circle pr-0 md:pr-3 text-lg hover:text-3xl"></i><span class="pb-1 md:pb-0 text-xs md:text-base text-gray-600 md:text-gray-400 block md:inline-block">Profile</span>-->
<!--                </a>-->
<!--            </li>-->
<!---->
<!--        </ul>-->
<!--    </div>-->
<!--</div>-->