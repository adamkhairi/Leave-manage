<!--**** NAVBAR ****-->

<?php
require "connexion.php";
@include "includes/header.php";
if (!empty($_SESSION)) {
    if ($_SESSION['typeUser'] > 2) {
// header('location: index.php?x=dd');
// die();
       require_once "functions/functions.php";
       redirectUser($_SESSION['typeName']);
//        exit();
    }
}
?>


<!--**** MAIN ****-->

<main class="h-screen">
    <section class="showEmployer container mx-auto px-4 rounded-md shadow border border-gray-200">
        <!--        TODO:Add Search Bar (by"CIN")       -->
        <h1 class="text-gray-900 font-bold text-2xl text-center mt-4">Employer List</h1>

        <?php include "includes/empList.php" ?>

    </section>


    <!--    **** Add Employer ****-->

    <section class="addEmployer container mx-auto hidden px-4 rounded-md shadow border border-gray-200">

        <h1 class="text-gray-900 font-bold text-2xl text-center mt-4">New Employer</h1>
        <?php include "includes/addEmpForm.php" ?>

    </section>
    <section class="updateEmployer container mx-auto hidden px-4 rounded-md shadow border border-gray-200">
        <h1 class="text-gray-900 font-bold text-2xl text-center mt-4">Update Information</h1>

        <?php include "includes/updateEmp.php" ?>


    </section>
<!--    **********-->

    <section>
        <div class="flex justify-around items-center py-3 bg-gray-900 rounded-t-lg bottom_nav ">


            <?php include "includes/bottomMenu.php" ?>
        </div>
    </section>
</main>
</body>
<!--**** FOOTER ****-->
<?php @include "includes/footer.php"; ?>
<script src="dist/js/directeur.js"></script>
<script>
	$(document).ready(function () {
		$('#sCin').keyup(function () {
			let search = $(this).val();
			$.ajax({
				url: 'functions/srch.php',
				method: 'post',
				data: {query: search},
				success: function (data) {
					$('#table-data').html(data);
				}
			})
		})
		$('#searchup').keyup(function () {
			let search = $(this).val();
			$.ajax({
				url: 'functions/upsrc.php',
				method: 'post',
				data: {query: search},
				success: function (data) {
					$('#form-update').html(data);
				}
			})
		})
	})
</script>