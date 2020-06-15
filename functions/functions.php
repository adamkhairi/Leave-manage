<?php

function redirectUser($type)
{
    if ($type) {
        header('location: ../' . $type . '.php');

    }

}