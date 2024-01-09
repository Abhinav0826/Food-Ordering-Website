<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="book.css?v=6">
    <link href="http://fonts.cdnfonts.com/css/lucida-sans" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Marck+Script&display=swap" rel="stylesheet">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Marcellus&display=swap" rel="stylesheet">
    <title>Paradise</title>
    <link rel="icon" type="image/PNG" href="logo.PNG">
</head>
<body>
    <nav>
        <img src = "logo.PNG" class="logo" alt = "logo">
        <h1 class="title">Straight to You</h1>
        <ul>
            <li><a class = "cont" id="home" href="http://localhost/demo/home/mail.php">Home</a></li>
            <li><a class = "cont" href="http://localhost/demo/Search/search.php">Search</a></li>
            <li><a class = "cont" href="http://localhost/demo/orderspage/order.php">Orders</a></li>
            <li><a class = "cont" href="http://localhost/demo/HelpPage/Help.php">Help</a></li>
            <li><a class = "cont" id="check" onclick="toggle2()"><?php echo $_SESSION['username']; ?></a></li>
        </ul>

       
        <!-- <div class="popup" id="signin"> -->
            <div class="center">
                <h1 class="lh1">Book A Table</h1>
                <form action="mail.php" method="post">
                  <div class="txt_field">
                    <input type="text" name="username" required>
                    <span></span>
                    <label>Full Name</label>
                  </div>
                  <div class="txt_field">
                    <input type="tel" name="password" required>
                    <span></span>
                    <label>Phone Number</label>
                  </div>
                  <div class="txt_field">
                    <img src="cal1.png" class="cal" alt="">
                    <input type="date" name="password" class="date" required placeholder="Select Date">
                    <span></span>
                  </div>
                  <div class="txt_field">
                    <img src="time2.png" class="timer" alt="">
                    <input type="time" name="password" placeholder="Select Time" class="time">
                    <span></span>
                    <!-- <label>Select Time</label> -->
                  </div>
                  <div onclick="toggle3()" class="sub"><p  class="insub">Book</p></div>
                </form>
              </div>
            <div class="info">
              <div class="top"><h1 class="head">Paradise</h1><p class="bot">Kothapet, 2.6 Km</p></div>
              <img src="1.jpeg" class="picy" alt="">
              <h1 class="add1">Address</h1>
              <p class="add2"> 11-9-4, Road No. 3, Prabhat Nagar, Laxmi Nagar Colony, Kothapet, <br>Hyderabad, Telangana 500035</p>
              <h1 class="tim1">Open from</h1>
              <p class="tim2">12:00 PM - 11:00 PM</p>
            </div>
        </div>

        <div class="placed" id="pd">  
          <div class ="container2">
          <h1 class="ty">Thank you!</h1>
          <p class="p1">Your table has been booked successfully</p>
          <div class = "end">
              <button onclick="window.location.href='http://localhost/demo/home/mail.php';" class="but1">OKAY!</button>
          </div>
          </div>
          <div class="image">
              <img src="download .png" alt="" width = 130px>
          </div>
          </div>

          <div class="dd" id="stay">
        <h1 class="dd1">Your Account</h1>
        <a class="dd2"href="http://localhost/demo/Paradise/logout.php"><p class="dd3">Sign Out</p></a>
    </div>
        <script src="book.js?v=7"></script>
</body>
</html>