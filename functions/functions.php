<?php

function redirectUser($type)
{
    if ($type) {
        header('location: ../' . $type . '.php');

    }

}
function listRows($result){
    foreach ($result as $row) {
        echo "
                            <tr>
                        <!--                       Name-->
                            <td class=\"px-5 py-5 border-b border-gray-200 bg-white text-sm\">
                            <p class=\"text-gray-900 whitespace-no-wrap\">
                                " . $row['prenom'] . " " . $row['nom'] . "
                            </p>
                        </td>
                        <!--                        CIN-->
                        <td class=\"px-5 py-5 border-b border-gray-200 bg-white text-sm\">
                            <span
                                    class=\"relative inline-block px-3 py-1 font-semibold text-green-900 leading-tight\">
                                        <span aria-hidden
                                              class=\"absolute inset-0 bg-green-200 opacity-50 rounded-full\"></span>
                                        <span class=\"relative whitespace-no-wrap\">" . $row['cin'] . "</span>
                                    </span>
                        </td>
                        <!--                        Phone-->
                        <td class=\"px-5 py-5 border-b border-gray-200 bg-white text-sm\">
                            <p class=\"text-gray-900 whitespace-no-wrap\">
                                " . $row['tel'] . "
                            </p>
                        </td>
                        <!--                        Mail-->
                        <td class=\"px-5 py-5 border-b border-gray-200 bg-white text-sm\">
                            <p class=\"text-gray-900 whitespace-no-wrap\"> " . $row['mail'] . "</p>

                        </td>
                        <!--                        Role-->
                        <td class=\"px-5 py-5 border-b border-gray-200 bg-white text-sm\">
                            <p class=\"text-gray-900 whitespace-no-wrap\">
                                " . $row['name'] . "
                            </p>
                        </td>
                        <!--                        Service-->
                        <td class=\"px-5 py-5 border-b border-gray-200 bg-white text-sm\">
                            <p class=\"text-gray-900 whitespace-no-wrap\">
                                " . $row['service'] . "
                            </p>
                        </td>
                        <!--                        Manage-->
                        <td class=\"px-5 py-5 border-b border-gray-200 bg-white\">
                            <div class=\"text-4xl\">
                             

                                </button>
                                    <form action='functions/delEmp.php' method='get' >
                                <input type='text' hidden id='" . $row['cin'] . "' name='CIN' value='" . $row['cin'] . "'>
                                <button class=\"ml-3 text-red-600 hover:text-red-500\" 
                                id=\"delCurrent\" 
                                name=\"del-current\" 
                                type=\"submit\"
                                >
                                    <i class=\"fas fa-minus-square\"></i>
                                </button>
                                </form>
                            </div>
                        </td>
                            
                                                </tr>

                            ";

    }
}
function remGet(){
    $url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    $url = strtok($url, '?');
    return $url;
}