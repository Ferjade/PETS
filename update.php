<?php
    require "session.php";
    require "connection.php";

    if (isset($_POST['updateBtn'])){
        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $city = $_POST['city'];
        $region = $_POST['region'];
        $zipCode = $_POST['zipcode'];

        $sql3 = "UPDATE registered_users SET first_name = '$firstName',
        last_name = '$lastName', address = '$address', 
        city = '$city', region = '$region', zip_code = $zipCode WHERE email = '$email'";

        $result3 - mysqli_query($connection, $sql3);

        echo "<script>alert('Successfully Updated User')</script>";
        echo "<script>window.location.href = 'profile.php'</script>"; 
    } else {
        echo "<script>window.location.href = 'profile.php'</script>"; 
    };
?>