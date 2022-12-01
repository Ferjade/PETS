<?php
    require "connection.php";
    require "session.php";

    $email = $_SESSION['email'];

    $sql1 = "SELECT * FROM registered_users WHERE email = '$email'";
    $sql2 = "SELECT * FROM registered_pets WHERE user_email = '$email'";
    $sql3 = "SELECT * FROM user_posts AS a INNER JOIN registered_users AS b ON a.user_email = b.email ORDER BY a.date_created DESC";
    $result1 = mysqli_query($connection, $sql1) OR trigger_error("failed sql" .mysqli_error($connection), E_USER_ERROR);
    $result2 = mysqli_query($connection, $sql2) OR trigger_error("failed sql" .mysqli_error($connection), E_USER_ERROR);
    $result3 = mysqli_query($connection, $sql3) OR trigger_error("failed sql" .mysqli_error($connection), E_USER_ERROR);
?>