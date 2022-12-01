<?php
    require "session.php";
    require "connection.php";

    if (isset($_POST['createPost'])){
        $post_title = $_POST['post_title'];
        $post_message = $_POST['post_message'];
        $address = $_POST['address'];
        $city = $_POST['city'];
        $zip_code = $_POST['zipcode'];
        $email = $_SESSION['email'];

        $sqli = "INSERT INTO user_posts 
        SET
           post_title = '$post_title',
           post_message = '$post_message',
           post_address = '$address',
           post_city = '$city',
           post_zip_code = '$zip_code',
           user_email = '$email'";

        $result = mysqli_query($connection, $sqli) OR trigger_error("Failed SQL".mysqli_error($connection), E_USER_ERROR);

        echo "<script>alert('Successfully Created Post')</script>";
        echo "<script>window.location.href = 'forums.php'</script>"; 
    } else {
        echo "<script>window.location.href = 'forums.php'</script>"; 
    };
?>