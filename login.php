<?php include('loginserver.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>
    <link rel="shortcut icon" href="logo.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="results.css">
</head>
<body>

    <!--here goes our navigation bar-->


    <div class="nav">
        <nav class="nav-img-moe">
            <img src="logo.png" alt="moe">
        </nav> 
        <nav class="nav-text-label">
           <label class="ktc">KOROGWE TEACHERS COLLEGE</label> <br>
                 <q  style="font-size: 0.7em; font-family: Arial, Helvetica, sans-serif;"><i>Mwalimu kwa mfano</i></q>
           <br>
           <label style="font-size: 0.7em;"><i>Email: korogwettc@gmail.com<label style="color: #19A80F;">_____</label>P.O.Box 533 Korogwe, Tanga  </i> </label>
            <br>
            <li><a href="homepage.php">Home</a></li>
            <li><a href="#contact">Contact Us</a></li>
            <span id="dots"><button class="light" onclick="myFunction()" id="myBtn">Dark Mode</button></span>
            <span id="more"><button class="dark" onclick="myFunction()" id="myBtn">light Mode</button></span>
     </nav> 
        <nav class="nav-img-logo">
            <img src="moe.png" alt="moe">
        </nav>
        </div>

    <!--here goes our form section-->
    <form class="forrm" action="login.php" method="POST">
    
        <h1 style="font-family: 'segoe ui';">Sorry! we have to verify you first.<br>please log in</h1>              
                <?php include('errors.php'); ?>
                <input type="text" placeholder="Username" name="username" required>
                <br><br>
                <input type="password" placeholder="Password" name="password" required>
                <br><br>
                <button type="submit" class="btn" name="login_user">Login</button>
                <br>
                <h5>already have an account?? 
                <a  href="register.php">Sign up</a></h5>
                <br>
    </form>


    <!--here goes our location section-->

    <section name="location">
        <h1 style="text-align: center; color: #000000; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;">Where we are located</h1>
        <div style="margin: 10px;" class="mapouter">
            <div class="gmap_canvas">
                <iframe width="100%" height="500px" id="gmap_canvas" src="https://maps.google.com/maps?q=korogwe%20teachers%20college&t=k&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                <style>
                .mapouter{
                    border-radius: 20px;
                  position:relative;
                  text-align:right;
                  height:500px;
                  width:auto;
                  }
        .gmap_canvas {
              border-radius: 20px;
              overflow:hidden;
              background:none!important;
              height: 500px;
              width:auto;
                }
                </style> 
          <br>
            </div>
            </div>
      </section>

     <!--contact us form starts-->

   <section class="contact" id="contact">
    <div class="max-width">
        <h2><b>Contact Us</b></h2>
        <div class="contact-content">
            <div class="column left">
                <div class="text"><i>Get in Touch</i></div>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dignissimos harum corporis fuga corrupti. Doloribus quis soluta nesciunt veritatis vitae nobis?</p>
                <div class="icons">
                    <div class="row">
                        <i class="fa fa-user"></i>
                        <div class="info">
                            <div class="head">Name</div>
                            <div class="sub-title">Korogwe TTC</div>
                        </div>
                    </div>
                    <div class="row">
                      <i class="fa fa-fax"></i>
                      <div class="info">
                          <div class="head">Fax</div>
                          <div class="sub-title">027 2640999</div>
                      </div>
                  </div>
                  <div class="row">
                  <i class="fa fa-phone"></i>
                      <div class="info">
                          <div class="head">Mobile</div>
                          <div class="sub-title">027 2640540<br>027 2640847</div>
                      </div>
                  </div>
                    <div class="row">
                        <i class="fa fa-location-arrow"></i>
                        <div class="info">
                            <div class="head">Address</div>
                            <div class="sub-title">P.O.Box 533 Korogwe-Tanga</div>
                        </div>
                    </div>
                    <div class="row">
                        <i class="fa fa-envelope"></i>
                        <div class="info">
                            <div class="head">Email</div>
                            <div class="sub-title">KorogweTTC@gmail.com</div>
                        </div>
                    </div>
                    
                </div>
            </div>
            <div class="column right">
                <div class="text">Message us</div>
                <form action="https://formsubmit.co/boniphacebpm@gmail.com" method="POST">
                    <div class="fields">
                        <div class="field name">
                            <input type="text" placeholder="Name" required>
                        </div>
                        <div class="field email">
                            <input type="email" placeholder="Email" required>
                        </div>
                    </div>
                    <div class="field">
                        <input type="text"  placeholder="Subject" required>
                    </div>
                    <div class="field textarea">
                        <textarea cols="30" rows="10" placeholder="Message.." required></textarea>
                    </div>
                    <input type="hidden" name="_subject" value="your fist email">
                    <input type="hidden" name="_next" value="/index.html">
                        <input type="hidden" name="_captcha" value="false">
                    <div class="button-area">
                        <button type="submit">Send message</button><br>
                        
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- footer section start -->
<footer>
<br>
Created By <a style="color: #19A80F;  font-size: large; text-decoration: none; background: transparent; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;" href="https://www.Korogweteacherscollege.com">PaiPRO Tech</a> | &copy 2022 All rights reserved.</span>
</footer>
<script src="main.js"></script>
<script src="lightdarkmodes.js"></script>
<script src="mainn.js"></script>
</div>
</body>
</html>