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
                        <div class="input-group md-form form-sm form-2 pl-0">
                            <input class="form-control my-0 py-1" type="text" placeholder="Search" aria-label="Search">
                            <div class="input-group-append">
                                <span class="input-group-text" id="basic-text1"><button><i class="fas fa-search text-grey" aria-hidden="true"></i></button></span>
                            </div>
                            <select class="ml-lg-2 ml-md-2" name="choose-type" id="choose-type">
                                <option value="Person">Person</option>
                                <option value="Product">Product</option>
                                <option value="Admin">Admin</option>
                            </select>  
                        </div>
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
                <li class="nav-item">
                    <a href="/profile" class="nav-link">
                        <img src="images/icons/sign-up-clear.svg" alt="Sign up" width="30" height="30" class="d-inline-block align-top">
                    </a>
                </li>
            </ul>
        </nav>
        <div class="container topTextSearchResult">
            <h3>
                Search reasults for search:
            </h3>       
        </div>


        <div class="container">
            <div class=row>
                <article class="searchResultArticle col-lg-4 col-xl-3 col-md-5 col-8 offset-2 offset-md-0 ">
                    <a href="">
                    <div class="searchResult ">
                            <div>
                                <h3>UserName 123</h3>
                                <h5>Type: person</h5>
                            </div>      
                        </div>
                    </a>
                </article>
                <article class="searchResultArticle col-lg-4 col-xl-3 col-md-5 col-8 offset-2 offset-md-0 ">
                    <a href="">
                    <div class="searchResult ">
                            <div>
                                <h3>UserName 123</h3>
                                <h5>Type: person</h5>
                            </div>      
                        </div>
                    </a>
                </article>
                <article class="searchResultArticle col-lg-4 col-xl-3 col-md-5 col-8 offset-2 offset-md-0">
                    <a href="">
                    <div class="searchResult ">
                            <div>
                                <h3>UserName 123</h3>
                                <h5>Type: person</h5>
                            </div>      
                        </div>
                    </a>
                </article>
                <article class="searchResultArticle col-lg-4 col-xl-3 col-md-5 col-8 offset-2 offset-md-0">
                    <a href="">
                    <div class="searchResult ">
                            <div>
                                <h3>UserName 123</h3>
                                <h5>Type: person</h5>
                            </div>      
                        </div>
                    </a>
                </article>
                <article class="searchResultArticle col-lg-4 col-xl-3 col-md-5 col-8 offset-2 offset-md-0">
                    <a href="">
                    <div class="searchResult ">
                            <div>
                                <h3>UserName 123</h3>
                                <h5>Type: person</h5>
                            </div>      
                        </div>
                    </a>
                </article>
            </div>

        </div>

        <footer id=footer>
            <div class="container">
                <div class="row " id=footerCol>
                    <div class="col-10 col-sm-4 col-lg-1 offset-1">
                        <p id=heading>Accounts</p>
                        <p>Sign in</p>
                        <p>Regester</p>
                        <p>Order Status</p>
                    </div>
                    <div class="col-10 col-sm-4 col-lg-1 offset-1">
                        <p id=heading>About Us</p>
                        <p>Our Stroy</p>
                        <p>Career</p>
                    </div>
                    <div class="col-10 col-sm-4 col-lg-1 offset-1">
                        <p id=heading>Help</p>
                        <p>Contact Us</p>
                        <p>Order Status</p>
                    </div>
                    <div class="col-10 col-sm-5 col-lg-4 offset-1">
                        <p id=heading>Follow us</p>
                        <p>uwhf efh eoshae fosuoh sdfohse fhosdhf osdfhosdfoh fhfsdoh fosdhfosd hfo shdf sdofh sod foh fos dfohsdfo hfosd hfosd hfo hsfsod hod fho</p>
                        <p><i class="fa-brands fa-facebook"></i> <i class="fa-brands fa-instagram"></i>  <i class="fa-brands fa-twitter"></i></p>
                        
                    </div>
                </div>
            </div>
            <div id=hr></div>

            <div class="container">
                <div class="row">
                    <div class="col-11 offset-1 col-sm-2 order-sm-first order-last">
                        <p id=logo>ROADRUNNER</p>
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

</body>
</html>