<?php include('loginserver.php') ?>
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
    <link rel="stylesheet" href="matangazo.css"> 
</head>
<body>
<!--haere is our preloader-->
 


    
    <!--here goes our navigatiomn bar-->


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
            <img src="logo.png" alt="moe">
        </nav>
        </div>

   <!--content is as follows-->
   <!--content is as follows-->
<!--here goes our administration, background and mr.Lorem Ipsum-->

<section>
  <div class="second-section-container">
    <!--here is college background-->
    <div class="background">
      <h1 style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">BACKGROUND</h1>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim nesciunt facilis nulla ipsam officia illum quaerat explicabo numquam quia placeat.Lorem ipsum dolor sit amet consectetur, adipisicing elit. A blanditiis sed corporis deleniti quia? Eligendi corrupti inventore nemo omnis facere. </p> 
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam eveniet labore in exercitationem ad, necessitatibus atque nam est eius temporibus.Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim nesciunt facilis nulla ipsam officia illum quaerat explicabo numquam quia placeat.Lorem ipsum dolor sit amet consectetur, adipisicing elit. A blanditiis sed corporis deleniti quia? Eligendi corrupti inventore nemo omnis facere. </p> 
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam eveniet labore in exercitationem ad, necessitatibus atque nam est eius temporibus.</p>
    </div> 
    <div class="administration">
      <h1 style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">Administration</h1>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim nesciunt facilis nulla ipsam officia illum quaerat explicabo numquam quia placeat.Lorem ipsum dolor sit amet consectetur, adipisicing elit. A blanditiis sed corporis deleniti quia? Eligendi corrupti inventore nemo omnis facere. </p> 
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam eveniet labore in exercitationem ad, necessitatibus atque nam est eius temporibus.Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim nesciunt facilis nulla ipsam officia illum quaerat explicabo numquam quia placeat.Lorem ipsum dolor sit amet consectetur, adipisicing elit. A blanditiis sed corporis deleniti quia? Eligendi corrupti inventore nemo omnis facere. </p> 
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam eveniet labore in exercitationem ad, necessitatibus atque nam est eius temporibus.</p>
    </div> 
    <div class="mr-lorem">
      <p><h1> <img src="Daffur.jpg" id="mr-lorem-img">Mr. Lorem Ipsum</h1></p>
      <p><br>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam eveniet labore in exercitationem ad, necessitatibus atque nam est eius temporibus.Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam eveniet labore in exercitationem ad, necessitatibus atque nam est eius temporibus.Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim nesciunt facilis nulla ipsam officia illum quaerat explicabo numquam quia placeat.</p> 
      <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. A blanditiis sed corporis deleniti quia? Eligendi corrupti inventore nemo omnis facere. </p> 
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam eveniet labore in exercitationem ad, necessitatibus atque nam est eius temporibus.</p>
    
     lorem50
    </div>
  </div>
</section>

<!--here goes the college environment section -->
<!--here goes the college environment section -->
<section class="center-section">
    <div class="left-section">
<section>
    <h1 style="text-align: center; font-size: 30px; font-weight: 800; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">COLLEGE ENVIRONMENT</h1>

      <!-- Slideshow container -->
<section>
 <style>
    /* Slideshow container */

    .mySlides {
        display: none;
        background: transparent;
    }
    
    
    .slideshow-container {
      max-width: fill;
      margin: 0;
    }

    .mySlides img{
        width: 100%;
        height: auto;

    }
    
    /* Caption text */
    .text {
      color: #f2f2f2;
      font-size: 15px;
      padding: 8px 12px;
      position: relative;
      bottom: 30px;
      width: 100%;
      text-align: center;
    }
    
    /* The dots/bullets/indicators */
    .dot {
      height: 15px;
      width: 15px;
      margin: 0 2px;
      background-color: #bbb;
      border-radius: 50%;
      display: inline-block;
      transition: background-color 0.6s ease;
    }
    
    .active {
      background-color: #535353;
    }
    
    /* Fading animation */
    .fade {
      animation-name: fade;
      animation-duration: 1.5s;
    }
    
    @keyframes fade {
      from {opacity: .4} 
      to {opacity: 1}
    }
    
    /* On smaller screens, decrease text size */

    @media screen and (min-width: 150px) and (max-width: 1000px) {
        .mySlides img{
        width: 100%;
        height: auto;

    }
    }


    @media only screen and (max-width: 300px) {
      .text {font-size: 11px}
    }
    </style>
    
    
    
    <div class="slideshow-container">
    
      <div class="mySlides fade">
        <img src="images-5.jpeg" >
        <div class="text">Caption Text</div>
      </div>
      
      <div class="mySlides fade">
        <img src="images-2.jpeg" >
        <div class="text">Caption Two</div>
      </div>
      
      <div class="mySlides fade">
        <img src="images-3.jpeg" style="width:100%">
        <div class="text">Caption Three</div>
      </div>
    
      <div class="mySlides fade">
        <img src="images-4.jpeg" style="width:100%">
        <div class="text">Caption four</div>
      </div>
      
      <div class="mySlides fade">
        <img src="images-5.jpeg" style="width:100%">
        <div class="text">Caption Five</div>
      </div>
      
      <div class="mySlides fade">
        <img src="images-5.jpeg" style="width:100%">
        <div class="text">Caption Six</div>
      </div>
    
      <div class="mySlides fade">
        <img src="images-8.jpeg" style="width:100%">
        <div class="text">Caption Seven</div>
      </div>
    
      <div class="mySlides fade">
        <img src="images-4.jpeg" style="width:100%">
        <div class="text">Caption Eight</div>
      </div>
    
      <div class="mySlides fade">
        <img src="images-8.jpeg" style="width:100%">
        <div class="text">Caption Nine</div>
      </div>
    
    
    </div>
    <br>
    
    <div style="text-align:center">
      <span class="dot"></span> 
      <span class="dot"></span> 
      <span class="dot"></span> 
      <span class="dot"></span> 
      <span class="dot"></span> 
      <span class="dot"></span>
      <span class="dot"></span> 
      <span class="dot"></span> 
      <span class="dot"></span>
    </div>
    
    <script>
    let slideIndex = 0;
    showSlides();
    
    function showSlides() {
      let i;
      let slides = document.getElementsByClassName("mySlides");
      let dots = document.getElementsByClassName("dot");
      for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";  
      }
      slideIndex++;
      if (slideIndex > slides.length) {slideIndex = 1}    
      for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
      }
      slides[slideIndex-1].style.display = "block";  
      dots[slideIndex-1].className += " active";
      setTimeout(showSlides, 4000); // Change image every 2 seconds
    }
    </script>


</section>
</section>


<!--here goes our location on google maps sattelite-->

<section name="location">
    <h1 style="text-align: center; color: #cc4444; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;">Where we are located</h1>
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






</div>


<div class="right-section">


    <section class="courses">
        <div class="contaainer">
            <div class="contentt">
                <h1 style="text-align: center;">Courses Offered</h1>
                <p style="text-align: center;">
                    In Korogwe Teachers College we provede the following courses
                </p>
                <p>
                    <Ul>
                        <li>PCE (Physics & Chemistry)</li>
                        <li>PME (Physics & Mathematics)</li>
                        <li>PBE (Physics & Biology)</li>
                        <li>MIT (Mathematics & I.T)</li>
                        <li>PIT (Physics & I.T)</li>
                        <li>CME (Chemistry & Mathematics)</li>
                        <li>BGE (Biology & Geography)</li>
                        <li>CGE (Chemistry & Geography)</li>
                        <li>MGE (Mathematics & Geography)</li>
                        
                    </Ul>
                </p>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum a nihil odit.
                </p>
            </div>
        </div>
    
    </section>

    <section class="announcement-section">
        <div class="matangazo">
            <div class="head-announcements">Announcements</div><br>
            <div class="announce"><label class="date" style="background-color: #19A80F;"><b>Pinned!</b></label>Lorem ipsum dolor sit amet co
                nsectetur, adipisicing elit. Ab quas velit corporis error accusantium odio, voluptas ass
                umenda nemo voluptatem quasi ut
                 </div>

                 <div class="announce"><label class="date">12 april</label>Lorem ipsum dolor sit amet co
                    nsectetur, adipisicing elit. Ab quas velit corporis error accusantium odio, voluptas ass
                    umenda nemo voluptatem quasi ut
                     </div>

                     <div class="announce"><label class="date">12 april</label>Lorem ipsum dolor sit amet co
                        nsectetur, adipisicing elit. Ab quas velit corporis error accusantium odio, voluptas ass
                        umenda nemo voluptatem quasi ut
                         </div>

                         <div class="announce"><label class="date">12 april</label>Lorem ipsum dolor sit amet co
                            nsectetur, adipisicing elit. Ab quas velit corporis error accusantium odio, voluptas ass
                            umenda nemo voluptatem quasi ut
                             </div>

                             <div class="announce"><label class="date">12 april</label>Lorem ipsum dolor sit amet co
                                nsectetur, adipisicing elit. Ab quas velit corporis error accusantium odio, voluptas ass
                                umenda nemo voluptatem quasi ut
                                 </div>

                                 <div class="announce"><label class="date">12 april</label>Lorem ipsum dolor sit amet co
                                  nsectetur, adipisicing elit. Ab quas velit corporis error accusantium odio, voluptas ass
                                  umenda nemo voluptatem quasi ut
                                   </div>

                                   <div class="announce"><label class="date">12 april</label>Lorem ipsum dolor sit amet co
                                    nsectetur, adipisicing elit. Ab quas velit corporis error accusantium odio, voluptas ass
                                    umenda nemo voluptatem quasi ut
                                     </div>

                     
                
        </div>
    </section>


    
</div>
</section>


<!--here goes our third part of our website-->

<section>
    <div class="second-section-container">
      <!--here is college background-->
      <div class="background">
        <h1 style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">About Korogwe TTC</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim nesciunt facilis nulla ipsam
             officia illum quaerat explicabo numquam quia placeat.Lorem ipsum dolor sit amet consecte
             tur, adipisicing elit. A blanditiis sed corporis deleniti quia? Eligendi corrupti invent
             ore nemo omnis facere.</p> <a href="about.php" id="read-more" >Read More..</a> 
        </div> 
      <div class="administration">
        <h1 style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">EVENTS</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim nesciunt facilis nulla ipsam
             officia illum quaerat explicabo numquam quia placeat.Lorem ipsum dolor sit amet consecte
             tur, adipisicing elit. A blanditiis sed corporis deleniti quia? Eligendi corrupti invent
             ore nemo omnis facere.</p>  <a href="events.php" id="read-more" >Read More..</a> 
      </div> 
      <div class="mr-lorem">
        <h1 style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">SPORTS & GAMES</h1>
        <p><br>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam eveniet labore in 
            exercitationem ad, necessitatibus atque nam est eius temporibus.Lorem ipsum dolor sit ame
            t consectetur adipisicing elit. Laboriosam eveniet labore in exercitationem ad, necessit
            ibus atque nam est eius temporibus.Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            <a href="sports.php" id="read-more" >Read More..</a>  
              
       
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
            <!--here goes our contact foprm styling darkmode-->

          
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
<script src="preloader.js"></script>
<script src="results.js"></script>
<script src="main.js"></script>
<script src="main2.js"></script>
<script src="mainauto.js"></script>
<script src="mainn.js"></script>
<script src="homepage.js"></script>
</div>
</body>
</html>