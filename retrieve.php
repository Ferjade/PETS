<?php
    require "connection.php";
    require "session.php";
    $email = $_SESSION['email'];

    $sql1 = "SELECT * FROM registered_users WHERE email = '$email'";
    $result = mysqli_query($connection, $sql1) OR trigger_error("failed sql" .mysqli_error($connection), E_USER_ERROR);
?>