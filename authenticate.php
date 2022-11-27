<?php
    include "connection.php";

    session_start();

    if(isset($_POST["login"])){
        $email = $_POST['email'];
        $pass = $_POST['password'];

        $email = stripslashes($email);
        $pass = stripslashes($pass);    
        $email = mysqli_real_escape_string($connection, $email);
        $pass = mysqli_real_escape_string($connection, $pass);
        
        $sql = "SELECT * FROM registered_users WHERE email = '$email'";
        $result = mysqli_query($connection, $sql);
        $row = mysqli_fetch_array($result);
        $currentPass = $row["password"];
        $count = mysqli_num_rows($result);
        if($count > 0 && password_verify($pass,$currentPass)){
            $_SESSION['status'] = 'valid';
            $_SESSION['email'] = $email;
            $_SESSION['user_role'] = $row['user_role'];
            echo '<script> window.location.href="index.php"</script>';
            header("location:index.php");
        } else {
            $_SESSION["status"] = "invalid";
            echo '<script> alert("Invalid Credentials!") </script>';
            echo '<script> window.location.href="login.php"</script>';
        }
    }
?>