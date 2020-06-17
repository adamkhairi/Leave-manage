<div class="-mx-4  md:mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto ">
    <div class="bg-white shadow p-4 flex m-2 mb-4 p-2">
                <span class="w-auto flex justify-end items-center text-gray-500 p-2">
                    <i class="fas fa-search"></i>
                </span>
        <input class="w-full rounded p-2" name="sCin" id="sCin" type="search" placeholder="Search by CIN or Email."
               autofocus="autofocus">
        <button class="bg-gray-900 hover:bg-gray-700 rounded text-white p-2 pl-4 pr-4">
            <p class="font-semibold text-xs">Search</p>
        </button>
    </div>
    <div class="inline-block min-w-full rounded-md overflow-hidden">

        <table class="min-w-full leading-normal shadow border-gray-200" >
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

            <tbody id="table-data">

            <?php
//            if (isset($_GET['sCin']) and $_GET['sCin'] != '') {
//
//                $cin = $_GET['sCin'];
////$cin = preg_grep("#[^0-9a-z]#i","",$cin);
//
//                if (!empty($_SESSION['email']) && $_SESSION['typeUser'] <= 2) {
//                    $stmt = $conn->prepare("SELECT u.* ,t.name FROM users u
//                                                            INNER JOIN tuser t on u.type = t.typeUser and u.cin = ?
//                                                             or u.type = t.typeUser and u.mail = ? where  u.type <> 1 ");
//                    $stmt->execute([$cin, $cin]);
//                    $result = $stmt->fetchAll();
//                    $count = count($result);
//                    if ($count > 0) {
//                        require_once "functions/functions.php";
//                        listRows($result);
//
//                    } else {
//                        echo "<h3 class='text-center text-red-700 m-5'>There is no Employer with such information</h3>";
//                    }
//                }
//
//            } else {
                if (!empty($_SESSION['email']) && $_SESSION['typeUser'] <= 2) {
                    $stmt = $conn->prepare("SELECT u.* ,t.name FROM users u
                                                            INNER JOIN tuser t on u.type = t.typeUser
                                                            and  u.type <> 1 ");
                    $stmt->execute();
                    $result = $stmt->fetchAll();
                    require_once "functions/functions.php";
                    listRows($result);

                }
//            }


            ?>


            </tbody>
        </table>
    </div>
</div>
<script>

</script>