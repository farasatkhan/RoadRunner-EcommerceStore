<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;1,800&display=swap" rel="stylesheet">

    <script src="https://kit.fontawesome.com/bd69f86183.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css" type="text/css">

    <!-- Jquery CDN -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <title>Signup Page</title>
    <style>
        * {
            font-family: 'Montserrat', sans-serif;
        }

        .logo-title {
            font-weight: 800;
            font-size: 1.6rem;
        }

        .navbar-properties-custom {
            background-color: white;
            border-bottom: solid 2px #000;
        }

        .navbar-items-custom-right {
            margin-right: 20px;
        }

        .navbar-items-custom-right > li {
            margin-left: 25px;
        }

        .line-break-small-screen-custom {
            width: 100%;
            height: 1px;
            color: black;
        }

        @media only screen and (min-width: 768px) {
            .navbar-brand {
                transform: translateX(-50%);
                left: 50%;
                position: absolute;
            }

            .line-break-small-screen-custom {
                display: none;
            }
        }

        @media only screen and (min-width: 992px) {
            .navbar-items-custom-left {
                margin-left: 20px;
            }

            .navbar-items-custom-left > li {
                margin-right: 25px;
            }
        }

        .signup-form-properties-custom {
            margin-top: 10px;
            margin-bottom: 100px;
        }

        .button-properties-custom {
            width: 300px;
            background-color: red;
            color: white;
            border: none;
            padding: 5px;
            margin-bottom: 50px;
        }

        .button-properties-custom:hover {
            color: black;
        }

        .signup-form-input-properties-custom {
            border: none;
            border-radius: 0%;
            width: 300px;
            border-bottom: 2px solid #707070;
        }

        .radio-button-properties-custom {
            margin-top: 5px;
        }

        .radio-button-properties-custom > label {
            margin-left: 10px;
        }

        .radio-button-properties-custom > div {
            margin-left: 10px;
        }
        
        .signup-form {
            background-color: rgb(245, 245, 245); 
        }

        .registration-links {
            text-decoration: none;
            color: #000;
        }

        .registration-links:hover {
            text-decoration: none;
            color: red;
        }

        .formTextFeildRegistration{
            border: none;
            border-bottom: 3px solid black; 
            background-color: rgb(245, 245, 245);
        }

        .formTextFeildRegistration:focus{
            border: none;
            border-bottom: 3px solid red;
            outline: none;
        }

        #footerCol a {
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="fluid-container">
        <nav class="navbar navbar-light navbar-expand-md navbar-properties-custom">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse text-center" id="navbarNav">
                <ul class="navbar-nav navbar-items-custom-left">
                        <li class="nav-item active">
                            <a class="nav-link" href="/mens">Men</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/womens">Women</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/items">New Arrivals</a>
                        </li>
                        <hr class="line-break-small-screen-custom">
                </ul>
            </div>
            
            <a href="/" class="navbar-brand mx-auto">
                <span class="logo-title">ROADRUNNER</span>
            </a>

            <ul class="navbar-nav flex-row navbar-items-custom-right">
                <li class="nav-item">
                    <a href="/cart" class="nav-link">
                        <img src="icons/cart.svg" alt="Cart" width="30" height="30" class="d-inline-block align-top">
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/profile" class="nav-link">
                        <img src="icons/sign-up-clear.svg" alt="Sign up" width="30" height="30" class="d-inline-block align-top">
                    </a>
                </li>
            </ul>
        </nav>

        <section class="signup-form-section">
            <div class="row d-flex justify-content-center signup-form-properties-custom">
                <div class="row mt-5">
                    <div class="col-4 offset-lg-2 offset-md-2 offset-sm-2 offset-2  text-center">
                        <a href="/login" class="registration-links"><h3>Already Registered</h3></a>
                    </div>
                    <div class="col-4 text-center">
                        <a href="/signup" class="registration-links"><h3>Create an Account</h3></a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-8 col-9 signup-form mt-5">
                    <div class="row offset-lg-3 offset-md-2 offset-sm-2 offset-1 mt-5">
                        <form id="create-account-form" action="/signup" method="POST">
                            @csrf
                            <div class="form-group signup-form-group-custom">
                                <input type="text" class="formTextFeildRegistration form-control signup-form-input-properties-custom" id="fname" name="fname" placeholder="First Name" required>
                                <p id="fname-validation-errors"></p>
                            </div>
                            <div class="form-group signup-form-group-custom">
                                <input type="text" class="formTextFeildRegistration form-control signup-form-input-properties-custom" id="lname" name="lname" placeholder="Last Name" required>
                                <p id="lname-validation-errors"></p>
                            </div>
                            <div class="form-group signup-form-group-custom">
                                <input type="email" class="formTextFeildRegistration form-control signup-form-input-properties-custom" id="email" name="email" placeholder="Email" required>
                                <p id="email-validation-errors"></p>
                            </div>
                            <div class="form-group signup-form-group-custom">
                                <input type="password" class="formTextFeildRegistration form-control signup-form-input-properties-custom" id="password" name="password" placeholder="Password" required>
                                <p id="password-validation-errors"></p>
                            </div>
                            <div class="form-group signup-form-group-custom">
                                <input type="password" class="formTextFeildRegistration form-control signup-form-input-properties-custom" id="cpassword" name="cpassword" placeholder="Confirm Password" required>
                                <p id="cpassword-validation-errors"></p>
                            </div>
                            <div class="form-group signup-form-group-custom">
                                <input type="date" class="formTextFeildRegistration form-control signup-form-input-properties-custom" id="dob" name="dob" required>
                            </div>
                            <div class="form-group radio-button-properties-custom mt-4">
                                <label for="form-custom">Gender: </label>
                                <div class="form-check form-check-inline" id="form-custom">
                                    <input class="form-check-input" type="radio" name="gender" id="male" value="male" required>
                                    <label class="form-check-label" for="male">
                                        Male
                                    </label>
                                </div>
                                <div class="form-check form-check-inline" id="form-custom">
                                    <input class="form-check-input" type="radio" name="gender" id="female" value="female" required>
                                    <label class="form-check-label" for="female">
                                        Female
                                    </label>
                                </div>
                            </div>
                            <button class="button-properties-custom" type="submit">Sign up</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <footer id=footer>
            <div class="container">
                <div class="row " id=footerCol>
                    <div class="col-10 col-sm-4 col-lg-1 offset-1">
                        <a href="/login"><p id=heading>Sign in</p></a>
                        <a href="/signup"><p>Sign up</p></a>
                        <a href="/adminLogin">Admin Login</a>
                    </div>
                    <div class="col-10 col-sm-4 col-lg-1 offset-1">
                        <a href="/about"><p id=heading>About Us</p></a>
                        <a href="/"><p>Our Story</p></a>
                    </div>
                    <div class="col-10 col-sm-4 col-lg-1 offset-1">
                        <a href="/mens"><p id=heading>Men's Collection</p></a>
                        <a href="/womens"><p>Women's Collection</p></a>
                        <a href="/items"><p>New Arrivals</p></a>
                    </div>
                    <div class="col-10 col-sm-5 col-lg-4 offset-1">
                        <p id=heading>Follow us</p>
                        <p>No flashy logos. No senseless details. Just the world’s most comfortable shoes, made naturally and designed practically. It’s that simple.</p>
                        <p><i class="fa-brands fa-facebook"></i> <i class="fa-brands fa-instagram"></i>  <i class="fa-brands fa-twitter"></i></p>
                        
                    </div>
                </div>
            </div>
            <div id=hr></div>

            <div class="container">
                <div class="row">
                    <div class="col-11 offset-1 col-sm-2 order-sm-first order-last">
                        <a href="/"><p id=logo>ROADRUNNER</p></a>
                    </div>
                    <div class="col-11 offset-1 col-sm-2">
                        <p >©ROADRUNNER 2020</p>
                    </div>
                    <div id="privacypolicy" class="col-11 offset-1 col-sm-2 order-sm-last order-first ">
                        <a href="#">Terms of use</a>
                        <a href="#">Privacy policy</a>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <script>
        var restoreFirstName = "";
        var restoreLastName = "";
        var restoreEmail = "";
        var restorePassword = "";
        var restoreConfirmPassword = "";

        $("#fname")
            .focusout(function(){
                var firstName = document.getElementById("fname").value;
                var validateNameRegex = /^[a-zA-Z ]{2,30}$/;
                restoreFirstName = firstName;

                if(!validateNameRegex.test(firstName)){
                    $("#fname").css("border-bottom", "3px solid red");
                    $("#fname-validation-errors").text("Must Contain Only Alphabets in First Name").css("color", "red");
                }
                
            })
            .focus(function(){
                $("#fname").css("border-bottom", "3px solid black");
                $("#fname").val(restoreFirstName).css("color", "black");
                $("#fname-validation-errors").text("");
            });

        $("#lname")
            .focusout(function(){
                var lastName = document.getElementById("lname").value;
                var validateNameRegex = /^[a-zA-Z ]{2,30}$/;
                restoreLastName = lastName;

                if(!validateNameRegex.test(lastName)){
                    $("#lname").css("border-bottom", "3px solid red");
                    $("#lname-validation-errors").text("Must Contain Only Alphabets").css("color", "red");
                }
                
            })
            .focus(function(){
                $("#lname").css("border-bottom", "3px solid black");
                $("#lname").val(restoreLastName).css("color", "black");
                $("#lname-validation-errors").text("");
            });

        $("#email")
            .focusout(function(){

                var validateEmailRegex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
                var email = document.getElementById("email").value;
                restoreEmail = email;

                if(!validateEmailRegex.test(email)){
                    $("#email").css("border-bottom", "3px solid red");
                    $("#email-validation-errors").text("Email is not valid").css("color", "red");
                }
            })
            .focus(function(){
                $("#email").css("border-bottom", "1px solid black");
                $("#email").val(restoreEmail).css("color", "#000");
                $("#email-validation-errors").text("");
            });

        $("#password")
            .focusout(function(){
                var password = document.getElementById("password").value;
                var passwordRegex = /^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/;
                restorePassword = password;

                if(!passwordRegex.test(password)){
                    $("#password").css("border-bottom", "3px solid red");
                    // $("#password").attr("type", "text").val("Must be 8 Char and Contains Number").css("color", "red");
                    $("#password-validation-errors").text("Must be 8 Char and Contains Number").css("color", "red");
                }
            })
            .focus(function(){
                $("#password").css("border-bottom", "1px solid black");
                // $("#password").attr("type", "password").val(restorePassword).css("color", "#000");
                $("#password-validation-errors").text("");
            });

        $("#cpassword")
            .focusout(function(){
                var password = document.getElementById("password").value;
                var cpassword = document.getElementById("cpassword").value;
                restoreConfirmPassword = cpassword;

                if(password != cpassword){
                    $("#cpassword").css("border-bottom", "3px solid red");
                    // $("#cpassword").attr("type", "text").val("Password does not match").css("color", "red");
                    $("#cpassword-validation-errors").text("Password does not match").css("color", "red");
                }
            })
            .focus(function(){
                $("#cpassword").css("border-bottom", "1px solid black");
                // $("#cpassword").attr("type", "password").val(restoreConfirmPassword).css("color", "#000");
                $("#cpassword-validation-errors").text("");
            });

        var form = document.getElementById("create-account-form");
        form.addEventListener('submit', function(event){
            event.preventDefault();

            /* name should be between 2 and 30 characters */
            var validateNameRegex = /^[a-zA-Z ]{2,30}$/;

            /* valid email example: farasatkahan@gmail.com */
            var validateEmailRegex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;

            /* valid password example: password1 */
            var passwordRegex = /^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/;
            
            var firstName = document.getElementById("fname").value;
            var lastName = document.getElementById("lname").value;
            var email = document.getElementById("email").value;
            var password = document.getElementById("password").value;
            var cpassword = document.getElementById("cpassword").value;
            var date = document.getElementById("dob").value;
            var gender = document.getElementsByName('gender');

            if(!validateNameRegex.test(firstName)){
                alert("First name must contain only alphabets");
                return false;
            }

            if(!validateNameRegex.test(lastName)){
                alert("Last name must contain only alphabets");
                return false;
            }

            if(!validateEmailRegex.test(email)){
                alert("Email must be valid");
                return false;
            }

            if(!passwordRegex.test(password)){
                alert("Password must be atleast 8 characters long and must contain atleast one number");
                return false;
            }

            if(password != cpassword){
                alert("Passwords do not match");
                return false;
            }

            var genderValue = "";

            for(var i=0; i < gender.length; i++){
                if (gender[i].checked){
                    genderValue = gender[i].value;
                    break;
                }
            }

            form.submit();
        });
    </script>
</body>
</html>