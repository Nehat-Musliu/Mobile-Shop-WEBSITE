<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php"); // Redirect to login if not logged in
    exit;
}
?>
<!-- <a href="logout.php">Logout</a> -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loxo Mobishop</title>
    <link rel="stylesheet" href="HomePage.css">
</head>
<body>
    <div class="container">
        <div class="navbar">
            <div class="logo">
                
            </div>
            <ul>
                <li><a href="HomePage.html">Home</a></li>  
                <li><a href="Product.html">Product</a></li>  
                <li><a href="About Us.html" >About Us</a></li>  
                <li><a href="Contact Us.html">Contact Us</a></li>  
                <li><a href="Support.css">Support</a></li>  
                <img  class="cross" src="./images/close-116-512.png" alt="cross">
            </ul>
            <div class="nav-icons">
                <img src="./images/search-icon-png-9969(1).png" alt="search">
                <img src="./images/shopping-bag.png" alt="shopping">
               
            </div>
        </div>
       
        <div class="back-video">
            <video autoplay loop muted play-inline >
                <source src="images/y2mate.com - iPhone Xr Official Trailer_1080p(1).mp4"  type="video/mp4">  
            </video>
        </div>

        <div class="section">
            <div class="titles">
                <h1> Store.The best way to buy the products you love.  </h1>
            </div>
            
            
            </div>
            <div class="products">
                <div class="product">
                    <img src="./images/5ec26e0b6c295800046c81db.png" alt="product">
                    <a href="#">Macbook</a>
                </div>
                <div class="product">
                    <img src="./images/airpods-32430.png" alt="product">
                    <a href="#">AirPods</a>
                </div>
                <div class="product">
                    <img src="./images/Apple-Watch-PNG-Transparent.png" alt="product">
                    <a href="#" >iWatch</a>
                </div>
                <div class="product">
                    <img src="./images/darkbomber-552585104b2a15720d3c0b661ce5945c.png" alt="product">
                    <a href="#">I Phone</a>
                </div>
                <div class="product">
                    <img src="./images/61d4a6218b51e20004664d4c.png" alt="product">
                    <a href="#">i Pad</a>
                </div>
                <div class="product">
                    <img src="./images/kisspng-apple-macbook-pro-intel-apple-imac-retina-4k-21-5-imac-retina-transparent-amp-png-clipart-free-dow-5cb6725ce50a57.7376126715554607009382.png" alt="product">
                    <a href="#">Monitor</a>
                </div>
                <div class="product">
                    <img src="./images/pngwing.com(1).png" alt="product">
                    <a href="#">New Phones</a>
                </div>
        </div>
        <div class="card-container">
            <h1>The latest. Take a look at what’s new right now. </h1>
            <div class="cards">
                 <div class="card">
                    <span>LIMITED TIME OFFER</span>
                    <h1>Save on Mac or iPad for university.</h1>
                    <p>You’ll also save on Apple Pencil, Magic Keyboard for iPad</p>
                    <img src="./images/Apple_new-macbookair-wallpaper-screen_11102020_big.jpg.large.jpg" alt="macbook">
                 </div>
                 <div class="card">
                    <span>LIMITED TIME OFFER</span>
                    <h1>MacBook Air 15. Buy Now </h1>
                    <p>You’ll also save on Apple Pencil, Magic Keyboard for iPad</p>
                    <img src="./images/Apple-WWDC23-MacBook-Air-15-in-hero-230605.jpg.news_app_ed.jpg" alt="macbook">
                 </div>
                 <div style="background: black;" class="card">
                    <span style="color: white;" >LIMITED TIME OFFER</span>
                    <h1 style="color: white;" >MacBook Air 15. Buy Now</h1>
                    <p style="color: white;">You’ll also save on Apple Pencil, Magic Keyboard for iPad, get 20% off AppleCare+, and more.²</p>
                    <img style="height: 180px;" src="./images/gsmarena_001.jpg" alt="iphone">
                 </div>
            </div>
        </div>
        <div class="apple-events">
            <h1>
                Let's Explore Apple Events
                photos </h1>
                <div class="event-pictures">
                    <img src="./images/APPLE-EVENT-SEP-2023-WALLPAPER-mod1.jpg" alt="events">
                    <img src="./images/apple-event-wallpaper-iphone.png" alt="events">
                </div>
        </div>
        <div class="section-3">
            <img src=https://www.apple.com/newsroom/images/2024/09/apple-introduces-iphone-16-and-iphone-16-plus/article/Apple-iPhone-16-hero-240909_inline.jpg.large.jpg>
            <h1>
                iPhone 16 Pro Leather Case <br>
                with MagSafe - Ink
                </h1>
        </div>
        <div class="menu-items">
            <div class="store">
                <p>Loxo Online Store</p>
            </div>
            <div class="menu-list">
                <ul>
                    <li>Shop and Learn</li>
                    <li> Store</li>
                    <li>Mac</li>
                    <li>iPad </li>
                    <li>iPhone </li>
                    <li>Watch </li>
                    <li>AirPods </li>
                    <li> TV & Home </li>
                    <li>AirTag </li>
                </ul>
                <ul>
                    <li>Apple Podcasts </li>
                    <li>Account</li>
                    <li>Manage Your Apple ID</li>
                    <li> Apple Store Account</li>
                    <li> iCloud.com</li>
                    <li>Entertainment</li>
                    <li> Apple TV+</li>
                    <li> Apple Music</li>
                    <li>Apple Arcade</li>
                </ul>
                <ul>
                    <li>Apple Values</li>
                    <li>  Accessibility</li>
                    <li>  Environment</li>
                    <li> Privacy</li>
                    <li>  Supplier Responsibility</li>
                    <li>   About Apple </li>
                    <li>    Newsroom </li>
                    <li> Apple Leadership </li>
                    <li>  Career Opportunities </li>
                    <li> Ethics & Compliance </li>
                    <li>    Events </li>
                    <li>    Contact Apple </li>
                </ul>
            </div>
            <div class="footer">
                <p>Copyright © 2025 Apple Inc. All rights reserved. Privacy Policy Terms of Use Sales Policy Legal Site Map </p>
            </div>
        </div>
    </div>
    <script>
      let nav_list = document.getElementById('nav-list')
      let openMenu = document.querySelector('.menuopen')
      let cross = document.querySelector('.cross')
      openMenu.addEventListener('click',()=>{
        nav_list.style.opacity = '100%'
        openMenu.style.display ='none'
      })
      cross.addEventListener('click',()=>{
        nav_list.style.opacity = '0%';
        setTimeout(()=>{
            openMenu.style.display ='block'
        },400)
      })

    </script>
</body>
</html>