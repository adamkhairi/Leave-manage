<!--**** NAVBAR ****-->

<?php require "connexion.php";
@include "includes/header.php";
if (!empty($_SESSION)) {



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
                            <div class="font-bold h-6 mt-3 text-gray-600 text-xs leading-8 uppercase"> CIN*</div>
                            <div class="bg-white my-2 p-1 flex border border-gray-200 rounded svelte-1l8159u">
                                <input placeholder="AB123456"
                                       class="p-1 px-2 appearance-none outline-none w-full text-gray-800"
                                       type="text"
                                       name="cin">
                            </div>
                        </div>
                        <div class="w-full mx-2 flex-1 svelte-1l8159u">
                            <div class="font-bold h-6 mt-3 text-gray-600 text-xs leading-8 uppercase">Phone Nbr.</div>
                            <div class="bg-white my-2 p-1 flex border border-gray-200 rounded svelte-1l8159u">
                                <input placeholder="Tel: 0600000000" id="tel" name="tel"
                                       class="p-1 px-2 appearance-none outline-none w-full text-gray-800"
                                       type="text">
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col md:flex-row">
                        <div class="w-full mx-2 flex-1 svelte-1l8159u">
                            <div class="font-bold h-6 mt-1 text-gray-600 text-xs leading-8 uppercase"> User Type</div>
                            <div class="rounded relative">
                                <div class="flex svelte-1l8159u my-2 p-1">
                                    <select name="type" required
                                            class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                            id="grid-state">
                                        <option selected disabled>Select</option>
                                        <?php
                                        $sql = "SELECT * FROM `tuser`";
                                        $result = $conn->prepare($sql);
                                        $result->execute();
                                        $end = $result->fetchAll();
                                        print_r($end);
                                        foreach ($end as $row) {
                                            echo "<option value='" . $row['typeUser'] . "'>" . $row['name'] . "</option>";
                                        }
                                        //                                        die();


                                        ?>
                                    </select>
                                    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                             viewBox="0 0 20 20">
                                            <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="w-full mx-2 flex-1 svelte-1l8159u">
                            <div class="font-bold h-6 mt-3 text-gray-600 text-xs leading-8 uppercase">Employer Service
                            </div>
                            <div class="bg-white my-2 p-1 flex border border-gray-200 rounded svelte-1l8159u">
                                <input placeholder="Discription..." id="userMail" name="service"
                                       class="p-1 px-2 appearance-none outline-none w-full text-gray-800"
                                       type="text">
                            </div>
                        </div>

                    </div>
                    <div class="flex flex-col md:flex-row">

                        <div class="w-full mx-2 flex-1 svelte-1l8159u">
                            <div class="font-bold h-6 mt-3 text-gray-600 text-xs leading-8 uppercase"> Password*</div>
                            <div class="bg-white my-2 p-1 flex border border-gray-200 rounded svelte-1l8159u">
                                <input placeholder="******"
                                       class="p-1 px-2 appearance-none outline-none w-full text-gray-800"
                                       type="password"
                                name="password">
                            </div>
                        </div>
                        <div class="w-full mx-2 flex-1 svelte-1l8159u">
                            <div class="font-bold h-6 mt-3 text-gray-600 text-xs leading-8 uppercase">Employer Email*
                            </div>
                            <div class="bg-white my-2 p-1 flex border border-gray-200 rounded svelte-1l8159u">
                                <input placeholder="example@mail.com" id="userMail" name="userMail"
                                       class="p-1 px-2 appearance-none outline-none w-full text-gray-800"
                                       type="email">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex p-2 mt-4">
                    <div class="flex-auto flex flex-row-reverse">
                        <button class="text-base  ml-2  hover:bg-gray-700 focus:outline-none flex justify-center px-4 py-2 rounded font-bold cursor-pointer
        bg-gray-900
        text-gray-100 shadow-lg hover:shadow
                border duration-200 ease-in-out
        border-gray-600 transition" type="submit" name="addmEmp">Add Employer
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
            <div class="tools">
                <button name="btn_demandeList" onclick="resRequest()" id="btn_demandeList"
                        class="bg-white mx-2 rounded-lg px-4 py-3 hover:bg-gray-300 hover:text-white">
                    <i class="fas fa-envelope-open-text text-gray-900  text-2xl"></i>
                </button>
                <h3 class="text-white rqt hidden font-bold text-center mt-3"> Requests </h3>

            </div>
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
                    <p class=\" text-gray-700 ml-0 sm:ml-2\">Please insert Employer ' CIN, EMAIL, PASSWORD '</p>
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
}?>
<?php @include "includes/footer.php"; ?>
<script src="dist/js/directeur.js"></script>
<script>

</script>
</body>