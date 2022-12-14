<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style-reg.css">
    <script>
        function validate_password(){
            var pass = document.getElementById("password").value;
            var confirm_password = document.getElementById("confirm_pass").value;
            var min = 8;
            var max = 12;
            var expression = new RegExp("^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*])(?=.{8,12})");
            if(!expression.test(pass)){
                alert("Password should at least contain one lower and uppercase letter, one special character, and 8-12 chars long");
                return false;
            } else if(pass != confirm_password){
                alert("Passwords do not match");
                return false;
            } else {
                return true;
            }
        }
    </script>
</head>
<body>
    <div class="box">
        <div class="box-content">
            <img src="images/pets-banner.png" class="image">
            <h3 style="padding: 1rem 1rem 0 1rem;">Register for a free account</h3>
            <form class="row g-6" action="/createAccount.php" onsubmit="return validate_password()" method="POST">
                <div class="col-md-6 form" >
                    <input type="text" class="form-control" name="first_name"
                    id="first_name" placeholder="First name" required>
                </div>
                <div class="col-md-6 form">
                    <input type="text" class="form-control" name="last_name" 
                    id="last_name" placeholder="Last name" required>
                </div>
                <div class="col-md-12 form">
                    <input type="email" class="form-control" name="email" 
                    id="email" placeholder="Email address" required>
                </div>
                <div class="col-md-12 form">
                    <input type="password" class="form-control" name="password" 
                    id="password" placeholder="Password example: AaBb123*"
                    required>
                </div>
                <div class="col-md-12 form">
                    <input type="password" class="form-control" name="confirm_pass" 
                    id="confirm_pass" placeholder="Confirm password" required>
                </div>
                <h6 style="padding: 1rem 1rem 0 2rem;">Are you already a member? <a href="login.php">Click here</a> </h6>
                <div class="col-md-12 form">
                    <input type="submit" name="createbtn" class="button_style" value="Register">
                </div>
            </form>
        </div>
    </div>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
</body>
</html>