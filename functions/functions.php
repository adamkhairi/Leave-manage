<?php

function redirectUser($type){
    if ($type == 1){
        $header = 'directeur';
    }else  if ($type == 2){
        $header = 'admin';
    }else  if ($type == 3){
        $header = 'employer';
    }else {
        $header = 'index';
    }
    $redirection = header('location: ../'.$header.'.php');
    return $redirection;
}