<div class="-mx-4  md:mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto ">
    <div class="text-right m-4">
        <form action="" name="get">
            <div class="flex items-center justify-center m-4 py-2">

                <div class="flex items-center justify-center">
                    <div id="search-toggle" class="search-icon cursor-pointer">
                        <div class="bg-white  mx-2 inline rounded-lg border shadow-md px-4 py-3 hover:bg-gray-300">
                            <i class="fas fa-search"></i>
                        </div>
                    </div>
                    <h3 class="ml-4">Search for an Employer</h3>
                </div>


                <?php
                if (isset($_GET['sCin'])) {
                    require_once "functions/functions.php";
                    echo "<div class=\"ml-auto\">
                            <div class='mx-4 my-1 bg-gray-900 float-right rounded text-white inline-block px-3 py-2'>
                                <a  href=\"" . remGet() . "\">Clear Search</a>
                            </div>
                          </div>";
                }
                ?>


            </div>
            <div class="relative w-full hidden bg-gray-900 rounded p-1 shadow" id="search-content">
                <div class="container mx-auto text-black">
                    <input id="searchfield" name="sCin" type="search" placeholder="Search by CIN or Email."
                           autofocus="autofocus"
                           class="w-full text-white bg-gray-900 transition focus:outline-none focus:border-transparent p-2 appearance-none leading-normal text-xl lg:text-2xl">
                    <button type="submit" class="bg-transparent absolute right-0 top-0 bottom-0 p-2"><i
                                class="fas fa-chevron-circle-right text-white text-3xl"></i></button>
                </div>

            </div>

        </form>

    </div>

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
            if (isset($_GET['sCin']) and $_GET['sCin'] != '') {

                $cin = $_GET['sCin'];
//$cin = preg_grep("#[^0-9a-z]#i","",$cin);

                if (!empty($_SESSION['email']) && $_SESSION['typeUser'] <= 2) {
                    $stmt = $conn->prepare("SELECT u.* ,t.name FROM users u
                                                            INNER JOIN tuser t on u.type = t.typeUser and u.cin = ?
                                                             or u.type = t.typeUser and u.mail = ? where  u.type <> 1 ");
                    $stmt->execute([$cin, $cin]);
                    $result = $stmt->fetchAll();
                    $count = count($result);
                    if ($count > 0) {
                        require_once "functions/functions.php";
                        listRows($result);

                    } else {
                        echo "<h3 class='text-center text-red-700 m-5'>There is no Employer with such information</h3>";
                    }
                }

            } else {
                if (!empty($_SESSION['email']) && $_SESSION['typeUser'] <= 2) {
                    $stmt = $conn->prepare("SELECT u.* ,t.name FROM users u
                                                            INNER JOIN tuser t on u.type = t.typeUser
                                                            and  u.type <> 1 ");
                    $stmt->execute();
                    $result = $stmt->fetchAll();
                    require_once "functions/functions.php";
                    listRows($result);

                }
            }


            ?>


            </tbody>
        </table>
    </div>
</div>
<script>
	let searchMenuDiv = document.getElementById("search-content");
	let searchMenu = document.getElementById("search-toggle");

	let navMenuDiv = document.getElementById("nav-content");
	let navMenu = document.getElementById("nav-toggle");

	document.onclick = check;

	function check(e) {
		let target = (e && e.target) || (event && event.srcElement);

		//User Menu
		if (!checkParent(target, searchMenuDiv)) {
			// click NOT on the menu
			if (checkParent(target, searchMenu)) {
				// click on the link
				if (searchMenuDiv.classList.contains("hidden")) {
					searchMenuDiv.classList.remove("hidden");
					searchfield.focus();
				} else {
					searchMenuDiv.classList.add("hidden");
				}
			} else {
				// click both outside link and outside menu, hide menu
				searchMenuDiv.classList.add("hidden");
			}
		}
	}

	function checkParent(t, elm) {
		while (t.parentNode) {
			if (t == elm) {
				return true;
			}
			t = t.parentNode;
		}
		return false;
	}
</script>