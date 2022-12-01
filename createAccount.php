<?php
    require "connection.php";

    if(isset($_POST['createbtn'])){
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $email = $_POST['email'];
        $pass = password_hash($_POST['password'], PASSWORD_DEFAULT);

        $sqli = "INSERT INTO registered_users 
        SET 
            first_name = '$first_name',
            last_name = '$last_name',
            email = '$email',
            password = '$pass'";

        $result = mysqli_query($connection, $sqli) OR trigger_error("Failed SQL".mysqli_error($connection), E_USER_ERROR);
        
        echo "<script>alert('Successfully created')</script>";
        echo "<script>window.location.href='login.php'</script>";
    } else {
        echo "<script>window.location.href='login.php'</script>";
    }
?>