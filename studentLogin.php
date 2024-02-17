<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-cover" style="background-image: url(slideImages/bg.jpg)">
    <?php require('partials/connection.php'); ?>
    <?php require('partials/navbar.php'); ?>
    <form class="form" method="post" name="login">
        <section>
            <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
                <div class="w-full bg-white rounded-lg shadow-xl dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
                    <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                        <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                            Student
                        </h1>
                        <form class="space-y-4 md:space-y-6" action="#">
                            <div>
                                <label for="username" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Student ID</label>
                                <input type="username" name="std" id="std" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="username" required="">
                            </div>
                            <div>
                                <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                                <input type="password" name="password" id="password" placeholder="*******" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
                            </div>
                            <button type="submit" class="w-full text-white bg-gray-800 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Sign
                                in</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </form>
    <!-- PHP CODE -->
    <?php
    // session_start();
    // When form submitted, check and create user session.
    if (isset($_POST['std'])) {
        $sid = $_REQUEST['std'];
        $password = $_REQUEST['password'];

        // Check user is exist in the database
        $query = "SELECT * FROM `student` WHERE student_id='$sid'
                     AND password='$password'";
        $result = mysqli_query($connection, $query);
        $rows = mysqli_num_rows($result);
        if ($rows == 1) {
            // $_SESSION['std'] = $sid;
            // Redirect to user dashboard page
            header("Location: studentDash.php?user=".$sid);
        } else {
            echo '<script>alert("Wrong Information Student")</script>';
        }
    }
    ?>
</body>

</html>