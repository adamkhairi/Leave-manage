<!--**** NAVBAR ****-->

<?php require "connexion.php";
@include "includes/header.php";
if (empty($_SESSION['email']) && $_SESSION['userType'] !== 1) {
header('location: index.php');
}

?>


<!--**** MAIN ****-->

<main class="h-screen">
    <section class="showEmployer px-4 mt-16">
       <?php include "functions/empList.php"?>

    </section>
    <section class="addEmployer hidden">

        bbbbbbbbbbbbbbbbb


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
    <div class="flex justify-around items-center py-3 bg-gray-900 rounded-t-lg bottom_nav ">

    <?php include "includes/bottomMenu.php"?>
        <div class="">
            <button name="btn_demandeList" onclick="resRequest()" id="btn_demandeList" class="bg-white rounded-lg px-4 py-3 hover:bg-gray-700">
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