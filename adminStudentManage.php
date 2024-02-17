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
        <h1 class="text-5xl">STUDENT MANAGEMENT</h1>
    </div>
    <!-- HTML -->
    <div class="flex flex-row">
        <?php
        require('adminPartials/navbar.php');
        ?>
        <!-- HTML -->
        <div class="bg-gray-100 shadow-xl m-5 p-5 basis-4/5 rounded-lg">
            <!-- Query -->
            <?php
            $query = "SELECT * FROM `student`";
            $result = mysqli_query($connection, $query);

            ?>
            <!-- HTML -->
            <div class="m-5 p-5">
                <div class="flex flex-col">
                    <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                        <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
                            <div class="overflow-hidden">
                                <table class="min-w-full text-left ">
                                    <thead class="border-b bg-white font-medium dark:border-neutral-500 dark:bg-neutral-600">
                                        <tr>
                                            <th scope="col" class="px-6 py-4">Student ID</th>
                                            <th scope="col" class="px-6 py-4">Password</th>
                                            <th scope="col" class="px-6 py-4">Name</th>
                                            <th scope="col" class="px-6 py-4">Dept</th>
                                            <th scope="col" class="px-6 py-4">Reg date</th>
                                            <th scope="col" class="px-6 py-4">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        while ($row = $result->fetch_assoc()) {

                                        ?>
                                            <tr class="border-b bg-neutral-100 dark:border-neutral-500 dark:bg-neutral-700">
                                                <td class="whitespace-nowrap px-6 py-4">
                                                    <?php echo $row["student_id"] ?> </select>
                                                </td>
                                                <td class="whitespace-nowrap px-6 py-4">
                                                    <?php echo $row["password"] ?>
                                                </td>
                                                <td class="whitespace-nowrap px-6 py-4">
                                                    <?php echo $row["student_name"] ?>
                                                </td>
                                                <td class="whitespace-nowrap px-6 py-4">
                                                    <?php echo $row["department"] ?> </select>
                                                </td>
                                                <td class="whitespace-nowrap px-6 py-4">
                                                    <?php echo $row["reg_date"] ?> </select>
                                                </td>
                                                <td> <button onclick="return confirm('Are you sure to delete?')" type="button" class="m-2 p-2 bg-red-500 text-white text-bold rounded-lg shadows-lg"><a href="adminStudentDelete.php?student_id=<?php echo $row["student_id"] ?>">Delete</a></button></td>
                                                </td>
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
        </div>
    </div>
</body>

</html>