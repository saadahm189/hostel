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
        <h1 class="text-5xl">MEAL</h1>
    </div>
    <!-- HTML -->
    <div class="flex flex-row">
        <?php
        require('adminPartials/navbar.php');
        ?>
        <div class="m-5 p-5">
            <div class="flex flex-col">
                <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
                        <div class="overflow-hidden">
                            <table class="min-w-full text-left ">
                                <thead class="border-b bg-white font-medium dark:border-neutral-500 dark:bg-neutral-600">
                                    <tr>
                                        <th scope="col" class="px-6 py-4">Student ID</th>
                                        <th scope="col" class="px-6 py-4">Name</th>
                                        <th scope="col" class="px-6 py-4">Total meal</th>
                                    </tr>
                                </thead>
                                <?php
                                $BreakfastCount = 0;
                                $LunchCount = 0;
                                $DinnerCount = 0;
                                $TotalCount = 0;
                                $grandTotal = 0;
                                $query = "SELECT * FROM `student`";
                                $result = mysqli_query($connection, $query);
                                while ($row = $result->fetch_assoc()) {
                                    $id = $row['student_id'];
                                    $query2 = "SELECT * FROM `id$id`";
                                    $result2 = mysqli_query($connection, $query2);
                                    while ($row2 = $result2->fetch_assoc()) {
                                        $B = $row2["B"];
                                        $L = $row2["L"];
                                        $D = $row2["D"];
                                        $day = $row2["day"];
                                        if ($B == 1) {
                                            $BreakfastCount = $BreakfastCount + 1;
                                        }
                                        if ($L == 1) {
                                            $LunchCount = $LunchCount + 1;
                                        }
                                        if ($D == 1) {
                                            $DinnerCount = $DinnerCount + 1;
                                        }
                                    }
                                    $TotalCount = $BreakfastCount + $LunchCount + $DinnerCount;

                                ?>
                                    <!-- HTML -->

                                    <tbody>
                                        <tr class="border-b bg-neutral-100 dark:border-neutral-500 dark:bg-neutral-700">
                                            <td class="whitespace-nowrap px-6 py-4">
                                                <?php echo $row["student_id"] ?> </select>
                                            </td>
                                            <td class="whitespace-nowrap px-6 py-4">
                                                <?php echo $row["student_name"] ?>
                                            </td>
                                            <td class="whitespace-nowrap px-6 py-4">
                                                <?php echo $TotalCount ?>
                                            </td>
                                    </tbody>
                                <?php
                                    $BreakfastCount = 0;
                                    $LunchCount = 0;
                                    $DinnerCount = 0;
                                    $grandTotal = $grandTotal + $TotalCount;
                                    $TotalCount = 0;
                                }
                                ?>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="mb-5">
            <div class="grid grid-cols-1 gap-5 sm:grid-cols-4 mt-4">
                <div class="bg-white overflow-hidden shadow sm:rounded-lg">
                    <div class="px-4 py-5 sm:p-6">
                        <dl>
                            <dt class="text-md text-center leading-5 font-medium text-gray-600 truncate">Grand Total Meal</dt>
                            <dd class="m-3 p-3 text-5xl text-center font-semibold text-green-600"><?php echo $grandTotal; ?></dd>
                        </dl>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>