<?php
    require "retrieve.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>P.E.T.S</title>
    <style>
    .welcome-text {
        color: white;
        position: relative;
        top: 0.5rem;
        right: 3rem;
        font-size: 17px;
        font-weight: 700;
    }

    .welcome-link {
        text-decoration: none;
        color: #fbbe28;
        font-size: 17px;
    }

    .welcome-link:hover {
        color: #fbbe28;
        text-decoration: underline;
    }

    .logoutbtn {
        width: 100px;
        position: relative;
        right: 7rem;
        padding: 2px 15px;
        border-radius: 70px;
        outline: none;
        background: #fbbe28;
        border: 1px solid white;
        font-size: 1rem;
        font-weight: 600;
        color: #e8f9fd;
        position: relative;
        z-index: 2;
        filter: drop-shadow(0px 4px 4px rgba(0, 0, 0, 0.25));
        transition: .3s ease-in-out;
    }

    .logoutbtn:hover {
        color: #fbbe28;
        background: #ff1e00;
        scale: 1.1;
        font-weight: 800;
    }

    /* CSS */
    .user_card_body{
    width: 100%;
    height: 100%;
    display:flex
    }
    .left-container{
        width: 100%;
        height: 100%;
        display: flex;
        align-items: center;
        flex-direction: column;
    }
    .right-container{
        width: 100%;
        height: 100%;
        min-height: 100vh;
        background-color: #ff862f;
        border-radius: 25px;
        display: flex;
        align-content: center;
        flex-direction: column;
    }
    #addPetBtn{
        width: 8vw;
    }
    .left-container-header{
        margin-top: 3vh;
        margin-left: 3vh;
    }
    .right-container-header{
        margin-top: 3vh;
        margin-left: auto;
        margin-right: auto;
    }
    .profile-image-container{
        display: flex;
        justify-content: center;
        align-items: center;
        width: 18vw;
        height: 40vh;
        margin-left: auto;
        margin-right: auto;
    }
    .rectangleSection{
        width: 80%;
        height: 8vh;
        border-radius: 5px;
        background-color: grey;
        margin-top: 4vh;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }
    .nameRetrieved{
        color: white;
        margin-left: 1vw;
    }
    .emailRetrieved{
        color: white;
        margin-left: 1vw;
    }
    .locationRetrieved{
        color: white;
        margin-left: 1vw;
    }
    .pet-card-container{
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        flex-wrap: wrap;
    }
    .pet_card{
        width: 30%;
        margin-top: 1vh;
        margin-bottom: 1vh;
    }
    
    </style>
    <link rel="stylesheet" href="./css/style.css">
    <!-- Favicon -->
    <link rel="shortcut icon" href="./images/favicon.png" type="image/x-icon" />
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
    <!-- Bootstrap ICON -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css" />
</head>

<body>
    <!-- ORIGINAL NAVBAR -->
    <!-- NAV BAR -->
    <nav class="container-fluid sticky-top">
        <!-- LOGO -->
        <a href="#">
            <img src="./images/newlogo.png" class="logo" alt="P.E.T.S logo">
        </a>
        <!------------ FOR BACK END ------------>
        <!-- Page navigation link -->
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="forums.php">Forums</a></li>
        </ul>

        <!------------ FOR BACK END ------------>
        <!-- Search Function (OPTIONAL) -->
        <form action="submit" method="get" class="search-bar">
            <button><i class="bi bi-search"></i></button>
            <input type="text" class="search-area" placeholder=" Search" />
            <button><i class="bi bi-mic-fill"></i></button>
        </form>


        <!------------ FOR BACK END ------------>
        <!-- BUTTON (LOGIN)  -->
        <?php
            if(!empty($_SESSION["first_name"])){
                echo
                '
                    <p class="welcome-text"> Welcome <a href="profile.php" class="welcome-link">'.$_SESSION['first_name'].'</a></p>
                
                    <form action="logout.php" method="POST">
                        <button class="logoutbtn" type="submit">Logout</button>
                    </form>
                ';
            } else {
                echo 
                '<a href="login.php">
                    <button class="loginbtn">
                        Login
                    </button>
                </a>';
            }
        ?>
    </nav>


    <!-- MAIN -->
    <div class="card user_card">
    <div class="card-body user_card_body">
    <div class="container left-container">
        <?php $data = mysqli_fetch_array($result1); ?>
        <div class="left-container-header"><h2>User Information</h2></div>
        <div class="profile-image-container"><div class="profile-image"><img src="
        <?php 
        if($data['profile_image'] == ""){
           echo "./images/defaultPFP.jpg"; 
        } else {
            echo "./profile-image/".$data['profile_image'];
        }?>" style='height: 100%; width: 100%; object-fit: contain; border-radius: 50%;'></div></div>
        <div>
            <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="modal" data-bs-target="#uploadImage">
                Upload Image
            </button>
        </div>
            <div class="rectangleSection"><div class="nameRetrieved"><?php echo 'Name: '.$data['first_name']." ".$data['last_name']; ?></div></div>
            <div class="rectangleSection"><div class="emailRetrieved"><?php echo 'Email: '.$data['email']; ?></div></div>
            <div class="rectangleSection"><div class="locationRetrieved"><?php 
            if ($data['address'] == ""){
                echo 'Edit Info to add Location';
            } else {
                echo 'Location: '.$data['address'].' '.$data['city'].', '.$data['zip_code']; 
            }?></div></div>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary btn-lg mt-3" data-bs-toggle="modal" data-bs-target="#editModal">
        Edit Info
        </button>
    </div>
    <div class="container right-container">
        <h2 class="right-container-header">Pet Details</h2>
        <button type="button" class="btn btn-primary btn-lg mt-3" id="addPetBtn" data-bs-toggle="modal" data-bs-target="#addPetModal">
            Add Pet
        </button>
        <div class="pet-card-container">
            <?php
                while($row = mysqli_fetch_array($result2)){?>
                    <div class="card pet_card">
                    <img src="images/caticon.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $row['pet_name'] ?></h5>
                        <p class="card-text"><?php echo $row['pet_breed'] ?></p>
                        <p class="card-text"><?php echo $row['pet_age'].' '.$row['pet_gender'] ?></p>
                    </div>
                    </div>
            <?php } ?>
        </div>
    </div>
    </div>
</div>



    <!-- Edit Modal -->
    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h1 class="modal-title fs-5" id="editModalLabel">User Information</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="update.php" method="post">
                <div class="form-group">
                    <label for="firstName" class="form-label">First Name</label>
                    <input type="text" class="form-control" id="firstName" name="firstName" value="<?php echo $data['first_name']; ?>">
                </div>
                <div class="form-group mt-1">
                    <label for="lastName" class="form-label">Last Name</label>
                    <input type="text" class="form-control" id="lastName" name="lastName" value="<?php echo $data['last_name']; ?>">
                </div>
                <div class="form-group mt-1">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" value="<?php echo $data['email']; ?>" readonly>
                </div>
                <div class="form-group mt-1">
                    <fieldset>
                        <legend>Location:</legend>
                        <label for="address" class="form-label">Address</label>
                        <input type="text" class="form-control" id="address" name="address">
                        <label for="city" class="form-label">City</label>
                        <input type="text" class="form-control" id="city" name="city">
                        <label for="region" class="form-label">Region/State</label>
                        <input type="text" class="form-control" id="region" name="region">
                        <label for="zipcode" class="form-label">Zip Code</label>
                        <input type="text" class="form-control" id="zipcode" name="zipcode">
                    </fieldset>
                </div>
                <button type="button" class="btn btn-info btn-sm mt-2">Use my Location</button>
           
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <input type="submit" value="Update" name="updateBtn" class="btn btn-primary">
        </div>
        </div>
        </form>
    </div>
    </div>

    <!-- Add Pet Modal -->
    <div class="modal fade" id="addPetModal" tabindex="-1" aria-labelledby="addPetModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h1 class="modal-title fs-5" id="editModalLabel">Pet Information</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="/petcreate.php" method="post">
                <div class="form-group">
                    <label for="petName" class="form-label">Pet Name</label>
                    <input type="text" class="form-control" id="petName" name="petName">
                </div>
                <div class="form-group mt-1">
                    <label for="petBreed" class="form-label">Pet Breed</label>
                    <input type="text" class="form-control" id="petBreed" name="petBreed">
                </div>
                <div class="form-group mt-1">
                    <label for="petAge" class="form-label">Pet Age</label>
                    <input type="number" class="form-control" id="petAge" name="petAge">
                </div>
                <div class="form-group mt-1">
                    <label for="petGender" class="form-label">Pet Gender</label>
                    <select name="petGender" id="petGender" class="form-select">
                        <option value="Male" selected>Male</option>
                        <option value="Female">Female</option>
                    </select>
                </div>
                <div class="form-group mt-1">
                    <label for="petImage" class="form-label">Upload Picture</label>
                    <input type="file" class="form-control" id="petImage" name="petImage">
                </div>
            
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <input type="submit" name="petAddBtn" class="btn btn-primary" value="Add Pet">
                </div>
            </form>
        </div>
    </div>
    </div>

    


    <!-- Create Post Modal -->
    <div class="modal fade" id="createpostModal" tabindex="-1" aria-labelledby="createpostModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h1 class="modal-title fs-5" id="editModalLabel">Create Post</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="createPost.php" method="post">
                <div class="form-group">
                    <label for="post_title" class="form-label">Post Title</label>
                    <input type="text" class="form-control" id="post_title" name="post_title"?>
                </div>
                <div class="form-group mt-1">
                    <label for="post_message" class="form-label">Message</label>
                    <textarea cols="30" rows="10" class="form-control" id="post_message" name="post_message"></textarea>
                </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <input type="submit" value="Create Post" name="createPost" class="btn btn-primary">
        </div>
        </div>
        </form>
    </div>
    </div>

    <!-- Upload Image Modal -->
    <div class="modal fade" id="uploadImage" tabindex="-1" aria-labelledby="uploadImage" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h1 class="modal-title fs-5" id="uploadImageLabel">Upload Image</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="uploadImage.php" method="post" enctype="multipart/form-data"> 
                <div class="form-group">
                    <input class="form-control" type="file" name="uploadfile" id="uploadfile"/>
                </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <input type="submit" value="Upload Image" name="uploadImagebtn" class="btn btn-primary">
        </div>
        </div>
        </form>
    </div>
    </div>


</body>