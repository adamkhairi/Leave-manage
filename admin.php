<!--**** NAVBAR ****-->

<?php require "connexion.php";
@include "includes/header.php";
if (empty($_SESSION['email']) &&  ($_SESSION['userType'] !== 1 || $_SESSION['userType'] !== 2 )){
    header('location: index.php');
}
?>


<!--**** MAIN ****-->

<main class="h-screen">
    <section class="showEmployer px-4 mt-16">
        <?php include "functions/empList.php"?>

    </section>

<section>
    <div class="flex justify-around items-center py-3 bg-gray-900 rounded-t-lg bottom_nav ">


    <?php include "includes/bottomMenu.php"?>
    </div>
</section>
</main>

<!--**** FOOTER ****-->
<?php @include "includes/footer.php"; ?>
<script src="dist/js/directeur.js"></script>
