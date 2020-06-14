<?php
require_once "../connexion.php";
session_start();
require_once "functions.php";
if (isset($_POST['loginBtn'])) {
    if (!empty($_POST['mail']) || !empty($_POST['password'])) {

        $mail = $_POST['mail'];
        $password = $_POST['password'];
        $sql = "SELECT * FROM users INNER JOIN tuser ON users.type=tuser.typeUser WHERE users.mail= ? ";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$mail]);
        $data = $stmt->fetch();

        if (!empty($data)) {
            if ($data['password'] == $password) {

                $_SESSION['nom'] = $data['nom'];
                $_SESSION['prenom'] = $data['prenom'];
                $_SESSION['cin'] = $data['cin'];
                $_SESSION['tel'] = $data['tel'];
                $_SESSION['service'] = $data['service'];
                $_SESSION['typeUser'] = $data['typeUser'];
                $_SESSION['typeName'] = $data['name'];
                $_SESSION['mail'] = $data['mail'];

//                print_r($data);
                $type = $data['name'];
                redirectUser($type);

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