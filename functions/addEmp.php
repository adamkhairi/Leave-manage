<?php
session_start();
if (!empty($_SESSION)) {

    $fname = !empty($_POST['fName']) ? $_POST['fName'] : '';
    $lname = !empty($_POST['lName']) ? $_POST['lName'] : '';
    $cin = !empty($_POST['cin']) ? $_POST['cin'] : '';
    $tel = !empty($_POST['tel']) ? $_POST['tel'] : '';
    $mail = !empty($_POST['userMail']) ? $_POST['userMail'] : '';
    $password = !empty($_POST['password']) ? $_POST['password'] : '';
    $uType = !empty($_POST['type']) ? $_POST['type'] : '';
    $service = !empty($_POST['service']) ? $_POST['service'] : '';


//    if (isset($_POST['addmEmp'])) {
        if ($cin == '' && $mail == '' && $password == '') {
            header('location: ../'.$_SESSION['typeName'].'.php?add=EF');
        } else {

            require_once "../connexion.php";
            $sql = "INSERT INTO `users`(`nom`, `prenom`, `cin`, `tel`, `mail`, `password`, `type`, `service`) VALUES (:fname,:lname,:cin,:tel,:mail,:password,:uType,:service)";
            $sql = $conn->prepare($sql);
            $sql->bindParam(':fname', $fname);
            $sql->bindParam(':lname', $lname);
            $sql->bindParam(':cin', $cin);
            $sql->bindParam(':tel', $tel);
            $sql->bindParam(':mail', $mail);
            $sql->bindParam(':password', $password);
            $sql->bindParam(':uType', $uType);
            $sql->bindParam(':service', $service);

//    print_r($cin);
//    die();
            $res = $sql->execute();
            if ($res) {
                header('location: ../'.$_SESSION['typeName'].'.php?add=OK');
            } else {
                header('location: ../'.$_SESSION['typeName'].'.php?add=EF');
            }
        }
//    } else {
//        header('location: ../Director.php?add=NOT');
//
//    }
}




//