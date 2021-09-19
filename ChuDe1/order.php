<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>
<div id="header">
        <div class="navbar">
            <div class="logo">
                <a href="index.php">
                    <img src="images/logo.png" alt="logo" height="55px">
                </a>
            </div>
            <div class="nav">
                <ul>
                    <a href="index.php">
                        <li>Home</li>
                    </a>
                    <a href="categories.php">
                        <li>Categories</li>
                    </a>
                    <a href="foods.php">
                        <li>Food</li>
                    </a>
                    <a href="#footer">
                        <li>Contact</li>
                    </a>
                </ul>

            </div>

            <div class="nav-icon">
                <i class="fas fa-bars" style="width:64px">
                <div class="nav-none">
                    <ul>
                        <a href="index.php">
                            <li>Home</li>
                        </a>
                        <a href="categories.php">
                            <li>Categories</li>
                        </a>
                        <a href="foods.php">
                             <li>Food</li>
                        </a>
                        <a href="#footer">
                            <li>Contact</li>
                        </a>
                    </ul>
                </div>
                </i>
                
            </div>

            <div class="clear"></div>
        </div>
    </div>

    <div id="form-oder">
        <div class="form-content">
            <h1>Fill this form to confirm your oder.</h1>
            <fieldset class="border-form select-food">
                <legend>Selected Food</legend>
                <div class="food-infor order">
                    <div class="food-img">
                       <img src="images/menu-pizza.jpg" alt="pizza" >
                    </div>
                    <div class="description">
                        <h3>Food Title</h3>
                        <p class="price">$2.3</p>
                        <h4 class="quantity">Quantity</h4>
                        <input type="number" value="1">
                    </div>
                    <div class="clear"></div>
                </div>
            </fieldset>

            <fieldset class="border-form delivery-details">
                <legend>Delivery Details</legend>
                <form>
                    <h4>Full Name</h4>
                    <input type="text" placeholder="E.g. Vijay Thapa">
                    <h4>Phone Number</h4>
                    <input type="text" placeholder="E.g. 0986xxxxxxxx">
                    <h4>Email</h4>
                    <input type="text" placeholder="E.g. hi@gmail.com">
                    <h4>Address</h4>
                    
                    <textarea rows="10" placeholder="E.g. Street, City, Country"></textarea>
                    
                    <br>
                    <input type="button" value="Confirm Oder" id="order-btt">
                </form>

            </fieldset>
        </div>

    </div>

    <div id="footer">  <!--index.php-->
        <div>
           <img src="icons/logo_facebook.png" alt="" width="32px" >
        </div>
        <div>
            <img src="icons/logo_instagram.png" alt="" width="32px" >
        </div>
        <div>
        <img src="icons/logo_twitter.png" alt="" width="32px" >
        </div>
        <p>All rights reserved. Designed by <span><a href="">CSE.TLU</a></span></p>

    </div>

    
</body>
</html>