<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>P.E.T.S</title>
    <link rel="stylesheet" href="./css/style-contact.css">
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
            <img src="./images/newlogo.png" class=" logo" alt="P.E.T.S logo">
        </a>
        <!------------ FOR BACK END ------------>
        <!-- Page navigation link -->
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="contact.php" class="active">Contact</a></li>
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

    <!--MAIN CONTACT FORM-->
    <div class="container-form">
        <div class="row">
            <div class="col-md-5">
                <img src="images/HeroIMG1.png" alt="">
            </div>
            <div class="col-md-2"></div>
            <div class="col-md-5">
                    <div class="row" style="padding: 2rem;">
                        <h2 style="text-align: center;">Contact Us</h2>
                        <div class="col input">
                            <input type="text" class="form-control" placeholder="First name" 
                            name="first_name" id="first_name">
                        </div>
                        <div class="col input">
                            <input type="text" class="form-control" placeholder="Last name" name="last_name" id="last_name">
                        </div> <br/>
                        <div class="col-md-12 input">
                            <input type="text" class="form-control" placeholder="Subject" name="subject" id="subject">
                        </div>
                        <div class="col-md-12 input">
                            <textarea class="form-control" placeholder="Leave a comment here" style="height: 200px"></textarea>
                        </div>
                        <div class="d-grid gap-2">
                          <input class="btn btn-warning" style="color: white;" type="submit" value="Submit"></input>
                        </div>
                </div>
            </div>
        </div>
    </div>
    <!--END MAIN CONTACT FORM-->

    


    <!-- Footer (8th SECTION) -->
    <!-- Upper Footer -->
    <footer class="footer-upper">
        <div class="container">
            <div class="row footerrow text-center">

                <div class="col-md-4">
                    <a href="#">
                        <img src="./images/newlogo.png" class="footerimg" alt="">
                    </a>
                </div>

                <div class="col-md-6 row footer-content">

                    <div class="col-md-3 text-start">
                        <h6>Mobile app</h6>
                        <a href=" #">Features</a> <br>
                        <a href="#">Live share</a> <br>
                        <a href="#">Video record</a> <br>
                    </div>

                    <div class="col-md-3 text-start">
                        <h6>Community</h6>
                        <a href=" #">Featured</a> <br>
                        <a href="#">The portal</a> <br>
                        <a href="#">Live events</a> <br>
                    </div>

                    <div class="col-md-3 text-start">
                        <h6>Company</h6>
                        <a href="#">About us</a> <br>
                        <a href="contact.php">Contact us</a> <br>
                        <a href="#">History</a> <br>
                    </div>

                </div>

                <div class="col-md-2 footerbutton">

                    <!------------ FOR BACK END ------------>
                    <!-- BUTTON (REGISTER)  -->
                    <div>
                        <a href="registration.php">
                            <button class="register">
                                Register
                            </button>
                        </a>
                    </div>

                    <!------------ FOR BACK END ------------>
                    <!-- BUTTON (LOGIN)  -->
                    <div>
                        <a href="login.php">
                            <button class="loginbtn2">
                                Log in
                            </button>
                        </a>
                    </div>

                </div>

            </div>
        </div>
    </footer>


    <!-- Lower footer -->
    <footer class="footer-lower">
        <div class="container">
            <div class="text-center">
                <div class="breakline row">

                    <div class="row socialm">

                        <div class="col-md-4 copyright">
                            <p>&copy; All rights reserved </p>
                        </div>

                        <div class="col-md-4 follow">
                            <p>Follow us:</p>
                        </div>

                        <div class="col-md-4 sicon">
                            <a href=""><img class="social1" src="./images/socialicon1.png" alt=""></a>
                            <a href=""><img class="social2" src="./images/socialicon2.png" alt=""></a>
                            <a href=""><img class="social3" src="./images/socialicon3.png" alt=""></a>
                            <a href=""><img class="social4" src="./images/socialicon4.png" alt=""></a>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </footer>


</body>

</html>