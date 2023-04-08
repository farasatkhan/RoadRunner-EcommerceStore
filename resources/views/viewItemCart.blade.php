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

        .cart-container {
            margin-top: 30px;
        }

        .progress-item-name {
            font-size: 10px;
            font-weight: bold;
        }

        .cart-progress-details {
            display: flex;
            justify-content: space-around;
        }

        .item-name {
            font-weight: bold;
        }

        .item-cart-number {
            width: 50px;
            height: 30px;
        }

        .item-cart-add-remove-btn-custom {
            background-color: white;
            display: inline-block;
            border-radius: 50%;
            width: 28px;
            height: 28px;
            border: solid 0.5px #707070;
        }

        .cartItem-elements-actions-custom > li {
            list-style-type: none;
        }

        .cartItem-elements-actions-custom > li > a {
            text-decoration: none;
            color: black;
        }

        .item-numbers-custom > .items {
            margin-top: 50px;
        }

        .cartItem-actions > .items {
            margin-top: 30px;
        }

        .cartItem-elements-actions-custom > li {
            margin-bottom: 15px;
        }

        .item-details-custom > .item-details {
            margin-top: 15px;
        }

        .item-details-custom > .item-details > span {
            display: block;
        }

        .cart-item-summary {
            border: 1px solid #707070;
            padding: 20px;
        }

        * {
            font-family: 'Montserrat', sans-serif;
        }

        .summary-details > .title {
            font-size: 16px;
            font-weight: bold;
        }

        .summary-details > div {
            font-size: 13px;
            margin-top: 15px;
        }

        .summary-item {
            display: flex;
            justify-content: space-between;
        }

        .order-button {
            display: flex;
            justify-content: center;
        }

        .order-button-custom {
            margin-top: 10px;
            width: 50%;
            height: 35px;
            border-radius: 25px;
            background-color: #D50032;
            color: white;
            border: 0;
            font-weight: bold;
        }

        .summary-item-total > span {
            font-weight: bold;
        }

        .cart-items-container {
            margin-top: 50px;
            margin-bottom: 50px;
        }

        @media only screen and (max-width: 992px) {
            .cart-progress-container-row {
                display:none;
            }
        }

        .cart-item-summary-background {
            background-color: rgb(245, 245, 245)
        }

    </style>
</head>
<body onload="addingItems()">
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

        <div class="container cart-container">
            <div class="row cart-progress-container-row">
                <div class="cart-progress-details">
                    <p class="progress-item-name">CART</p>
                    <p class="progress-item-name">CHECKOUT</p>
                    <p class="progress-item-name">CONFIRMATION</p>
                </div>
                <hr style="width: 25%; height: 4px; background-color: green; display: inline;">
                <hr style="width: 70%; height: 4px; background-color: grey; display: inline;">
            </div>

            <div class="row d-flex cart-items-container" id="mainDivItems">

            
            


                <div class="col-lg-3 col-md-5 col-sm-12  col-12">
                    <div class="summary-details cart-item-summary">
                        <span class="title">Pricing Summary</span>
                        <div class="subtotal summary-item">
                            <span>Subtotal</span><span id=subTotal>0</span>
                        </div>
                        <div class="coupon summary-item">
                            <span>Coupon</span><span>- 0</span>
                        </div>
                        <div class="giftcard summary-item">
                            <span>Gift Card</span><span>- 0</span>
                        </div>
                        <div class="tax summary-item">
                            <span>Estimated Tax</span><span>0</span>
                        </div>
                        <div class="shipping summary-item">
                            <span>Estimated Shipping</span><span>FREE</span>
                        </div>
                        <div class="total summary-item summary-item-total">
                            <span>Estimated Total</span><span id=total></span>
                        </div>
                        <div class="order-button">
                            <button type="button" id="order-button-custom" class="order-button-custom" onclick="order()">Order</button>
                        </div>
                    </div>
                </div>
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
    </div>
    <script>

var total=0;
function addingItems(){

total=0;
var div = document.getElementById("mainDivItems");
for(var i=0;i<localStorage.length;i++)
{
    total+=parseInt(localStorage.getItem(localStorage.key(i)).split('|||')[0])*parseInt(localStorage.getItem(localStorage.key(i)).split('|||')[4]);
    document.getElementById('subTotal').innerHtml=total;
            document.getElementById('total').innerHtml=total;
    console.log(total);

var items=localStorage.getItem(localStorage.key(i)).split("|||");
var newItem=
`<div class="col-lg-9 col-md-7 col-sm-12 col-12">
<div class="row cart-item-summary-background mb-3">
    <div class="col-lg-3 col-md-5 col-sm-6 col-6">
        <img src=`+items[5]+` width="175" height="175" alt="">
    </div>
    <div class="col-lg-3 col-md-7 col-sm-6 col-6 item-details-custom">
        <div class="item-details">
            <span class="item-name" id=`+localStorage.key(i)+`>`+items[3]+`</span>
            <span class="size">Size: <span>`+items[2]+`</span></span>
            <span class="color">Color: <span>`+items[1]+`</span></span>
            <span class="price">Price: <span>`+items[4]+`</span></span>
        </div>
    </div>
    <div class="col-lg-3 col-md-5 col-sm-6 col-6 item-numbers-custom p-0">
        <div class="items p-lg-2 pl-md-4 pl-sm-5 pl-5">
            <input type="text" style='margin-bottom:50px;' class="item-cart-number" disabled value=` +items[0]+ `>
        </div>
    </div>
    <div class="col-lg-3 col-md-7 col-sm-6 col-6 p-0 cartItem-actions">
        <div class="items">
            <ul class="cartItem-elements-actions-custom p-0">
                <li onclick="localStorage.removeItem(`+localStorage.key(i)+`); location.reload();">
                    <a href="#"  >
                        <img src="images/icons/bin.svg" alt="Remove" width="21" height="21" class="d-inline-block align-top">
                        <span>Remove</span>
                    </a>
                </li>
              
            </ul>
        </div>
    </div>
</div>




</div>
`;

div.innerHTML=newItem+div.innerHTML;


}
document.getElementById('subTotal').innerHTML=total;
            document.getElementById('total').innerHTML=total;

}   

        function order(){
            document.cookie = "len="+ localStorage.length+"; expires=0; path=/";
            for(var i=0;i<localStorage.length;i++){
                
                    document.cookie = i.toString()+"="+localStorage.key(i)+"|||"+localStorage.getItem(localStorage.key(i));+" expires=0; path=/";
            }
            localStorage.clear();
            location.href='/items';
        
            } 
    </script>
</body>
</html>