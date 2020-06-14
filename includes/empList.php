<div class="-mx-4  md:mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto ">
    <div class="inline-block min-w-full rounded-md overflow-hidden">
        <table class="min-w-full leading-normal shadow border-gray-200">
            <thead>
            <tr>
                <th
                    class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                    User Name
                </th>
                <th
                    class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                    CIN
                </th>
                <th
                    class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                    Phone
                </th>
                <th
                    class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                    Email
                </th>
                <th
                    class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                    Role
                </th>
                <th
                    class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                    Service
                </th>
                <th
                    class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                    Delete Employer
                </th>

            </tr>
            </thead>
            <tbody>

            <?php
            if (!empty($_SESSION['mail']) && $_SESSION['typeUser'] <= 2) {
                $stmt = $conn->prepare("SELECT u.* ,t.name FROM users u
                                                            INNER JOIN tuser t on u.type = t.typeUser
                                                            ");
                $stmt->execute();
                $result = $stmt->fetchAll();
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


            ?>


            </tbody>
        </table>
    </div>
</div>