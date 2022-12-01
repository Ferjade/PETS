<?php
    require "session.php";
    require "connection.php";
    

    if(isset($_POST['petAddBtn'])){
        $petName = $_POST['petName'];
        $petBreed = $_POST['petBreed'];
        $petAge = $_POST['petAge'];
        $petGender = $_POST['petGender'];
        $petImage = $_POST['petImage'];
        $email = $_SESSION['email'];

        $sqli = "INSERT INTO registered_pets
        SET 
            user_email = '$email',
            pet_name = '$petName',
            pet_breed = '$petBreed',
            pet_gender = '$petGender',
            pet_age = '$petAge',
            image = '$petImage'";

        $result = mysqli_query($connection, $sqli) OR trigger_error("Failed SQL".mysqli_error($connection), E_USER_ERROR);
        
        echo "<script>alert('Pet Successfully Added')</script>";
        echo "<script>window.location.href='profile.php'</script>";
    } else {
        echo "<script>window.location.href='profile.php'</script>";
    }
?>