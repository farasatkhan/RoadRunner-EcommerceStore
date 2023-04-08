<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <script src="https://kit.fontawesome.com/bd69f86183.js" crossorigin="anonymous"></script>
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
 
    <link rel="stylesheet" href="css/footercss.css" type="text/css">
    <link rel="stylesheet" href="css/farasat.css" type="text/css">

    <script src="js/myscript.js" ></script>

    <style>

        .navbar-properties-custom {
            box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 1px 3px 1px;
        }

        .sidebar-custom {
            height: 100vh;
            padding: 30px;
            margin-top: 1px;
            background-color: rgb(255, 255, 255);
            box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 1px 3px 1px;
        }

        .sidebar-item-individual-custom {
            font-size: 16px;
            margin-bottom: 30px;
        }

        .sidebar-item-link {
            text-decoration: none;
            color: rgb(253, 121, 121);
        }

        .sidebar-item-link:hover {
            text-decoration: none;
            color: rgb(214, 57, 57);
        }

        .sidebar-label {
            color: rgb(252, 67, 67);
            font-weight: bold;
            font-size: 18px;
        }

        .dashboard-content {
            padding-left: 0;
            margin-top: 2px;
            background-color: rgb(249, 248, 250);
        }

        .dashboard-sidebar {
            padding-right: 4px;
        }

        .add-new-admin {
            margin-top: 70px;
        }

        .subLogin {
            box-shadow: rgba(0, 0, 0, 0.19) 0px 10px 20px, rgba(0, 0, 0, 0.23) 0px 6px 6px;
            margin-bottom: 50px;
        }

        .btn1 {
            height: 40px;
            box-shadow: rgba(0, 0, 0, 0.19) 0px 10px 20px, rgba(0, 0, 0, 0.23) 0px 6px 6px;
        }

        .btn1:hover {
            cursor: pointer;
            background: rgb(27, 37, 44);
            color: white;
        }

        .admin-newadmin-form-title {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 30px;
        }

    </style>

    <title>Admin search - Runner</title>
</head>
<body>
<nav class="navbar navbar-light navbar-expand-md navbar-properties-custom">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse text-center" id="navbarNav">
                <ul class="row navbar-nav navbar-items-custom-left">
                    <li class="nav-item col-lg-12 col-md-10 col-sm-12">
                       <form action="adminSearchResults" method='post'  > @csrf<div class="input-group md-form form-sm form-2 pl-0">
                            <input type="text" name="selectValue" id = "selectValue" style='display:none;' >
                            <input class="form-control my-0 py-1" type="text" placeholder="Search" aria-label="Search" name="Search" >
                            <div class="input-group-append">
                                <button type='submit' onclick='document.getElementById("selectValue").value=document.getElementById("choose-type").value;'><span class="input-group-text" id="basic-text1"><i class="fas fa-search text-grey" aria-hidden="true"></i></span></button>
                            </div>
                            <select class="ml-lg-2 ml-md-2" name="choose-type" id="choose-type">
                                <option value="Delete">Delete</option>
                                <option value="Edit">Edit</option>
                            </select> 
                            
                        </div></form> 
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
                        <img src="images/icons/cart.svg" alt="Cart" width="30" height="30" class="d-inline-block align-top">
                    </a>
                </li>
                <?php
                    if (Session::has('privilege') && Session::get('privilege') == 'admin')
                    {
                        print '<li class="nav-item">';
                        print '<a href="/logoutAdmin" class="nav-link">';
                            print '<img src="images/icons/logout.svg" alt="Logout" width="22" height="22" style="margin-top: 3px;" class="d-inline-block align-top">';
                        print '</a>';
                        print '</li>';
                    }
                ?>
            </ul>
        </nav>

        <div class="fluid-container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-12 dashboard-sidebar">
                    <div class="sidebar-custom">
                        <div class="sidebar-items-custom">
                            <p class="sidebar-label">Dashboard</p>
                            <p class="sidebar-item-individual-custom"><i class="bi bi-house"></i><a class="sidebar-item-link" href="/admin_dashboard">Admin Dashboard</a></p>
                        </div>
                        <div class="sidebar-items-custom">
                            <p class="sidebar-label">Actions</p>
                            <p class="sidebar-item-individual-custom"><a class="sidebar-item-link" href="/admin_addAdmin">Add New Admin</a></p>
                            <p class="sidebar-item-individual-custom"><a class="sidebar-item-link" href="/admin_banUser">Ban User</a></p>
                            <p class="sidebar-item-individual-custom"><a class="sidebar-item-link" href="/admin_banAdmin">Ban Admin</a></p>
                        </div>
                        <div class="sidebar-items-custom">
                            <p class="sidebar-label">Products</p>
                            <p class="sidebar-item-individual-custom"><a class="sidebar-item-link" href="/admin_addProducts">Add New Product</a></p>
                            <p class="sidebar-item-individual-custom"><a class="sidebar-item-link" href="/admin_editProducts">Edit Product</a></p>
                            <p class="sidebar-item-individual-custom"><a class="sidebar-item-link" href="/admin_deleteProducts">Remove Existing Product</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 col-md-9 col-12 dashboard-content">
                    <section id="login" class="add-new-admin">
                        <div class="container">
                            <div class="row">
                                <div class="subLogin offset-lg-2 col-lg-8 offset-mg-4 col-mg-8 col-10 offset-1">
                                    <form id="new-admin-account-form" action="/admin_addAdmin" method="POST">
                                        @csrf
                                        <p class="admin-newadmin-form-title">Add New Admin</p>
                                        <input  id=email name="email" type="text" class="formTextFeild" placeholder="Email" required>
                                        <p id="email-validation-error"></p>
                                        <input  id=password name="password" type="password" class="formTextFeild" placeholder="Password" required>
                                        <p id="password-validation-error"></p>
                                        <input type="submit" name="Login" id="Login" value="Add New Admin" class="btn1">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>

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
        <script>
            $("#email")
            .focusout(function(){

                var validateEmailRegex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
                var email = document.getElementById("email").value;
                restoreEmail = email;

                if(!validateEmailRegex.test(email)){
                    $("#email").css("border-bottom", "3px solid red");
                    // $("#email").val("Email is not valid").css("color", "red");
                    $("#email-validation-error").text("Email is not valid").css("color", "red");
                }
            })
            .focus(function(){
                $("#email").css("border-bottom", "1px solid black");
                $("#email").val(restoreEmail).css("color", "#000");
                $("#email-validation-error").text("");
            });

            $("#password")
            .focusout(function(){
                var password = document.getElementById("password").value;
                var passwordRegex = /^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/;
                restorePassword = password;

                if(!passwordRegex.test(password)){
                    $("#password").css("border-bottom", "3px solid red");
                    // $("#password").attr("type", "text").val("Must be 8 Char and Contains Number").css("color", "red");
                    $("#password-validation-error").text("Must be 8 Char and Contains Number").css("color", "red");
                }
            })
            .focus(function(){
                $("#password").css("border-bottom", "1px solid black");
                $("#password").attr("type", "password").val(restorePassword).css("color", "#000");
                $("#password-validation-error").text("");
            });

            var form = document.getElementById("new-admin-account-form");
            form.addEventListener('submit', function(event){
                event.preventDefault();

                var validateEmailRegex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
                var passwordRegex = /^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/;

                var email = document.getElementById("email").value;
                var password = document.getElementById("password").value;

                if(!validateEmailRegex.test(email)){
                    alert("Email must be valid");
                    return false;
                }

                if(!passwordRegex.test(password)){
                    alert("Password must be atleast 8 characters long and must contain atleast one number");
                    return false;
                }

                form.submit();
            });
        </script>
</body>
</html>