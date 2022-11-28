<?php
    require "retrieve.php"
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Page</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- Favicon -->
    <link rel="shortcut icon" href="./images/favicon.png" type="image/x-icon" />
    <!-- Bootstrap ICON -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="css/style-profile.css">
</head>
<body>
<nav class="container-fluid sticky-top">
    <!-- LOGO -->
    <a href="index.php">
        <img src="./images/newlogo.png" class="logo" alt="P.E.T.S logo">
    </a>
    <!------------ FOR BACK END ------------>
    <!-- Page navigation link -->
    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Contact</a></li>
        <li><a href="#">Forums</a></li>
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
    <div>
        <a href="login.php">
            <button class="loginbtn">
                Log in
            </button>
        </a>
    </div>

</nav>

<div class="card">
<div class="card-body">
    <div class="container left-container">
        <h2 class="left-container-header">User Information</h2>
        <div class="circle">
            <div class="profile-image"></div>
        </div>
        <?php $data = mysqli_fetch_array($result); ?>
            <div class="rectangle"><div class="nameRetrieved"><?php echo 'Name: '.$data['first_name']." ".$data['last_name']; ?></div></div>
            <div class="rectangle"><div class="emailRetrieved"><?php echo 'Email: '.$data['email']; ?></div></div>
            <div class="rectangle"><div class="locationRetrieved"><?php 
            if ($data['address'] == ""){
                echo 'Edit Info to add Location';
            } else {
                echo 'Location: '.$data['email']; 
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
            <form action="">
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
                        <label for="region" class="form-label">Region</label>
                        <input type="text" class="form-control" id="region" name="region">
                        <label for="zipcode" class="form-label">Zip Code</label>
                        <input type="text" class="form-control" id="zipcode" name="zipcode">
                    </fieldset>
                </div>
                <button type="button" class="btn btn-info btn-sm mt-2">Use my Location</button>
            </form>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
        </div>
        </div>
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
                    <input type="text" class="form-control" id="petGender" name="petGender">
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
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>