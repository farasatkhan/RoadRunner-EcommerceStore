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

    <title>Login Page</title>
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

        .admin-login-form-title {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 30px;
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
        
        <section id="login">
            <div class="container">
                <div class="row">
                    <div class="subLogin offset-lg-2 col-lg-8 offset-mg-4 col-mg-8 col-10 offset-1">
                        <form id="login-account-form" action="/adminLogin" method="POST">
                            @csrf
                            <p class="admin-login-form-title">Admin Login Form</p>
                            <input  id="email" name="email" type="text" class="formTextFeild" placeholder="Email" required>
                            <input  id="password" name="password" type="password" class="formTextFeild" placeholder="Password" required>
                            <input type="submit" name="Login" id="Login" value="Login" class="btn1">
                        </form>
                        <?php
                            if (!empty($error)){
                                print '<p style="color:red; text-align:center;"> LOGIN FAILED: '. $error .'</p>';
                            }else{}
                        ?>
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
        var restoreEmail = "";

        $("#email")
                .focusout(function(){

                    var validateEmailRegex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
                    var email = document.getElementById("email").value;
                    restoreEmail = email;

                    if(!validateEmailRegex.test(email)){
                        $("#email").css("border-bottom", "3px solid red");
                        $("#email").val("Email is not valid").css("color", "red");
                    }
                })
                .focus(function(){
                    $("#email").css("border-bottom", "1px solid black");
                    $("#email").val(restoreEmail).css("color", "#000");
                });

        // var restorePassword = "";

        // $("#password")
        //         .focusout(function(){
        //             var password = document.getElementById("password").value;
        //             restorePassword = password;

        //             if(password.length < 8){
        //                 $("#password").css("border-bottom", "3px solid red");
        //                 $("#password").attr("type", "text").val("Password is too short").css("color", "red");
        //             }
        //         })
        //         .focus(function(){
        //             $("#password").css("border-bottom", "1px solid black");
        //             $("#password").attr("type", "password").val(restorePassword).css("color", "#000");
        //         });

        var form = document.getElementById("login-account-form");
        form.addEventListener('submit', function(event){
            event.preventDefault();

            /* valid email example: farasatkahan@gmail.com */
            var validateEmailRegex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;

            var email = document.getElementById("email").value;
            // var password = document.getElementById("password").value;

            if(!validateEmailRegex.test(email)){
                alert("Email must be valid");
                return false;
            }

            // if(password.length < 8){
            //     alert("Password must be at least 8 characters");
            //     return false;
            // }

            form.submit();
        });
    </script>
</body>
</html>