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
            <a href="index.php" class="text-gray-900 no-underline mr-2 sm:mr-6">
                <span class="m-0 sm:ml-2">Home</span>
            </a>
            <a href="#about-us" class="text-gray-900 text-center sm:text-left no-underline mr-2 sm:mr-6">
                <span class="flex-no-wrap m-0 sm:ml-2">About us</span>
            </a>
        </div>

        <div class="flex justify-center mt-12 text-center md:mt-12 shadow">
            <a href="#"
               class="bg-gray-900 h-12 md:h-16 rounded-lg w-32 text-white font-bold text-xs md:text-xl p-4 hover:bg-transparent">Logo</a>
        </div>

        <div class="h-full flex items-center">

            <?php
            if (!empty($_SESSION['email'])) {

                if ($_SESSION['typeUser'] == 1) {
                    echo "
                   <a href=\"Director.php\" class=\"text-gray-900 no-underline ml-6 hover:bg-gray-200\">
                        <span class=\"m-0 sm:ml-2\">".$_SESSION['typeName']."'s Profile</span>
                    </a>
                ";

                } else if ($_SESSION['typeUser'] == 2) {
                    echo "
                   <a href=\"Admin.php\" class=\"text-gray-900 no-underline ml-6 hover:bg-gray-100 px-4 py-1 pr-5\">
                        <span class=\"m-0 sm:ml-2\">".$_SESSION['typeName']." Profile</span>
                    </a>
                ";
                }else if ($_SESSION['typeUser'] == 3) {
                    echo "
                   <a href=\"Employer.php\" class=\"text-gray-900 no-underline ml-6\">
                        <span class=\"m-0 sm:ml-2\">".$_SESSION['typeName']." Profile</span>
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
