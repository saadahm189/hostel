<?php
include 'partials/connection.php';

$student_id = $_GET['student_id'];

$sql1 = "DELETE FROM `student` WHERE student_id='$student_id'";
$sql2 =  "DROP TABLE id$student_id";

// mysqli_query($connection, $sql1);
// mysqli_query($connection, $sql2);

if (mysqli_query($connection, $sql1) && mysqli_query($connection, $sql2)) {
    header("Location: adminStudentManage.php");
}
