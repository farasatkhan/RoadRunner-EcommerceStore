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

        .about-container {
            margin-bottom: 75px;
        }

        .about-image-main {
            width: 100%;
            height: auto;
            max-width: 100%;
        }

        .about-cover-image {
            width: 100%;
            height: auto;
            max-width: 100%;
        }

        .about-us-cards {
            background-color: grey;
            color: white;
            padding: 30px;
        }

        .about-us-cards-container {
            margin-top: 30px;
            margin-bottom: 30px;
        }

        .about-us-title-container {
            margin-top: 50px;
            margin-bottom: 50px;
        }

        .img-cards-image {
            width: 100%;
            height: auto;
            max-width: 100%;
        }

        .custom-shoe-gif-container {
            margin-top: 20px;
            margin-bottom: 20px;
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

        <section class="about-container">
            <img class="about-image-main" src="/images/aboutus/about-1-image.jpg" alt="">
            <div class="custom-about-us">
                <div class="row d-flex justify-content-center custom-shoe-gif-container">
                    <div class="col-lg-8">
                        <img class="about-cover-image" src="/images/aboutus/shoe.gif" alt="">
                    </div>
                </div>
                <div class="row d-flex justify-content-center about-us-cards-container">
                    <div class="col-lg-3 col-md-3 col-sm-10 col-10 ml-md-5 mb-sm-5 mb-5 about-us-cards">
                        <h3>SIMPLICITY IN DESIGN</h3>
                        <p>
                            No flashy logos. No senseless details. Just the world’s most comfortable shoes, made naturally and designed practically. It’s that simple.
                        </p>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-10 col-10 ml-lg-5 ml-md-5 mb-sm-5 mb-5 about-us-cards">
                        <h3>SIMPLICITY IN DESIGN</h3>
                        <p>
                            No flashy logos. No senseless details. Just the world’s most comfortable shoes, made naturally and designed practically. It’s that simple.
                        </p>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-10 col-10 ml-lg-5 ml-md-5 mb-sm-5 mb-5 about-us-cards">
                        <h3>SIMPLICITY IN DESIGN</h3>
                        <p>
                            No flashy logos. No senseless details. Just the world’s most comfortable shoes, made naturally and designed practically. It’s that simple.
                        </p>
                    </div>
                </div>
                <div class="row d-flex justify-content-center about-us-title-container">
                    <div class="col-6">
                        <h1>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium aut quae natus.</h1>
                    </div>
                </div>
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-3 col-md-3 col-sm-10 col-10 ml-md-5 mb-sm-5 mb-5 d-flex flex-column">
                        <div class="img-cards">
                            <img class="img-cards-image" src="/images/homepage/home-1-small.jpg" alt="">
                        </div>
                        <div class="content">
                            <h5 class="text-center mt-3"><strong>B CORP</strong></h5>
                            <p class="text-center">As a certified B Corp, we do business differently. The environment is a stakeholder here, and how we treat it is just as important as the bottom line.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-10 col-10 ml-lg-5 ml-md-5 mb-sm-5 mb-5 d-flex flex-column">
                        <div class="img-cards">
                            <img class="img-cards-image" src="/images/homepage/home-2-small.jpg" alt="">
                        </div>
                        <div class="content">
                            <h5 class="text-center mt-3"><strong>B CORP</strong></h5>
                            <p class="text-center">As a certified B Corp, we do business differently. The environment is a stakeholder here, and how we treat it is just as important as the bottom line.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-10 col-10 ml-lg-5 ml-md-5 mb-sm-5 mb-5 d-flex flex-column">
                        <div class="img-cards">
                            <img class="img-cards-image" src="/images/homepage/home-7-small.jpg" alt="">
                        </div>
                        <div class="content">
                            <h5 class="text-center mt-3"><strong>B CORP</strong></h5>
                            <p class="text-center">As a certified B Corp, we do business differently. The environment is a stakeholder here, and how we treat it is just as important as the bottom line.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-4 offset-2">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3321.205733144521!2d73.15440461468819!3d33.651830746172834!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38dfea4aee5bdf8f%3A0xe6b55e05d462beb1!2sCOMSATS%20University%20Islamabad!5e0!3m2!1sen!2s!4v1655983775013!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <div class="col-4 offset-2">
                        <h1>Our Locations</h1>
                        <p>
                            Comsats University Islamabad
                        </p>
                        <p>M524+PJP, Park Rd, Islamabad, Islamabad Capital Territory 45550</p>
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
</body>
</html>