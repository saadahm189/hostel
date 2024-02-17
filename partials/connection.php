<?php
$connection = mysqli_connect("localhost", "admin", "admin", "hallmanagement");
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
