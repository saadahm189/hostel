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
        $query1 = "SELECT * FROM `admin`";
        $query2 = "SELECT * FROM `student`";
        $query3 = "SELECT * FROM `room`";
        $result1 = mysqli_query($connection, $query1);
        $result2 = mysqli_query($connection, $query2);
        $result3 = mysqli_query($connection, $query3);
        $numRows1 = mysqli_num_rows($result1);
        $numRows2 = mysqli_num_rows($result2);
        $numRows3 = mysqli_num_rows($result3);
        // while ($row = $result->fetch_assoc()) {
        // }
        ?>
        <!-- HTML -->
        <div class="bg-gray-100 shadow-xl m-5 p-5 basis-4/5 rounded-lg">
            <div class="mb-5">
                <div class="grid grid-cols-1 gap-5 sm:grid-cols-4 mt-4">
                    <div class="bg-white overflow-hidden shadow sm:rounded-lg">
                        <div class="px-4 py-5 sm:p-6">
                            <dl>
                                <dt class="text-md text-center leading-5 font-medium text-gray-600 truncate">Admin</dt>
                                <dd class="m-3 p-3 text-5xl text-center font-semibold text-green-600"><?php echo $numRows1; ?></dd>
                            </dl>
                        </div>
                    </div>
                    <div class="bg-white overflow-hidden shadow sm:rounded-lg">
                        <div class="px-4 py-5 sm:p-6">
                            <dl>
                                <dt class="text-md text-center leading-5 font-medium text-gray-600 truncate">Students</dt>
                                <dd class="m-3 p-3 text-5xl text-center font-semibold text-green-600"><?php echo $numRows2; ?></dd>
                            </dl>
                        </div>
                    </div>
                    <div class="bg-white overflow-hidden shadow sm:rounded-lg">
                        <div class="px-4 py-5 sm:p-6">
                            <dl>
                                <dt class="text-md text-center leading-5 font-medium text-gray-600 truncate">Rooms</dt>
                                <dd class="m-3 p-3 text-5xl text-center font-semibold text-green-600"><?php echo $numRows3; ?></dd>
                            </dl>
                        </div>
                    </div>
                    <!-- <div class="bg-white overflow-hidden shadow sm:rounded-lg">
                        <div class="px-4 py-5 sm:p-6">
                            <dl>
                                <dt class="text-md text-center leading-5 font-medium text-gray-600 truncate">Total Meal</dt>
                                <dd class="m-3 p-3 text-5xl text-center font-semibold text-green-600">4</dd>
                            </dl>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</body>

</html>