<?php
session_start();
if (!empty($_SESSION)) {

    $firstname = !empty($_POST['firstName']) ? $_POST['firstName'] : '';
    $lastname = !empty($_POST['lastName']) ? $_POST['lastName'] : '';
    $cin = !empty($_POST['cinUp']) ? $_POST['cinUp'] : '';
    $ciin = !empty($_POST['ciin']) ? $_POST['ciin'] : '';
    $tel = !empty($_POST['tele']) ? $_POST['tele'] : '';
    $mail = !empty($_POST['Mail']) ? $_POST['Mail'] : '';
    $service = !empty($_POST['serv']) ? $_POST['serv'] : '';


//    if (isset($_POST['addmEmp'])) {
        require_once "../connexion.php";
        $sql = "UPDATE `users` SET `nom` = :fname, `prenom` = :lname, `cin` = :cin, `tel` = :tel, `mail` = :mail, `service` = :service WHERE `cin` = :ciin";
        $sql = $conn->prepare($sql);
        $sql->bindParam(':fname', $firstname);
        $sql->bindParam(':lname', $lastname);
        $sql->bindParam(':cin', $cin);
        $sql->bindParam(':ciin', $ciin);
        $sql->bindParam(':tel', $tel);
        $sql->bindParam(':mail', $mail);
        $sql->bindParam(':service', $service);

//    print_r($cin);
//    die();
        $res = $sql->execute();
        print_r($res);
        if ($res = 1) {
            header('location: ../Director.php?up=OK');
        } else {
            header('location: ../Director.php?up=NOT');
        }

//    } else {
//        header('location: ../Director.php?add=NOT');
//
//    }
}




//