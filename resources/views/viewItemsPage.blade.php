<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <script src="https://kit.fontawesome.com/bd69f86183.js" crossorigin="anonymous"></script>
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    
    <link rel="stylesheet" href="css/footercss.css" type="text/css">
    <link rel="stylesheet" href="css/farasat.css" type="text/css">

    <script src="js/myscript.js" ></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

    <style>
        #navBlack {
            margin-bottom: 4px;
            box-shadow: rgb(60 64 67 / 30%) 0px 1px 2px 0px, rgb(60 64 67 / 15%) 0px 1px 3px 1px;
        }

        .sidebar-form-custom {
            box-shadow: rgba(0, 0, 0, 0.16) 0px 3px 6px, rgba(0, 0, 0, 0.23) 0px 3px 6px;
        }

        .individual-shoe-item {
            background-color: black;
        }

        .shoes-data-custom {
            float: right;
            margin-top: 10px;
            padding-right: 50px;
            width: 75%;
        }

        /* CARDS */
        .individual-cards-shoes {
            width: 250px;
            height: 340px;

            margin-top: 50px;
            margin-bottom: 50px;

            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            transition: 0.2s;
        }

        .individual-cards-shoes:hover {
            box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
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

        .individual-cards-shoes {
            margin-right: 40px;
        }

        .shoe-item-link {
            color: black;
        }

        .shoe-item-link:hover {
            text-decoration: none;
            color: red;
        }
        
    </style>

    <title>Search Items - Runner</title>
</head>
<body>
    <div id="navBlack" class="fluid-container">
        <nav  class="navbar navbar-light navbar-expand-md navbar-properties-custom">
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
                <?php
                    if(Session::has('privilege') && Session::get('privilege') == 'user') {
                        print '<li class="nav-item">';
                            print '<a href="/profile" class="nav-link">';
                                print '<img src="icons/sign-up-clear.svg" alt="Sign up" width="30" height="30" class="d-inline-block align-top">';
                            print '</a>';
                        print '</li>';
                        print '<li class="nav-item">';
                            print '<a href="/logout" class="nav-link">';
                                print '<img src="icons/logout.svg" alt="Logout" width="22" height="22" style="margin-top: 3px;" class="d-inline-block align-top">';
                            print '</a>';
                        print '</li>';
                    } else if (Session::has('privilege') && Session::get('privilege') == 'admin')
                    {
                        print '<li class="nav-item">';
                        print '<a href="/logoutAdmin" class="nav-link">';
                            print '<img src="icons/logout.svg" alt="Logout" width="22" height="22" style="margin-top: 3px;" class="d-inline-block align-top">';
                        print '</a>';
                        print '</li>';
                    }
                ?>
            </ul>
        </nav>
    </div>

    <aside id=searchAside>
        <button class="btn btn1" type="button" onclick="collpaseFilter()" >
            Filter
          </button>
       <form action="searchAside"  class="sidebar-form-custom"> 
                    @csrf
           <div id=searchAsideMainDiv  >

                <label for="sideSearchBar" ></label>
                <input type="text" name="search" placeholder="sneakers runner tree" onfocus='onFoc()' id="sideSearchBar" class="formTextFeild" list='myList'>
                    <datalist id='myList'>
                    </datalist>

                <h2 class="asideSearchH">Catagory</h2>
                    <input type="radio" name="catagory" id="Men" value="Men">
                    <label for="Men"> Men </label><br>
                    <input type="radio" name="catagory" id="Women" value="Women">
                    <label for="Women"> Women </label><br>
                    
                <hr>

                <h2 class="asideSearchH">Price</h2>
                    <input type="radio" name="price" id="Low To High" value="Low To High">
                    <label for="Low To High"> Low To High </label> <br>
                    <input type="radio" name="price" id="High To Low" value="High To Low">
                    <label for="High To Low"> High To Low </label><br>
                
              

                <hr>
                
                <h2 class="asideSearchH">Date</h2>
                    <input type="radio" name="date" id="Latest To Oldest" value="Latest To Oldest">
                    <label for="Low To High"> Latest To Oldest </label> <br>
                    <input type="radio" name="date" id="Oldest To Latest" value="Oldest To Latest">
                    <label for="High To Low"> Oldest To Latest </label><br>
            
                    <input type="submit" value="Filter" class="btn">
            </div>
        </form>
    </aside>



<script> 

function onFoc(){
   var s =  document.getElementById('sideSearchBar');
   if(s.value==''){
    $.ajax({
               type:'POST',
               url:'/getSuggestions',
               data:{'_token' : "{{csrf_token()}}" },
               success:function(data) {
                   console.log(data.suggestions);
                   var list = document.getElementById('myList');
                   list.innerHTML=''
                   for(var i=0;i<data.suggestions.length;i++)
                       list.innerHTML+='<option>'+ data.suggestions[i]+'</option>';
    }});

   
}}

 </script>

    <section class="container shoes-data-custom">
        <div class="row cards-items-custom d-flex justify-content-center">
            <?php
                for($i = 0; $i < count($shoesDataArray); $i++){
                    $imageSrc = explode(";", $shoesDataArray[$i][6]);

                    if (str_contains($shoesDataArray[$i][1], "Men's ")) { 
                        $title = str_replace("Men's ", "", $shoesDataArray[$i][1]);
                    }else{
                        $title = str_replace("Women's ", "", $shoesDataArray[$i][1]);
                    }
                    
                    print '<div class="individual-cards-shoes">';
                        print '<a class="shoe-item-link" href="/shoe-details?id='.$shoesDataArray[$i][0].'">';
                            print '<div class="individual-cards-container">';
                                print '<img class="individual-cards-image-cards" src="'.asset('/uploads/'.$imageSrc[0]).'" alt="Cards">';
                            print '</div>';
                            print '<div class="individual-cards-image-details">';
                                print '<h4 class="image-details-title">'.$title.'</h4>';
                                print '<p class="image-details-more">Breezy Slip-On</p>';
                            print '</div>';
                        print '</a>';
                    print '</div>'; 
                }
            ?>
        </div>
    </section>
 
    <footer id=footer style="clear: both;">
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