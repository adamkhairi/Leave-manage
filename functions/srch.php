<?php
//$stmt = $conn->prepare("SELECT u.* ,t.name FROM users u
//                                                            INNER JOIN tuser t on u.type = t.typeUser and u.cin = ?
//                                                             or u.type = t.typeUser and u.mail = ? where  u.type <> 1 ");
//$cin = $_GET['s'];
//$stmt->execute([$cin, $cin]);
//$result = $stmt->fetchAll();
//$count = count($result);
require_once "../connexion.php";
require_once "functions.php";
$output = '';

if (isset($_POST['query'])){
    $search = $_POST['query'];
    $stmt = $conn->prepare("SELECT u.* ,t.name FROM users u
                        INNER JOIN tuser t on u.type = t.typeUser and u.cin like CONCAT('%',:cin,'%')
                         or u.type = t.typeUser and u.mail like CONCAT('%',:mail,'%') where  u.type <> 1 ");
    $stmt->bindParam(":cin",$search);
    $stmt->bindParam(":mail",$search);
    //$stmt->execute([$cin, $cin]);

}else{
    $stmt = $conn->prepare("SELECT u.* ,t.name FROM users u
                                                            INNER JOIN tuser t on u.type = t.typeUser
                                                            and  u.type <> 1 ");
}
$stmt->execute();
$result = $stmt->fetchAll();
$count = count($result);

if ($count > 0) {
    listRows($result);
}else{
    echo "<h3 class='text-center text-red-700 m-5'>There is no Employer with such information</h3>";
}
