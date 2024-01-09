<?php 
session_start();
?>
<!DOCTYPE html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Help.css?v=2">
    <link href="http://fonts.cdnfonts.com/css/lucida-sans" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Marck+Script&display=swap" rel="stylesheet">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Marcellus&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cabin:wght@400;600&family=Great+Vibes&family=Kalam&family=Merriweather+Sans:ital,wght@1,300&family=Montserrat:ital@1&family=Rajdhani:wght@300&family=Sedgwick+Ave+Display&display=swap" rel="stylesheet">
    <title>HELP</title>
    <link rel="icon" type="image/PNG" href="logo.PNG">
</head>
<body>
    <nav>
        <img src = "logo.PNG" class="logo" alt = "logo">
        <h1 class="title">Straight to You</h1>
        <ul>
            <li><a class = "cont" href="http://localhost/demo/home/mail.php">Home</a></li>
            <li><a class = "cont" id="searchtag" href="http://localhost/demo/Search/searchlog.php">Search</a></li>
            <li><a class = "cont" href="http://localhost/demo/orderspage/orderlog.php">Orders</a></li>
            <li><a class = "cont" id = "S" href="http://localhost/demo/HelpPage/Help.php">Help</a></li>
            <li><a class = "cont" onclick="toggle2()" id="check"><?php echo $_SESSION['username']; ?></a></li>
        </ul>
    </nav>
    <div class="HELP1">
        <h1>Help And Reviews</h1>
    </div>
    <h3>Quick Support</h3>
    <div class="query">
        <p>I have a query related to placing an order<br>
    I have a payment or refund query<br>
    I am unable to login on Straight to you<br>
    I have a coupon related query<br>
    I am unable to place a cash on delivery order</p>
    </div>
    <div class="contact">
        <h3>Contact Us</h3>
        <h4>Chat with a Customer Specialist</h4>
        <p>Got Questions?Get live, real-time help with chat support</p>
        <button onlick = "" id="cn"> Chat Now</button>
    </div>
    <div class="callus">
        <h4>Call Us</h4>
        <p>Get in touch , free of charge</p>
        <p1>+91 1234567890</p1>
    </div>
    <div class="testimonials">
        <div class="inner">
            <div class="border">
                <div class="row">
                    <div class="col">
                        <img src="" alt="">
                        <div class="testimonial">
                            <div class="name">Abhinav,Kakinada</div>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <p>
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
                            </p>
                        </div>
                    </div>
                    <div class="col">
                        <img src="" alt="">
                        <div class="testimonial">
                            <div class="name">Joey , Bangalore</div>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>
                            <p>
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
                            </p>
                        </div>
                    </div>
                    <div class="col">
                        <img src="" alt="">
                        <div class="testimonial">
                            <div class="name">Nandini,Hyderabad</div>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>
                            <p>
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="dd" id="stay">
        <h1 class="dd1">Your Account</h1>
        <a class="dd2"href="http://localhost/demo/HelpPage/logout.php"><p class="dd3">Sign Out</p></a>
    </div>

    <script src="Help.js?v=2"></script>

    </body>