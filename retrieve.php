<?php
    require "connection.php";
    require "session.php";

    $email = $_SESSION['email'];

    $sql1 = "SELECT * FROM registered_users WHERE email = '$email'";
    $sql2 = "SELECT * FROM registered_pets WHERE user_email = '$email'";
    $result1 = mysqli_query($connection, $sql1) OR trigger_error("failed sql" .mysqli_error($connection), E_USER_ERROR);
    $result2 = mysqli_query($connection, $sql2) OR trigger_error("failed sql" .mysqli_error($connection), E_USER_ERROR);
?>