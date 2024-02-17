<!DOCTYPE html>
<html lang="en">
<!-- Head -->

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Inlcude Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Student Dash</title>
</head>
<!-- Body -->

<body class="bg-gray-200">
    <?php
    require('partials/connection.php');
    // include("auth_session.php");
    ?>
    <!-- Header -->
    <div class="bg-green-800 text-white m-5 p-5 flex flex-row justify-center items-center shadow-xl">
        <h1 class="text-5xl">STUDENT DASH</h1>
    </div>
    <!-- HTML -->
    <!-- Include Header -->
    <div class="flex flex-row justify-center">
        <div class="bg-green-500 m-3 p-3 mt-12 rounded-lg shadow-xl">
            <a href="studentDash.php">Dashboard</a>
        </div>
        <div class="bg-green-500 m-3 p-3 mt-12 rounded-lg shadow-xl">
            <a href="#">Personal Information</a>
        </div>
        <div class="bg-red-500 m-3 p-3 mt-12 rounded-lg shadow-xl">
            <a href="studentLogout.php">Logout</a>
        </div>
    </div>
    <!-- PHP -->
    <!-- Receive ID from login page -->
    <?php
    if ($_GET) {
        $sid = $_GET['user'];
    } else {
        echo "Url has no user";
    }
    ?>
    <!-- Query -->
    <?php
    $query = "SELECT * FROM `id$sid`";
    $result = mysqli_query($connection, $query);

    ?>
    <!-- HTML -->
    <div class="m-5 p-5">
        <div class="flex flex-col">
            <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
                    <div class="overflow-hidden">
                        <table class="min-w-full text-left">
                            <thead class="border-b bg-white font-medium dark:border-neutral-500 dark:bg-neutral-600">
                                <tr>
                                    <th scope="col" class="px-6 py-4">Day</th>
                                    <th scope="col" class="px-6 py-4">Breakfast</th>
                                    <th scope="col" class="px-6 py-4">Lunch</th>
                                    <th scope="col" class="px-6 py-4">Diner</th>
                                    <th scope="col" class="px-6 py-4">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                while ($row = $result->fetch_assoc()) {
                                    $B = $row["B"];
                                    $L = $row["L"];
                                    $D = $row["D"];
                                    $day = $row["day"];

                                ?>
                                    <tr class="border-b bg-neutral-100 dark:border-neutral-500 dark:bg-neutral-700">
                                        <form method="post" action="">
                                            <td class="whitespace-nowrap px-6 py-4"><?php echo $row["day"] ?>
                                                <select name="day" class="hidden">
                                                    <option value="<?php echo $row["day"] ?>"></option>
                                                </select>
                                            </td>
                                            <td class="whitespace-nowrap px-6 py-4">
                                                <select name="B">
                                                    <?php
                                                    if ($B == '1') {
                                                    ?><option value="1">ON</option>
                                                        <option value="0">OFF</option><?php
                                                                                    } else {
                                                                                        ?><option value="0">OFF</option>
                                                        <option value="1">ON</option><?php
                                                                                    }
                                                                                        ?>
                                                </select>

                                            </td>
                                            <td class="whitespace-nowrap px-6 py-4">
                                                <select name="L">
                                                    <?php
                                                    if ($L == '1') {
                                                    ?><option value="1">ON</option>
                                                        <option value="0">OFF</option><?php
                                                                                    } else {
                                                                                        ?><option value="0">OFF</option>
                                                        <option value="1">ON</option><?php
                                                                                    }
                                                                                        ?>
                                                </select>

                                            </td>
                                            <td class="whitespace-nowrap px-6 py-4">
                                                <select name="D">
                                                    <?php
                                                    if ($D == '1') {
                                                    ?><option value="1">ON</option>
                                                        <option value="0">OFF</option><?php
                                                                                    } else {
                                                                                        ?><option value="0">OFF</option>
                                                        <option value="1">ON</option><?php
                                                                                    }
                                                                                        ?>
                                                </select>
                                            </td>
                                            <td><input class="m-2 p-2 bg-green-700 text-white text-bold rounded-lg shadows-lg" type="submit" value="Submit" name="submit"></td>
                                        </form>
                                        </t>
                                    <?php } ?>
                            </tbody>
                            <?php
                            $result->free();
                            ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    if (isset($_POST['submit'])) {
        echo $day = $_REQUEST['day'];
        echo $B = $_REQUEST['B'];
        echo $L = $_REQUEST['L'];
        echo $D = $_REQUEST['D'];

        $query = "UPDATE `id$sid` SET `B` = '$B', `L` = '$L', `D` = '$D' WHERE `day` = $day";

        if ($result = mysqli_query($connection, $query)) {
            echo "<meta http-equiv='refresh' content='0'>"; // Refreshes page after each submit
        }
    }
    ?>
</body>

</html>