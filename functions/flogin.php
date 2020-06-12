<?php
require_once "../connexion.php";
session_start();
require_once "functions.php";
if (isset($_POST['loginBtn'])) {


    if (empty($_POST['email']) || empty($_POST['password'])) {
        header("location: ../index.php?error=emptyfields");
        exit();
//        print_r('erooor');
//        die();
    } else {
        $sql = "SELECT * FROM `users` WHERE `mail`= :email AND `password`= :password";
        $result = $conn->prepare($sql);

        $result->bindParam(':email', $email);
        $result->bindParam(':password', $password);

        $email = $_POST['email'];
        $password = $_POST['password'];
        $result->execute();
        $end = $result->fetch();

        if (!empty($end)) {
            print_r($end);
//        die();
            $type = $end['type'];

            $_SESSION['email'] = $end['mail'];
            $_SESSION['password'] = $end['password'];
            $_SESSION['nom'] = $end['nom'];
            $_SESSION['prenom'] = $end['prenom'];
            $_SESSION['cin'] = $end['cin'];
            $_SESSION['tel'] = $end['tel'];
            $_SESSION['service'] = $end['service'];
            $_SESSION['userType'] = $end['type'];

            redirectUser($end['type']);
            exit();
        } else {
            header("location: ../index.php?error=00");


        }
//    $_SESSION[]
//        switch ($type) {
//            case 1:
//                header('location: ../directeur.php');
//                break;
//
//            case 2:
//                header('location: ../admin.php');
//                break;
//
//            case 3:
//                header('location: ../employer.php');
//                break;
//
//            default:
//                header('location: ../index.php');
//        }

//    header('location: ../index.php');
    }
}
