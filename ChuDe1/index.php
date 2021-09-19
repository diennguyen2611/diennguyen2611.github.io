<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
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
        <div class="search">
            <div class="search-input">
                <form>
                <input type="text" name="search" placeholder="Search for Food..">
                <input type="button" value="Search" class="search-button">
                </form>
            </div>
        </div>

    </div>

    <div id="container">
        <div id="c-categories">
            <div class="main categories">
                    <h2>Explore Foods</h2>
                    <div class="row-menu">
                        <div class="menu-img">
                            <img src="images/pizza.jpg" alt="pizza">
                            <div class="title">Pizza</div>
                        </div>
                        <div class="menu-img">
                            <img src="images/burger.jpg" alt="burger">
                            <div class="title">Burger</div>
                        </div>
                        <div class="menu-img">
                            <img src="images/momo.jpg" alt="momo">
                            <div class="title">Momo</div>
                        </div>
                        <div class="clear"></div>
                    </div>
            </div>
        </div>

        <div id="c-food">
            <div class="main food">
                <h2>Food Menu</h2>
                <div class="row-food">
                        <div class="food-infor left">
                            <div class="food-img">
                                <img src="images/menu-pizza.jpg" alt="pizza" >
                            </div>
                            <div class="description">
                                <h3>Food Title</h3>
                                <p class="price">$2.3</p>
                                <p class="text">Made with Italian Sauce, Chicken, and organice, vegetables</p>
                                <div class="order-button">
                                    <a href="order.php">Order Now</a>
                                </div>

                            </div>
                            <div class="clear"></div>
                        </div>
                        <div class="food-infor right">
                            <div class="food-img">
                                   <img src="images/menu-burger.jpg" alt="burger" >
                            </div>
                            <div class="description">
                                <h3>Smoky Burger</h3>
                                <p class="price">$2.3</p>
                                <p class="text">Made with Italian Sauce, Chicken, and organice, vegetables</p>
                                <div class="order-button">
                                    <a href="order.php">Order Now</a>
                                </div>
                            </div>
                            <div class="clear"></div>
                        </div>
                        <div class="clear"></div>
                </div>

                <div class="row-food">
                        <div class="food-infor left">
                            <div class="food-img">
                                <img src="images/menu-burger.jpg" alt="burger" >
                            </div>
                            <div class="description">
                                <h3>Food Title</h3>
                                <p class="price">$2.3</p>
                                <p class="text">Made with Italian Sauce, Chicken, and organice, vegetables</p>
                                <div class="order-button">
                                    <a href="order.php">Order Now</a>
                                </div>

                            </div>
                            <div class="clear"></div>
                        </div>
                        <div class="food-infor right">
                            <div class="food-img">
                                   <img src="images/menu-pizza.jpg" alt="pizza" >
                            </div>
                            <div class="description">
                                <h3>Food Title</h3>
                                <p class="price">$2.3</p>
                                <p class="text">Made with Italian Sauce, Chicken, and organice, vegetables</p>
                                <div class="order-button">
                                    <a href="order.php">Order Now</a>
                                </div>
                            </div>
                            <div class="clear"></div>
                        </div>
                        <div class="clear"></div>
                </div>

                <div class="row-food">
                        <div class="food-infor left">
                            <div class="food-img">
                                <img src="images/menu-pizza.jpg" alt="pizza" >
                            </div>
                            <div class="description">
                                <h3>Food Title</h3>
                                <p class="price">$2.3</p>
                                <p class="text">Made with Italian Sauce, Chicken, and organice, vegetables</p>
                                <div class="order-button">
                                     <a href="order.php">Order Now</a>
                                </div>

                            </div>
                            <div class="clear"></div>
                        </div>
                        <div class="food-infor right">
                            <div class="food-img">
                                   <img src="images/menu-momo.jpg" alt="pizza" >
                            </div>
                            <div class="description">
                                <h3>Food Title</h3>
                                <p class="price">$2.3</p>
                                <p class="text">Made with Italian Sauce, Chicken, and organice, vegetables</p>
                                <div class="order-button">
                                    <a href="order.php">Order Now</a>
                                </div>
                            </div>
                            <div class="clear"></div>
                        </div>
                        <div class="clear"></div>
                </div>
                <a href="" class="all-food"><p>See All Foods</p></a>

            </div>
        <div> 
    </div>
    </div>

    <div id="footer">
        <div>
           <img src="icons/logo_facebook.png" alt="" width="32px" >
        </div>
        <div>
            <img src="icons/logo_instagram.png" alt="" width="32px" >
        </div>
        <div>
        <img src="icons/logo_twitter.png" alt="" width="32px" >
        </div>
        <p>All rights reserved. Designed by <span><a href="">NguyenThiDien</a></span></p>

    </div>
</body>
</html>