<?php
require_once "../connexion.php";
session_start();

if (isset($_POST['loginBtn'])) {


    if (empty($_POST['email']) || empty($_POST['password'])) {
        header("location: ../index.php?error=emptyfields");
        exit();
//        print_r('erooor');
//        die();
    }else if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        header("location: ../index.php?error=invalidMail");
        echo "
//         <script>
//                $('#modal1').css('display','block');
//                
//                </script>";
    }else{
        $sql = "SELECT * FROM `users` WHERE `mail`= :email AND `password`= :password";
        $result = $conn->prepare($sql);

        $result->bindParam(':email', $email);
        $result->bindParam(':password', $password);

        $email = $_POST['email'];
        $password = $_POST['password'];

        $result->execute();
        $end = $result->fetch();

//    $_SESSION[]
        print_r($end);
//        die();
        if($_POST['email'] == $end['mail'] && $_POST['password'] == $end['password']){
            $type = $end['type'];
            switch ($type) {
                case 1:
                    header('location: ../directeur.php');
                    break;

                case 2:
                    header('location: ../admin.php');
                    break;

                case 3:
                    header('location: ../employe.php');
                    break;

                default:
                    header('location: ../index.php');
            }
        }elseif ($_POST['email'] !== $end['mail']){
            header('location: index.php?error=invalidMail');
        }elseif ($_POST['password'] !== $end['password']){
            header('location: index.php?error=invalidPwd');
        }else{
            header('location: index.php?error=invalidInfo');

        }


//    header('location: ../index.php');
    }
}
