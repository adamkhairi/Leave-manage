<?php
require_once "../connexion.php";
session_start();

//    if (!empty($_SESSION['mail'])){
//        $iddemande = intval($_GET['e']);
//        $sql = "DELETE FROM `demande` WHERE `iddemande` = " . $iddemande . " ";
//        $send = mysqli_query($conn, $sql);
//    }
if (!empty($_SESSION['email'])){
    $cin = $_GET['CIN'];
    $sql = "DELETE FROM `users` WHERE cin = :cin";
    $sql = $conn->prepare($sql);
    $sql->bindParam(':cin', $cin);

//    print_r($cin);
//    die();
    $sql->execute();
    echo "Done !!!";
    header('location: ../directeur.php');
}