
<!--**** Alert ****-->
<?php
if (isset($_GET['error'])) {

    if ($_GET['error'] == 'LOG') {
        echo "

            
             <div class=\"flex items-center error bg-red-200  rounded mt-6 px-2 mx-8 shadow-md\" >
                <div class=\"mr-6  rounded px-4 py-2 text-center bg-red-600 \">
                    <svg fill=\"none\" viewBox=\"0 0 24 24\" class=\"w-8 h-8 text-white\" stroke=\"currentColor\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z\"/>
                    </svg>
                </div>
                <div class=\"flex flex-wrap  items-center rounded-lg rounded-l-none\">
                    <h1 class=\"text-red-600 text-2xl font-bold mr-2 \">Info</h1>
                    <p class=\" text-gray-700 ml-0 sm:ml-2\">Invalid Email !</p>
                </div>
                <div class=\"flex justify-end flex-1\" onclick='closeAlert()'>
                    <svg fill=\"none\" viewBox=\"0 0 24 24\" class=\"w-4 h-4 text-red-600\" stroke=\"currentColor\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M6 18L18 6M6 6l12 12\"/>
                    </svg>
                </div>
            </div><!--one-->
        <script >
                document.querySelector('#loginpop').classList.remove('hidden');
            </script>
";
    }  else if ($_GET['error'] == 'EmF') {

        echo "

            
             <div class=\"flex items-center error bg-red-200  rounded mt-6 px-2 mx-8 shadow-md\" >
                <div class=\"mr-6  rounded px-4 py-2 text-center bg-red-600 \">
                    <svg fill=\"none\" viewBox=\"0 0 24 24\" class=\"w-8 h-8 text-white\" stroke=\"currentColor\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z\"/>
                    </svg>
                </div>
                <div class=\"flex flex-wrap  items-center rounded-lg rounded-l-none\">
                    <h1 class=\"text-red-600 text-2xl font-bold mr-2 \">Info</h1>
                    <p class=\" text-gray-700 ml-0 sm:ml-2\">Please Enter your Email and Password.</p>
                </div>
                <div class=\"flex justify-end flex-1\" onclick='closeAlert()'>
                    <svg fill=\"none\" viewBox=\"0 0 24 24\" class=\"w-4 h-4 text-red-600\" stroke=\"currentColor\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M6 18L18 6M6 6l12 12\"/>
                    </svg>
                </div>
            </div><!--one-->
        <script >
                document.querySelector('#loginpop').classList.remove('hidden');
            </script>
";
    } else if ($_GET['error'] == 'Pwd') {

        echo "

            
             <div class=\"flex items-center error bg-red-200  rounded mt-6 px-2 mx-8 shadow-md\" >
                <div class=\"mr-6  rounded px-4 py-2 text-center bg-red-600 \">
                    <svg fill=\"none\" viewBox=\"0 0 24 24\" class=\"w-8 h-8 text-white\" stroke=\"currentColor\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z\"/>
                    </svg>
                </div>
                <div class=\"flex flex-wrap  items-center rounded-lg rounded-l-none\">
                    <h1 class=\"text-red-600 text-2xl font-bold mr-2 \">Info</h1>
                    <p class=\" text-gray-700 ml-0 sm:ml-2\">Please check your Password.</p>
                </div>
                <div class=\"flex justify-end flex-1\" onclick='closeAlert()'>
                    <svg fill=\"none\" viewBox=\"0 0 24 24\" class=\"w-4 h-4 text-red-600\" stroke=\"currentColor\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M6 18L18 6M6 6l12 12\"/>
                    </svg>
                </div>
            </div><!--one-->
        <script >
                document.querySelector('#loginpop').classList.remove('hidden');
            </script>
";
    }
}
?>
