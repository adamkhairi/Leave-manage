<?php

$fname = !empty($_POST['fName']) ? trim($_POST['fName']) : null;
$lname = !empty($_POST['lName']) ? trim($_POST['lName']) : null;
$cin = !empty($_POST['cin']) ? trim($_POST['cin']) : null;
$tel = !empty($_POST['tel']) ? trim($_POST['tel']) : null;
$mail = !empty($_POST['userMail']) ? trim($_POST['userMail']) : null;
$password = !empty($_POST['password']) ? trim($_POST['password']) : null;
$uType = !empty($_POST['type']) ? trim($_POST['type']) : null;
$service = !empty($_POST['service']) ? trim($_POST['service']) : null;



if (isset($_POST['addmEmp'])){
    if (empty($cin)&& empty($mail)&& empty($password)){
        header('location: ../directeur.php?add=EF');
    }else{

        require_once "../connexion.php";

        $sql = "INSERT INTO `users`(`iduser`, `nom`, `prenom`, `cin`, `tel`, `mail`, `password`, `type`, `service`) VALUES (NULL,:fname,:lname,:cin,:tel,:mail,:password,:uType,:service)";
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
    $sql->execute();
        header('location: ../directeur.php?add=OK');

    }

}



//