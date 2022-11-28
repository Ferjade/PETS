<?php
    require "connection.php";

    if(isset($_POST['submitbtn'])){
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $contact = $_POST['phone'];
        $subject = $_POST['subject'];
        $inquiry = $_POST['inquiry'];

        $sqli = "INSERT INTO forms 
        SET 
            first_name = '$first_name',
            last_name = '$last_name',
            phone = '$contact',
            subject = '$subject',
            inquiry = '$inquiry'";

        $result = mysqli_query($connection, $sqli) OR trigger_error("Failed SQL".mysqli_error($connection), E_USER_ERROR);
        
        echo "<script>alert('Successfully created')</script>";
        echo "<script>window.location.href='contact.php'</script>";
    } else {
        echo "<script>window.location.href='contact.php'</script>";
    }
?>