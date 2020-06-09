<!--**** NAVBAR ****-->

<?php require "connexion.php";
@include "includes/header.php";
if (!empty($_SESSION)) {
//     if ($_SESSION['userType'] !== 1) {
//         header('location: admin.php');

// ////    ** XDEBUG **
// ////    phpinfo();
//     }
}else{
    header('location: index.php');

}

?>


<!--**** MAIN ****-->

<main class="h-screen">
    <section class="showEmployer container mx-auto px-4 mt-16 rounded-md shadow border border-gray-200">
        <!--        TODO:Add Search Bar (by"CIN")       -->
        <h1 class="text-gray-900 font-bold text-2xl text-center mt-4">Employer List</h1>

        <?php include "includes/empList.php" ?>

    </section>
    <section class="addEmployer container mx-auto mt-16 hidden rounded-md shadow border border-gray-200">
        <h1 class="text-gray-900 font-bold text-2xl text-center mt-4">Add new employer</h1>
        <form action="functions/addEmp.php" method="post">
            <div class="mt-8 p-4  ">
                <div>
                    <div class="font-bold text-gray-600 text-xs leading-8 uppercase h-6 mx-2 mt-3">Full Name</div>
                    <div class="flex flex-col md:flex-row">
                        <div class="w-full flex-1 mx-2 svelte-1l8159u">
                            <div class="bg-white my-2 p-1 flex border border-gray-200 rounded svelte-1l8159u">
                                <input placeholder="First Name" id="fName" name="fName"
                                       class="p-1 px-2 appearance-none outline-none w-full text-gray-800">
                            </div>
                        </div>
                        <div class="w-full flex-1 mx-2 svelte-1l8159u">
                            <div class="bg-white my-2 p-1 flex border border-gray-200 rounded svelte-1l8159u">
                                <input placeholder="Last Name" id="lName" name="lName"
                                       class="p-1 px-2 appearance-none outline-none w-full text-gray-800">
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col md:flex-row">
                        <div class="w-full mx-2 flex-1 svelte-1l8159u">
                            <div class="font-bold h-6 mt-3 text-gray-600 text-xs leading-8 uppercase"> Username</div>
                            <div class="bg-white my-2 p-1 flex border border-gray-200 rounded svelte-1l8159u">
                                <input placeholder="Just a hint.."
                                       class="p-1 px-2 appearance-none outline-none w-full text-gray-800">
                            </div>
                        </div>
                        <div class="w-full mx-2 flex-1 svelte-1l8159u">
                            <div class="font-bold h-6 mt-3 text-gray-600 text-xs leading-8 uppercase"> Your Email</div>
                            <div class="bg-white my-2 p-1 flex border border-gray-200 rounded svelte-1l8159u">
                                <input placeholder="example@mail.com" id="userMail" name="userMail"
                                       class="p-1 px-2 appearance-none outline-none w-full text-gray-800">
                            </div>
                        </div>
                    </div>

                </div>
                <div class="flex p-2 mt-4">
                    <div class="flex-auto flex flex-row-reverse">
                        <button class="text-base  ml-2  hover:scale-110 focus:outline-none flex justify-center px-4 py-2 rounded font-bold cursor-pointer
        hover:bg-teal-600
        bg-teal-600
        text-teal-100
        border duration-200 ease-in-out
        border-teal-600 transition">Next
                        </button>
                    </div>
                </div>

            </div>

        </form>
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

            <?php include "includes/bottomMenu.php" ?>
            <div class="">
                <button name="btn_demandeList" onclick="resRequest()" id="btn_demandeList"
                        class="bg-white mx-2 rounded-lg px-4 py-3 hover:bg-gray-700">
                    Leave Requests
                </button>
            </div>
        </div>

    </section>
</main>

<!--**** FOOTER ****-->

<?php @include "includes/footer.php"; ?>
<script src="dist/js/directeur.js"></script>
<script>

</script>
</body>