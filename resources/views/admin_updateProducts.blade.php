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

    <link rel="stylesheet" href="css/styles.css" type="text/css">
    <script src="js/validateJs.js"></script>

    <style>

        .navbar-properties-custom {
            box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 1px 3px 1px;
        }

        .sidebar-custom {
            height: 100%;
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

        .subLogin {
            box-shadow: rgba(0, 0, 0, 0.19) 0px 10px 20px, rgba(0, 0, 0, 0.23) 0px 6px 6px;
            margin-bottom: 50px;
        }

        .btn1 {
            height: 40px;
            box-shadow: rgba(0, 0, 0, 0.19) 0px 10px 20px, rgba(0, 0, 0, 0.23) 0px 6px 6px;
        }

        .admin-newadmin-form-title {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 30px;
        }

        #inputImgs{width: 300px ;}
        .formTextAreaFeild{border: none;border-bottom: 3px solid black; background-color: rgb(245, 245, 245); width: 300px; margin: 20px 0px 20px 0px ;}
        .formTextAreaFeild:focus{border: none;border-bottom: 3px solid red;outline: none;}
        .subLogin div input[type=checkbox]{width: 10%; }
        .subLogin div label{width: 80% }
        .subLogin div {margin-left: 30px; }
        @media screen and (max-width:472px)
        {.subLogin div {margin: 0px; padding: 0px; }
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
                        <img src="icons/cart.svg" alt="Cart" width="30" height="30" class="d-inline-block align-top">
                    </a>
                </li>
                <?php
                    if (Session::has('privilege') && Session::get('privilege') == 'admin')
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
                                    <form id="add-product-form" action="/admin_updateProducts/{{$id}}" method="POST" enctype="multipart/form-data" onsubmit="return validateAddProductFrom();">
                                        @csrf
                                        <?php
                                            foreach ($shoesData as $shoes) {
                                                
                                                print '<input  id=title name="title" type="text" class="formTextFeild" placeholder="Title" value="'.$shoes->product_title.'" required>';
                                                print '<input  id=price name="price" type="number" class="formTextFeild" placeholder="Price" value="'.$shoes->product_price.'" required>';
                                                print '<input  id=sizes name="sizes" type="text" class="formTextFeild" placeholder="Sizes (comma seperated)" value="'.$shoes->product_sizes.'" required>';
                                                print '<textarea id=description  row=4 col=4  name="description"  class="formTextAreaFeild" placeholder="Description" required>'.$shoes->product_description.'</textarea>';
                                                print '<input type="submit" name="Add Product" id="Add Product" value="UPDATE PRODUCT" class="btn1" >';
                                            }
                                        ?>
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