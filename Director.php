<!--**** NAVBAR ****-->

<?php require "connexion.php";
@include "includes/header.php";
if (!empty($_SESSION)) {
    if ($_SESSION['typeUser'] != 1) {
// header('location: index.php?x=dd');
// die();
        require_once "functions/functions.php";
        redirectUser($_SESSION['typeName']);
//        exit();
    }
}

?>


<!--**** MAIN ****-->

<main class="">
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

    <section class="demande hidden">

        wwwwwwwwwwwwwww


    </section>
<!--******************-->
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
<?php include "includes/error.php" ?>
<?php include "includes/footer.php"; ?>
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
</body>