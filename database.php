<?php
    $con = mysqli_connect("localhost", "root", "", "signup");

    if (!$con) {
        die("Connection failed: " . mysqli_connect_error());
    }

?>
