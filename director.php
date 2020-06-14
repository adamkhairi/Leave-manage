<!--**** NAVBAR ****-->

<?php require "connexion.php";
@include "includes/header.php";
if (!empty($_SESSION)) {
    if ($_SESSION['typeUser'] !== 1) {
header('location: index.php?error=dd');
////die();
//        require_once "functions/functions.php";
//        redirectUser($_SESSION['typeN']);
////        exit();
    }

}

?>


<!--**** MAIN ****-->

<main class="h-screen">
    <section class="showEmployer container mx-auto px-4 mt-16 rounded-md shadow border border-gray-200">
        <!--        TODO:Add Search Bar (by"CIN")       -->
        <h1 class="text-gray-900 font-bold text-2xl text-center mt-4">Employer List</h1>

        <?php include "includes/empList.php" ?>

    </section>

    <!--    **** Add Employer ****-->

    <section class="addEmployer container mx-auto mt-16 hidden rounded-md shadow border border-gray-200">

        <h1 class="text-gray-900 font-bold text-2xl text-center mt-4">New Employer</h1>
        <?php include "includes/addEmpForm.php" ?>

    </section>
    <section class="updateEmployer hidden">


        cccccccccccc

    </section>
    <section class="delEmployer hidden">

        dddddddddddddd


    </section>
    <section class="demande hidden">

        wwwwwwwwwwwwwww


    </section>

    <section>
        <div class="flex justify-around items-center py-3 bg-gray-900 rounded-t-lg bottom_nav sm:w-auto m-0 ">

            <?php include "includes/bottomMenu.php";
            if (!empty($_SESSION)) {

                if ($_SESSION['typeUser'] == 1) {
                    echo "
                
                <div class=\"tools\" onclick=\"resRequest()\">
                <button name=\"btn_demandeList\" id=\"btn_demandeList\"
                        class=\"bg-white mx-2 border shadow-md border-gray-900 rounded-lg px-4 py-3 hover:bg-gray-300 hover:text-white\">
                    <i class=\"fas fa-envelope-open-text text-gray-900  text-2xl\"></i>
                </button>
                <h5 class=\"text-white rqt hidden text-center mt-2\"> Requests </h5>

            </div>
                ";
                }
            }


            ?>

        </div>

    </section>
</main>

<!--**** FOOTER ****-->
<?php if (isset($_GET['add'])) {

    if ($_GET['add'] == 'OK') {
        echo "

            
             <div class=\"flex items-center error bg-green-200  rounded mt-6 px-2 mx-8 shadow-md\" >
                <div class=\"mr-6  rounded px-4 py-2 text-center bg-green-600 \">
                    <svg fill=\"none\" viewBox=\"0 0 24 24\" class=\"w-8 h-8 text-white\" stroke=\"currentColor\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z\"/>
                    </svg>
                </div>
                <div class=\"flex flex-wrap  items-center rounded-lg rounded-l-none\">
                    <h1 class=\"text-green-600 text-2xl font-bold mr-2 \">Info</h1>
                    <p class=\" text-gray-700 ml-0 sm:ml-2\">New Employer has been Added</p>
                </div>
                <div class=\"flex justify-end flex-1\" onclick='closeAlert()'>
                    <svg fill=\"none\" viewBox=\"0 0 24 24\" class=\"w-4 h-4 text-green-600\" stroke=\"currentColor\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M6 18L18 6M6 6l12 12\"/>
                    </svg>
                </div>
            </div><!--one-->
           <script >
             document.querySelector('.addEmployer').classList.remove('hidden');
	         document.querySelector('.showEmployer').classList.add('hidden');

           </script>
";
    }
    if ($_GET['add'] == 'EF') {
        echo "

            
             <div class=\"flex items-center error bg-red-200  rounded mt-6 px-2 mx-8 shadow-md\" >
                <div class=\"mr-6  rounded px-4 py-2 text-center bg-red-600 \">
                    <svg fill=\"none\" viewBox=\"0 0 24 24\" class=\"w-8 h-8 text-white\" stroke=\"currentColor\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z\"/>
                    </svg>
                </div>
                <div class=\"flex flex-wrap  items-center rounded-lg rounded-l-none\">
                    <h1 class=\"text-red-600 text-2xl font-bold mr-2 \">Info</h1>
                    <p class=\" text-gray-700 ml-0 sm:ml-2\">Please insert Employer at least ' CIN, EMAIL, PASSWORD '</p>
                </div>
                <div class=\"flex justify-end flex-1\" onclick='closeAlert()'>
                    <svg fill=\"none\" viewBox=\"0 0 24 24\" class=\"w-4 h-4 text-red-600\" stroke=\"currentColor\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M6 18L18 6M6 6l12 12\"/>
                    </svg>
                </div>
            </div><!--one-->
            <script >
                document.querySelector('.addEmployer').classList.remove('hidden');
                document.querySelector('.showEmployer').classList.add('hidden');
            </script>
";
    }
    if ($_GET['add'] == 'NOT') {
        echo "

            
             <div class=\"flex items-center error bg-red-200  rounded mt-6 px-2 mx-8 shadow-md\" >
                <div class=\"mr-6  rounded px-4 py-2 text-center bg-red-600 \">
                    <svg fill=\"none\" viewBox=\"0 0 24 24\" class=\"w-8 h-8 text-white\" stroke=\"currentColor\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z\"/>
                    </svg>
                </div>
                <div class=\"flex flex-wrap  items-center rounded-lg rounded-l-none\">
                    <h1 class=\"text-red-600 text-2xl font-bold mr-2 \">Info</h1>
                    <p class=\" text-gray-700 ml-0 sm:ml-2\">Noting to add !</p>
                </div>
                <div class=\"flex justify-end flex-1\" onclick='closeAlert()'>
                    <svg fill=\"none\" viewBox=\"0 0 24 24\" class=\"w-4 h-4 text-red-600\" stroke=\"currentColor\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M6 18L18 6M6 6l12 12\"/>
                    </svg>
                </div>
            </div><!--one-->
            <script >
                document.querySelector('.addEmployer').classList.remove('hidden');
                document.querySelector('.showEmployer').classList.add('hidden');
            </script>
";
    }
} ?>
<?php @include "includes/footer.php"; ?>
<script src="dist/js/directeur.js"></script>
<script>

</script>
</body>