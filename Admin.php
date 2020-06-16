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
    <section class="showEmployer px-4 mt-16">
        <?php include "includes/empList.php" ?>

    </section>

    <section>
        <div class="flex justify-around items-center py-3 bg-gray-900 rounded-t-lg bottom_nav ">


            <?php include "includes/bottomMenu.php" ?>
        </div>
    </section>
</main>

<!--**** FOOTER ****-->
<?php @include "includes/footer.php"; ?>
<script src="dist/js/directeur.js"></script>
