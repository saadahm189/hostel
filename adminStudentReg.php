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
        <h1 class="text-5xl">STUDENT Registration</h1>
    </div>
    <!-- HTML -->
    <div class="flex flex-row">
        <?php
        require('adminPartials/navbar.php');
        ?>
        <!-- HTML -->
        <div class="bg-gray-100 shadow-xl m-5 p-5 basis-4/5 rounded-lg">
            <form class="form" action="" method="post">
                <h1>Registration Form</h1>
                <div class="flex flex-col">
                    <input type="text" class="login-input m-2 p-2" name="student_id" placeholder="ID" required />
                    <input type="password" class="login-input m-2 p-2" name="password" placeholder="Password" required>
                    <input type="text" class="login-input m-2 p-2" name="name" placeholder="Name" required>
                    <input type="text" class="login-input m-2 p-2" name="dept" placeholder="Department" required>
                    <input type="submit" name="submit" value="Register" class="login-button">
                </div>
            </form>
        </div>
    </div>


    <?php
    if (isset($_REQUEST['student_id'])) {
        // removes backslashes
        $student_id = $_REQUEST['student_id'];
        $password = $_REQUEST['password'];
        $name = $_REQUEST['name'];
        $dept = $_REQUEST['dept'];
        $create_datetime = date("Y-m-d H:i:s");
        $query = "INSERT INTO `student` (`student_id`, `password`, `student_name`, `department`, `reg_date`) VALUES ('$student_id', '$password', '$name', '$dept','$create_datetime')";
        $result = mysqli_query($connection, $query);
        $newtableQuery = "CREATE TABLE `hallmanagement`.`ID$student_id` (`day` INT NOT NULL AUTO_INCREMENT , `B` INT NOT NULL , `L` INT NOT NULL , `D` INT NOT NULL , PRIMARY KEY (`day`)) ENGINE = InnoDB;";
        $result = mysqli_query($connection, $newtableQuery);
        $dataInsert = "INSERT INTO `id$student_id` (`day`, `B`, `L`, `D`) VALUES ('1', '0', '0', '0'), ('2', '0', '0', '0'), ('3', '0', '0', '0'), ('4', '0', '0', '0'), ('5', '0', '0', '0'), ('6', '0', '0', '0'), ('7', '0', '0', '0'), ('8', '0', '0', '0'), ('9', '0', '0', '0'), ('10', '0', '0', '0'), ('11', '0', '0', '0'), ('12', '0', '0', '0'), ('13', '0', '0', '0'), ('14', '0', '0', '0'), ('15', '0', '0', '0'), ('16', '0', '0', '0'), ('17', '0', '0', '0'), ('18', '0', '0', '0'), ('19', '0', '0', '0'), ('20', '0', '0', '0'), ('21', '0', '0', '0'), ('22', '0', '0', '0'), ('23', '0', '0', '0'), ('24', '0', '0', '0'), ('25', '0', '0', '0'), ('26', '0', '0', '0'), ('27', '0', '0', '0'), ('28', '0', '0', '0'), ('29', '0', '0', '0'), ('30', '0', '0', '0')";
        $result = mysqli_query($connection, $dataInsert);
        if ($result) {
            echo '<script>alert("Registration completed")</script>';
        } else {
            echo '<script>alert("Wrong Input or Duplicate input")</script>';
        }
    }
    ?>
</body>

</html>