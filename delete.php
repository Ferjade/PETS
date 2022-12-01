<?php
    require "connection.php";

    if(isset($_POST['delete'])){
        $id = $_POST['id'];
        $sql1 = "DELETE FROM user_posts where post_id = '$id'";
        $result = mysqli_query($connection, $sql1);


        echo "<script>alert('Successfully Deleted')</script>";
        header("location: forums.php");
    } 
    else {
        header("location: forums.php");
    }
?>
