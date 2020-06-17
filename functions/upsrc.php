<?php
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
    $stmt->execute();
    $result = $stmt->fetch();
    if ($result){
        $count = count($result);

    }
//echo $count
    if ($count = 1) {
        print_r($result);
        updateRows($result);
        echo"dsdsdfsdfsdf";
    }else{
    }
}else{
//    $stmt = $conn->prepare("SELECT u.* ,t.name FROM users u
//                                                            INNER JOIN tuser t on u.type = t.typeUser
//                                                            and  u.type <> 1 ");
    echo "<h3 class='text-center text-red-700 m-5'>There is no Employer with such information</h3>";
    updateRows('');

}
