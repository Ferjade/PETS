<?php
    require "session.php";
    require "connection.php";

    if (isset($_POST['uploadImagebtn'])){
        $filename = time() . '-' . $_FILES["uploadfile"]["name"];
        $tempname = $_FILES["uploadfile"]["tmp_name"];
        $target_dir = "./profile-image/";
        $target_file = $target_dir . basename($filename);
        $email = $_SESSION['email'];

        if($_FILES['uploadfile']['size'] > 200000) {
            echo "<script>alert('Image size should not be greater than 200kb')</script>";
            echo "<script>window.location.href = 'profile.php'</script>";
        } else if(file_exists($target_file)) {
            echo "<script>alert('File already exists')</script>";
            echo "<script>window.location.href = 'profile.php'</script>";
        } else {
            if(move_uploaded_file($_FILES["uploadfile"]["tmp_name"], $target_file)) {
                $sqli = "UPDATE registered_users SET profile_image = '$filename' WHERE email = '$email'";

                $result = mysqli_query($connection, $sqli) OR trigger_error("Failed SQL".mysqli_error($connection), E_USER_ERROR);
                echo "<script>alert('Successfully Uploaded Image')</script>";
                echo "<script>window.location.href = 'profile.php'</script>";
              } else {
                echo "<script>alert('There was an error uploading the file')</script>";
                echo "<script>window.location.href = 'profile.php'</script>";
              }
        }
         
    };
?>