<?php

function redirectUser($type)
{
    if ($type) {
        header('location: ../' . $type . '.php');

    }

}

function updateRows($result)
{
    if ($result) {
        echo " <div>
        <form action=\"functions/upEmp.php\" name=\"addEmpFrm\" method=\"post\">
            <div class=\"mt-8 p-4  \">
                <div>
                    <div class=\"font-bold text-gray-600 text-xs leading-8 uppercase h-6 mx-2 mt-3\">Full Name</div>
                    <div class=\"flex flex-col md:flex-row\">
                        <div class=\"w-full flex-1 mx-2 svelte-1l8159u\">
                            <div class=\"bg-white my-2 p-1 flex border border-gray-200 rounded svelte-1l8159u\">
                            
                            
                                <input placeholder=\"First Name\" id=\"firstName\" name=\"firstName\" value='" . $result['nom'] . "'
                                       class=\"p-1 px-2 appearance-none outline-none w-full text-gray-800\">
                                       
                            </div>
                        </div>
                        <div class=\"w-full flex-1 mx-2 svelte-1l8159u\">
                            <div class=\"bg-white my-2 p-1 flex border border-gray-200 rounded svelte-1l8159u\">
                            
                            
                                <input placeholder=\"Last Name\" id=\"lastName\" name=\"lastName\" value='" . $result['prenom'] . "'
                                       class=\"p-1 px-2 appearance-none outline-none w-full text-gray-800\">
                                       
                            </div>
                        </div>
                    </div>
                    <div class=\"flex flex-col md:flex-row\">
                        <div class=\"w-full mx-2 flex-1 svelte-1l8159u\">
                            <div class=\"font-bold h-6 mt-3 text-gray-600 text-xs leading-8 uppercase\"> CIN</div>
                            <div class=\"bg-white my-2 p-1 flex border border-gray-200 rounded svelte-1l8159u\">
                            
                            
                                <input placeholder=\"AB123456\" value='" . $result['cin'] . "'
                                       class=\"p-1 px-2 appearance-none outline-none w-full text-gray-800\"
                                       type=\"text\"
                                       name=\"cinUp\">
                                       <input type='text' hidden name='ciin' value='" . $result['cin'] . "'>
                                       
                            </div>
                        </div>
                        <div class=\"w-full mx-2 flex-1 svelte-1l8159u\">
                            <div class=\"font-bold h-6 mt-3 text-gray-600 text-xs leading-8 uppercase\">Phone Nbr.</div>
                            <div class=\"bg-white my-2 p-1 flex border border-gray-200 rounded svelte-1l8159u\">
                            
                            
                                <input placeholder=\"Tel: 0600000000\" id=\"tele\" name=\"tele\" value='" . $result['tel'] . "'
                                       class=\"p-1 px-2 appearance-none outline-none w-full text-gray-800\"
                                       type=\"text\">
                                       
                            </div>
                        </div>
                    </div>
                    <div class=\"flex flex-col md:flex-row\">
                        <div class=\"w-full mx-2 flex-1 svelte-1l8159u\">
                            <div class=\"font-bold h-6 mt-1 text-gray-600 text-xs leading-8 uppercase\"> User Type</div>
                            <div class=\"rounded relative\">
                                <div class=\"flex svelte-1l8159u my-2 p-1\">

                                    <select name=\"upType\" required
                                            class=\"block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500\"
                                            >
                                        <option selected value='" . $result['type'] . "' disabled>" . $result['name'] . "</option>
                                        
                                       
                                    </select>
                                    <div class=\"pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700\">
                                        <svg class=\"fill-current h-4 w-4\" xmlns=\"http://www.w3.org/2000/svg\"
                                             viewBox=\"0 0 20 20\">
                                            <path d=\"M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z\"/>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"w-full mx-2 flex-1 svelte-1l8159u\">
                              <div class=\"font-bold h-6 mt-3 text-gray-600 text-xs leading-8 uppercase\">Employer Email
                            </div>
                            <div class=\"bg-white my-2 p-1 flex border border-gray-200 rounded svelte-1l8159u\">
                            
                            
                                <input placeholder=\"example@mail.com\" id=\"Mail\" name=\"Mail\"
                                       class=\"p-1 px-2 appearance-none outline-none w-full text-gray-800\"
                                       type=\"email\" value='" . $result['mail'] . "'>
                                       
                            </div>
                        </div>

                    </div>
                    <div class=\"flex flex-col md:flex-row\">
                        <div class=\"w-full mx-2 flex-1 svelte-1l8159u\">
                          
                            <div class=\"font-bold h-6 mt-3 text-gray-600 text-xs leading-8 uppercase\">Employer Service
                            </div>
                            <div class=\"bg-white my-2 p-1 flex border border-gray-200 rounded svelte-1l8159u\">
                            
                            
                                <input placeholder=\"Service... .\" id=\"service\" name=\"serv\"
                                       class=\"p-1 px-2 appearance-none outline-none w-full text-gray-800\"
                                       type=\"text\" value='" . $result['service'] . "'>
                                       
                                       
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"flex p-2 mt-4\">
                    <div class=\"flex-auto flex flex-row-reverse\">
                        <button class=\"text-base  ml-2  hover:bg-gray-700 focus:outline-none flex justify-center px-4 py-2 rounded font-bold cursor-pointer
        bg-gray-900
        text-gray-100 shadow-lg hover:shadow
                border duration-200 ease-in-out
        border-gray-600 transition\" type=\"submit\" name=\"updatemEmp\">Update
                        </button>
                    </div>
                </div>

            </div>

        </form>

    </div>";

    }

}

function listRows($result)
{
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

function remGet()
{
    $url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    $url = strtok($url, '?');
    return $url;
}