<?php
 function redirectUser($type){
    if ($type){

     header('location: ../'.$type.'.php');
    }else {
     header('location: ../index.php');

    }

};