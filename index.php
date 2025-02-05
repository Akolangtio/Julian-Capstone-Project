<?php 
    session_start();

    // checks if the  user is login in a device
    if(isset($_SESSION['username']) || isset($_SESSION['email'])){
        header("location: PHP/AdminSide/src/php/index.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="CSS/landingp.css">
        <link rel="stylesheet" href="CSS/navbar.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
        <title>INM AUDIO</title>
    </head>
    <body>
        <header>
            <nav>
                <div class="logo">
                    <a href="index.php">
                        <img src="IMG/logo.png" alt="INM_AUDIO">
                    </a>
                </div>
                <ul class="links">
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        <a href="PHP/view/gearlibrary.php">Gear Library</a>
                    </li>
                    <li>
                        <a href="PHP/view/community.php">EIM Community</a>
                    </li>
                    <li>
                        <a href="PHP/view/customize.php">Customize</a>
                    </li>
                    <li>
                        <a href="PHP/view/shop.php">Shop</a>
                    </li>

                    <div class="logn">
                        <a href="PHP/view/cart.php"><i class="fa-solid fa-cart-shopping" style="color: white;"></i></a>
                        <a href="PHP/view/signup_login.php" ><i class="fa-solid fa-user-plus"style="color: white;"></i><a>
                    </div>
                </ul>
            </nav>  

            <div class="text">
                <h1>Immerse in Sound,</h1>
                <h1>Elevate Your Experience</h1>
                <div class="t-button">
                    <a href="ordering.php">Buy Now</a>
                </div>
            </div>
        </header>

        <div class="aboutt">
            <img src="IMG/aabout1.png" alt="">

            <div class="t_about">
                <h3>
                    What is?
                </h3>
                <h3>
                    EIM AUDIOPHILE
                </h3> <br>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Expedita quis soluta labore dicta, ipsam sit incidunt deserunt earum. Optio iusto quaerat illum ratione temporibus aliquid dolor labore voluptas deleniti, adipisci praesentium magni vel! Illum, porro ducimus vel numquam odit ad at magni quod culpa, dignissimos quia reiciendis distinctio, harum unde saepe temporibus a ut minus optio tempore beatae sint. Cupiditate neque illo magnam ullam. Iure velit pariatur tenetur inventore unde eius, fuga ut. Qui cumque dicta iure aliquid corporis. Qui voluptas aliquam quis tenetur quo ipsam vero obcaecati praesentium eveniet cum nisi beatae eligendi quod necessitatibus blanditiis iusto, possimus ipsa.</p>
                <br>
                <a href="#">Learn More</a>
            </div>
        </div>

        
        <div class="product">
            <div>
                <h1>OUR</h1>
                <h1>PRODUCT</h1>
            </div>
            <div class="group">
                <a href="shop.html">
                    <div class="img-block">
                        <img src="IMG/p1.png" alt="">
                        <p>Dark</p>
                    </div>
                </a>

                <a href="shop.html">
                    <div class="img-block">
                        <img src="IMG/p2.png" alt="">
                        <p>Dark</p>
                    </div>
                </a>

                <a href="shop.html">
                    <div class="img-block">
                        <img src="IMG/p3.png" alt="">
                        <p>Dark</p>
                    </div>
                </a>
            </div>
        </div>

        <div class="best">
            <div>
                <h1>MOST ENGAGING EIM WORLDWIDE</h1>
            </div>

            <div class="b_selling group">
                <div class="img-block">
                    <img src="IMG/p4.png" alt="">
                    <h5>SOARING</h5>
                    <h4>LYNX</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo asperiores ut optio id quisquam explicabo.</p>
                </div>

                <div class="img-block">
                    <img src="IMG/p5.png" alt="">
                    <h5>MUMMY</h5>
                    <h4>AUTARKY</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo asperiores ut optio id quisquam explicabo.</p>

                </div>
                
                <div class="img-block">
                    <img src="IMG/p6.png" alt="">
                    <h5>RUBY</h5>
                    <h4>WINE</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo asperiores ut optio id quisquam explicabo.</p>
                </div>
            </div>
        </div>
        <br><br>
        <div class="famous">
            <h1>FAMOUS GEAR CREATOR</h2>
                <br><br>
                <div class="square">
                    <div class="group">
                        <div class="user">
                            <img src="IMG/user.png" alt="">
                            <span>⭐⭐⭐⭐⭐</span>
                        </div>
                        <div class="user">
                            <img src="IMG/user.png" alt="">
                            <span>⭐⭐⭐⭐⭐</span>
                        </div>
                        <div class="user">
                            <img src="IMG/user.png" alt="">
                            <span>⭐⭐⭐⭐⭐</span>
                        </div>
                    </div>
                </div>
        </div>
    </body>
</html>