<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KorogweTTC | Examination Results</title>
    <link rel="shortcut icon" href="logo.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="results.css">
    <link rel="stylesheet" href="homepage.css">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="responsive.css">
</head>
<body>
    <!--haere is our preloader-->
  

    <!--Here goes the navigation bar-->
    <div class="nav">
        <nav class="nav-img-moe">
           <img src="moe.png" alt="moe">
        </nav> 
        <nav class="nav-text-label">
           <label class="ktc">KOROGWE TEACHERS COLLEGE</label> <br>
                 <q  style="font-size: 0.7em; font-family: Arial, Helvetica, sans-serif;"><i>Mwalimu kwa mfano</i></q>
           <br>
           <label style="font-size: 0.6em;"><i>Email: korogwettc@gmail.com<label style="color: #19A80F;">_____</label>P.O.Box 533 Korogwe, Tanga  </i> </label>
            <br>
            <li><a href="homepage.php">Home</a></li>
            <li><a href="results.php">Results</a></li>
            <li><a href="#contact">Contact Us</a></li>
            

            <span id="dots"><button class="light" onclick="myFunction()" id="myBtn">Dark Mode</button></span>
            <span id="more"><button class="dark" onclick="myFunction()" id="myBtn">light Mode</button></span>
        </nav> 
        <nav class="nav-img-logo">
            <img src="logo.png" alt="logo">
        </nav>
        </div>

   <!--content is as follows-->
   <!--content is as follows-->
<section>

        <h1 style="text-align: center; font-size: 35px; font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;"><b>National Examination Council's Results</b></h1>

   <div class="results">
    <div class="advance">
        <h3 style="color: #19A80F; font-size: 30px">Advanced level</h3>
        <ul>
            <li><a href="">2022</a></li>
            <li><a href="">2021</a></li>
            <li><a href="">2020</a></li>
            <li><a href="">2019</a></li>
            <li><a href="">2018</a></li>
            <li><a href="">2017</a></li>
            <li><a href="">2016</a></li>
        </ul>

    </div>
    
    <div class="diploma">
        <h3 style="color: #19A80F; font-size: 30px;">Diploma </h3>
        <ul>
            <li><a href="">2022</a></li>
            <li><a href="">2021</a></li>
            <li><a href="">2020</a></li>
            <li><a href="">2019</a></li>
            <li><a href="">2018</a></li>
            <li><a href="">2017</a></li>
            <li><a href="">2016</a></li>
        </ul>
    </div>
</div>


</section>
    <h1 style="text-align: center; font-size: 35px; font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;"><b>Internal Examination Results</b></h1>
    <div class="innresults">
        <div class="inresults">
            <h3 style="padding-left: 20px; text-align:left; color: #19A80F; font-size: 30px;">First Year </h3>
            <div class="twothre">
            <div class="twoyrs">
                <h3 style="color: #19A80F; font-size: 20px;">Two Years </h3>
                <ul>
                    <li><a href="">2022 (Terminal)</a></li>
                    <li><a href="">2021 (Annual)</a></li>
                    <li><a href="">2021 (Terminal)</a></li>
                    <li><a href="">2020 (Annual)</a></li>
                    <li><a href="">2020 (Terminal)</a></li>
                    <li><a href="">2019 (Annual)</a></li>
                    <li><a href="">2019 (Terminal)</a></li>
                </ul>
            </div>

            <div class="threeyrs">
                <h3 style="color: #19A80F; font-size: 20px;">Three Years </h3>
                <ul>
                    <li><a href="">2022 (Terminal)</a></li>
                    <li><a href="">2021 (Annual)</a></li>
                    <li><a href="">2021 (Terminal)</a></li>
                    <li><a href="">2020 (Annual)</a></li>
                    <li><a href="">2020 (Terminal)</a></li>
                    <li><a href="">2019 (Annual)</a></li>
                    <li><a href="">2019 (Terminal)</a></li>
                </ul>
            </div>
        </div>
        </div>
        
        <div class="inresults">
            <h3 style="padding-left: 20px; text-align:left; color: #19A80F; font-size: 30px;">First Year </h3>
            <div class="twothre">
            <div class="twoyrs">
                <h3 style="color: #19A80F; font-size: 20px;">Two Years </h3>
                <ul>
                    <li><a href="">2022 (Terminal)</a></li>
                    <li><a href="">2021 (Annual)</a></li>
                    <li><a href="">2021 (Terminal)</a></li>
                    <li><a href="">2020 (Annual)</a></li>
                    <li><a href="">2020 (Terminal)</a></li>
                    <li><a href="">2019 (Annual)</a></li>
                    <li><a href="">2019 (Terminal)</a></li>
                </ul>
            </div>

            <div class="threeyrs">
                <h3 style="color: #19A80F; font-size: 20px;">Three Years </h3>
                <ul>
                    <li><a href="">2022 (Terminal)</a></li>
                    <li><a href="">2021 (Annual)</a></li>
                    <li><a href="">2021 (Terminal)</a></li>
                    <li><a href="">2020 (Annual)</a></li>
                    <li><a href="">2020 (Terminal)</a></li>
                    <li><a href="">2019 (Annual)</a></li>
                    <li><a href="">2019 (Terminal)</a></li>
                </ul>
            </div>
        </div>
        </div>

    <div class="inresults">
        <h3 style="color: #19A80F; font-size: 30px;">Third year </h3>
        <ul>
            <li><a href="">2022 (Terminal)</a></li>
                <li><a href="">2021 (Annual)</a></li>
                <li><a href="">2021 (Terminal)</a></li>
                <li><a href="">2020 (Annual)</a></li>
                <li><a href="">2020 (Terminal)</a></li>
                <li><a href="">2019 (Annual)</a></li>
                <li><a href="">2019 (Terminal)</a></li>
        </ul>
    </div>
</div>    

</sectyion>
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
<section class="footering">
    <div class="fooot">
    <a href="about.php">About us</a>  | <a href="privacy and policy.php">Privacy and policy</a> | <a href="tems and conditions.php">Terms & Services</a><br>
       <p>KoTC  &copy;2022 All rights reserved <br>Made by <a href="">PaiPRO Tech</a></p>
       
    </div>
</section>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script>
        setTimeout(function(){
            $('.loader_bg').fadeToggle();
        }, 1500);
    </script>
<script src="mainn.js"></script>
<script src="lightdarkmodes.js"></script>
</div>
</body>
</html>