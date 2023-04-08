<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="css/footercss.css" type="text/css">
    <link rel="stylesheet" href="css/farasat.css" type="text/css">
    <script src="js/myscript.js" ></script>
    
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

    <style>
        * {
            font-family: 'Montserrat', sans-serif;
        }

        html {
            scroll-behavior: smooth;
        }

        #upperDiv h1 {
            width: 550px;
            font-variant: none;
        }

        .landing-page-recommentdation-custom-cards {
            margin-top: 80px;
            margin-bottom: 80px;
        }

        .hero-section-cta-heading-custom {
            font-weight: bold;
        }

        .hero-section-cta-custom {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;

        }

        .hero-section-info {
            margin-top: 250px;
            margin-left: 150px;
        }


        @media screen and (max-width: 720px) {

            .hero-section-cta-custom {
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;

                margin-top: 0px;
                margin-left: 0px;
            }

            .hero-section-info {
                margin-top: 250px;
                margin-left: 80px;
            }
        }

        @media screen and (max-width: 520px) {
            #upperDiv h1 {
                width: 250px;
            }
        }

        .hero-section-cta-learnmore-button-custom {
            width: 150px;
            height: 50px;

            background-color: red;
            color: white;
            font-size: 18px;

            border: none;
        }

        .hero-section-cta-learnmore-button-custom:hover {
            cursor: pointer;

            background-color: rgb(33, 42, 47);
        }

        #upperDiv {
            height: 100vh;
        }

        #upperDiv button {
            box-shadow: rgba(0, 0, 0, 0.4) 0px 2px 4px, rgba(0, 0, 0, 0.3) 0px 7px 13px -3px, rgba(0, 0, 0, 0.2) 0px -3px 0px inset;
        }

        /* CARDS */
        .individual-cards {
            width: 240px;
            height: 380px;

            margin-top: 50px;
            margin-bottom: 50px;

            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            transition: 0.2s;
        }

        .individual-cards:hover {
            box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
        }

        .individual-cards-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .individual-cards-image-cards {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .individual-cards-image-details {
            padding-top: 20px;
            padding-left: 15px;
        }

        .image-details-title {
            font-size: 18px;
            font-weight: bold;
        }

        .image-details-more {
            font-size: 14px;
            font-weight: lighter;
        }


        .individual-cards-image-adventure {
            width: 100%;
            height: auto;
            object-fit: cover;
        }

        .adventure-details {
            height: 100%;

            background-color: rgb(44, 44, 46);
        }

        .adventure-details > h1 {
            padding-top: 30%;
            text-align: center;
            color: white;
        }

        /* Cards Shoes */
        .individual-cards-shoes {
            width: 215px;
            height: 215px;

            margin-top: 50px;
            margin-bottom: 50px;

            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            transition: 0.2s;
        }

        .individual-cards-shoes:hover {
            box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
        }

        /* New Arrivals */

        .new-arrivals-custom {
            margin-top: 50px;
        }

        .new-arrivals-custom > h1 {
            font-size: 48px;
            text-align: center;
        }

        .item-individual-image {
            display: block;

            width: 100%;
            height: 100%;

            object-fit: cover;
        }

        .new-arrivals-cards {
            padding: 50px;
        }

        .item-container {
            height: 300px;
        }

        /* CTA Action Creation */
        .cta-button-action-signup {
            margin: 10px;
            margin-bottom: 40px;

            width: 150px;
            height: 35px;

            color: red;
            background-color: white;
            border: 0.5px solid red;

            box-shadow: rgba(0, 0, 0, 0.12) 0px 1px 3px, rgba(0, 0, 0, 0.24) 0px 1px 2px;
        }

        .cta-button-action-signup:hover {
            cursor: pointer;
            border: 2px solid red;
        }

        .cta-button-action-login {
            margin: 10px;
            margin-bottom: 40px;

            width: 150px;
            height: 35px;

            color: white;
            background-color: red;
            border: none;

            box-shadow: rgba(0, 0, 0, 0.12) 0px 1px 3px, rgba(0, 0, 0, 0.24) 0px 1px 2px;
        }

        .cta-button-action-login:hover {
            cursor: pointer;

            color: red;
            background-color: white;
            border: 2px solid red;
        }

        .cta-buttons-action {
            float: right;
        }

        .cta-action-account {
            border-radius: 12px;

            box-shadow: rgba(0, 0, 0, 0.19) 0px 10px 20px, rgba(0, 0, 0, 0.23) 0px 6px 6px;
        }

        .cta-action-details {
            padding: 30px;
        }

        .cta-actions-more {
            margin-top: 40px;
            margin-bottom: 50px;
        }

        .cta-action-title {
            font-size: 36px;
            font-weight: bold;
        }

        .cta-action-more {
            font-size: 14px;
            font-weight: lighter;
        }

        .cards-recommendation {
            color: black;
            text-decoration: none;
        }

        .cards-recommendation:hover {
            color: black;
            text-decoration: none;
        }

    </style>
    
    <title>Home - Runner</title>
</head>
<body style="margin: 0%; padding: 0%;">
<div id=upperDiv>
        <div id=navWhite class="fluid-container">
            <nav id='nav' class="navbar navbar-light navbar-expand-md navbar-properties-custom">
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
                            <img src="images/icons/cart.svg" alt="Cart" width="30" height="30" class="d-inline-block align-top">
                        </a>
                    </li>
                    <?php
                        if(Session::has('privilege') && Session::get('privilege') == 'user') {
                            print '<li class="nav-item">';
                                print '<a href="/profile" class="nav-link">';
                                    print '<img src="images/icons/sign-up-clear.svg" alt="Sign up" width="30" height="30" class="d-inline-block align-top">';
                                print '</a>';
                            print '</li>';
                            print '<li class="nav-item">';
                                print '<a href="/logout" class="nav-link">';
                                    print '<img src="images/icons/logout.svg" alt="Logout" width="22" height="22" style="margin-top: 3px;" class="d-inline-block align-top">';
                                print '</a>';
                            print '</li>';
                        } else if (Session::has('privilege') && Session::get('privilege') == 'admin')
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
        </div>

        <div class="container hero-section-info">
            <div class="row hero-section-row">
                <div class="hero-section-cta-custom">
                    <h1 class="hero-section-cta-heading-custom">The Top Shoe Collection</h1>
                    <p class="hero-section-cta-info-custom">Step into serious comfert with the true runner</p>
                    <a href="#arrivals-items" id="learn-more-link"><button class="hero-section-cta-learnmore-button-custom">Learn More</button></a>
                </div>
            </div> 
        </div>
    </div>

    <div class="row cards-items-custom cards-recommendation-custom d-flex justify-content-center">
        <div class="individual-cards offset-lg-0 offset-md-1 offset-sm-1 offset-1">
            <a class="cards-recommendation" href="#">
                <div class="individual-cards-container">
                    <img class="individual-cards-image" src="/images/vertical/img-1-small.jpg" alt="Cards">
                </div>
                <div class="individual-cards-image-details">
                    <h4 class="image-details-title">Tree Runner</h4>
                    <p class="image-details-more">Light and Breezy Sneaker</p>
                </div>
            </a>
        </div>
        <div class="individual-cards offset-lg-1 offset-md-1 offset-sm-1 offset-1">
            <a class="cards-recommendation" href="#">
                <div class="individual-cards-container">
                    <img class="individual-cards-image" src="/images/vertical/img-5-small.jpg" alt="Cards">
                </div>
                <div class="individual-cards-image-details">
                    <h4 class="image-details-title">Tree Lounger</h4>
                    <p class="image-details-more">Breezy Slip-On</p>
                </div>
            </a>
        </div>
        <div class="individual-cards offset-lg-1 offset-md-1 offset-sm-1 offset-1">
            <a class="cards-recommendation" href="#">
                <div class="individual-cards-container">
                    <img class="individual-cards-image" src="/images/vertical/img-7-small.jpg" alt="Cards">
                </div>
                <div class="individual-cards-image-details">
                    <h4 class="image-details-title">Tree Piper</h4>
                    <p class="image-details-more">More Details</p>
                </div>
            </a>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-7 col-12 " id=middleImg >          
                <img src="imgs/home-3-large.jpg" width="100%" alt="" style="padding: 0%; margin: 0%;">
            </div>
            <div class="col-12 col-lg-5" id=midDiv>
                <h1 class="display-4">Conquere your new Adventure </h1>
            </div>
        </div>
    </div>

    <div id="row arrivals" >
        <div id="arrivals-items" class="col-12 new-arrivals-custom">
            <h1>New Arrivals</h1>
        </div>
        <?php
            print '<div class="row cards-items-custom d-flex justify-content-center">';
            for($i = 0; $i < 4; $i++){
                $imageSrc = explode(";", $shoesDataArray[$i][6]);   

                if ($i == 0) {
                    print '<div class="individual-cards-shoes offset-lg-0 offset-md-1 offset-sm-1 offset-1">';
                } else
                {
                    print '<div class="individual-cards-shoes offset-lg-1 offset-md-1 offset-sm-1 offset-1">';
                }
                        print '<a href="/shoe-details?id='.$shoesDataArray[$i][0].'">';
                            print '<div class="individual-cards-container">';
                                print '<img class="individual-cards-image-cards" src="'.asset('/uploads/'.$imageSrc[0]).'" alt="Cards">';
                            print '</div>';
                        print '</a>';
                    print '</div>'; 
            }
            print '</div>';
        ?>
        <!-- <div class="row cards-items-custom d-flex justify-content-center">
            <div class="individual-cards-shoes offset-lg-0 offset-md-1 offset-sm-1 offset-1">
                <div class="individual-cards-container">
                    <img class="individual-cards-image-cards" src="/images/productImages/Buoyant_Blue_Blizzard.png" alt="Cards">
                </div>
            </div>
            <div class="individual-cards-shoes offset-lg-1 offset-md-1 offset-sm-1 offset-1">
                <div class="individual-cards-container">
                    <img class="individual-cards-image-cards" src="/images/productImages/Forager_White_Humid_Rust.png" alt="Cards">
                </div>
            </div>
            <div class="individual-cards-shoes offset-lg-1 offset-md-1 offset-sm-1 offset-1">
                <div class="individual-cards-container">
                    <img class="individual-cards-image-cards" src="/images/productImages/HAZY_COBALT_ULTRAMARINE.png" alt="Cards">
                </div>
            </div>
            <div class="individual-cards-shoes offset-lg-1 offset-md-1 offset-sm-1 offset-1">
                <div class="individual-cards-container">
                    <img class="individual-cards-image-cards" src="/images/productImages/Rad_Rust_Blizzard.png" alt="Cards">
                </div>
            </div>
        </div> -->
    </div>    
    <div class="row d-flex justify-content-center cta-actions-more">
        <div class="col-10 cta-action-account">
            <div class="cta-action-details">
                <h1 class="cta-action-title">
                    Signup for Exclusive Offers
                </h1>
                <p class="cta-action-more">Shop shoes made with light & breezy eucalyptus tree fiber.</p>
            </div>
            <div class="cta-buttons-action">
                <a href="signup"><button class="cta-button-action-signup">Signup</button></a>
                <a href="/login"><button class="cta-button-action-login">Login</button></a>
            </div>
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
</body>
</html>