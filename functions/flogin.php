<?php
require_once "../connexion.php";
session_start();
require_once "functions.php";
if (isset($_POST['loginBtn'])) {

    if (!empty($_POST['email']) || !empty($_POST['password'])) {
        $email = $_POST['email'];

        $sql = "SELECT * FROM users INNER JOIN tuser ON users.type=tuser.typeUser WHERE users.mail= ?";
        $result = $conn->prepare($sql);
        $result->execute([$email]);
        $end = $result->fetch();


        if (!empty($end)) {
            $password = $_POST['password'];

            if ($end['password'] == $password) {
//                print_r($end);
//        die();

                $_SESSION['nom'] = $end['nom'];
                $_SESSION['prenom'] = $end['prenom'];
                $_SESSION['email'] = $end['mail'];
                $_SESSION['cin'] = $end['cin'];
                $_SESSION['tel'] = $end['tel'];
                $_SESSION['service'] = $end['service'];
                $_SESSION['typeUser'] = $end['type'];
                $_SESSION['typeName'] = $end['name'];
                $type = $end['name'];
//print_r($end['name']);
//print_r($end['typeUser']);
//die();
                redirectUser($type);
                exit();
            } else {
                header("location: ../index.php?error=Pwd");
            }
        } else {
            header("location: ../index.php?error=LOG");
        }
    } else {
        header("location: ../index.php?error=EmF");
    }
}
