<!DOCTYPE html>
<html lang="en">
<!-- Head -->

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Inlcude Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Admin Dash</title>
</head>
<!-- Body -->

<body class="bg-gray-200">
    <?php
    require('partials/connection.php');
    include("auth_session.php");
    ?>
    <!-- Header -->
    <div class="bg-gray-800 text-white h-24 flex flex-row justify-center items-center shadow-md">
        <h1 class="text-5xl">ADMIN PANEL</h1>
    </div>
    <!-- HTML -->
    <div class="flex flex-row">
        <?php
        require('adminPartials/navbar.php');
        ?>
        <!-- HTML -->
        <div class="bg-gray-100 shadow-xl m-5 p-5 basis-4/5 rounded-lg">
            <div class="grid grid-cols-3 gap-4">
                <div class="bg-gray-200 m-5 p-5 shadow-lg">
                    <h1 class="text-xl">1</h1>
                </div>
                <div class="bg-gray-200 m-5 p-5 shadow-lg">
                    <h1 class="text-xl">2</h1>
                </div>
                <div class="bg-gray-200 m-5 p-5 shadow-lg">
                    <h1 class="text-xl">3</h1>
                </div>
            </div>
        </div>
    </div>
</body>

</html>