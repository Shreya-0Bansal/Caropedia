<!DOCTYPE html>
<html lang="en">
<head>  
    <title>Sports Car</title>
    <link rel="stylesheet" href="../css/css-style.css">
</head>
<body>
    <!-- header section start page -->
    <nav id="navbar">
        <div id="logo">
            <img src="../image/logo1.jpg"></div>
              <!----Linking Web Page-->
              <ul>
              <li><a href="../index.html">HOME</a></li>
              <li><a href="../about.html">ABOUT</a></li>
              <li><a href="../product.html">PRODUCT</a></li>
              <li><a href="../gl.html">GALLERY</a></li>
              <li><a href="../try_it.html">TEST_DRIVE</a></li>
              <li><a href="../feedback.php">FEEDBACK</a></li>
              </ul>
    </nav>

    <script src="https://kit.fontawesome.com/64d58efce2.js"></script>

    <div class="container">
        <div class="form">
            <div class="contact-info">
                <h3 class="title2">Get In Touch</h3>
                <p class="text">
                    Have a little something you wanna talk to about? Well give us a ring, send us a mail or fill out that nifty form.
                </p>

                <div class="info">
                    <div class="information">
                        <img src="../image/location.jpg" class="icon" alt="" />
                        <p>Ludhiana, India - 141002</p>
                    </div> 
                    <div class="information">
                        <img src="../image/mail.jpg" class="icon" alt="" />
                        <p>bansalshreya620@gmail.com</p>
                    </div>
                    <div class="information">
                        <img src="../image/phone.jpg" class="icon" alt="" />
                        <p>9417407577</p>
                    </div>
                </div>
                <div class="social-media">
                    <p>Connect with us :</p>
                    <div class="social-icons">
                        <a href="#">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="https://www.linkedin.com/in/shreya-bansal-8754b9227">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="contact-form">
                <form action="form_info.php" method="post" enctype="multipart/form-data"> 
                    <h3 class="title2">Contact us</h3>
                    <div class="input-container">
                        <input type="text" name="name" placeholder="Name" class="input" required/>
                    </div>
                    <div class="input-container">
                        <input type="email" name="email" placeholder="E-Mail" class="input" required/>
                    </div>
                    <div class="input-container">
                        <input type="tel" name="phone" placeholder="+91 987 789 1221" class="input" />
                    </div>
                    <div class="input-container textarea">
                        <textarea name="message" placeholder="Message" class="input" required></textarea>
                    </div>
                    <input type="submit" value="Submit" class="btn2">
                    <input type="reset" value="Clear" class="btn2"><br><br>
                    <?php
    if (isset($_GET['msgg']) && $_GET['msgg'] === 'Success') {
        echo "<h3 style='color: white;'>Thanks for your feedback.</h3>";
    }
    ?>
                </form>
            </div> 
        </div> 
    </div> 

    <!-- footer section starts -->
    <section class="footer">
        <div class="box-container">
            <div class="box">
                <br><br>
                <p>Subscribe for latest updates</p>
                <form action="subscribe.php" method="post" enctype="multipart/form-data">
                    <input type="email" name="email" placeholder="Enter your email" class="email">
                    <input type="submit" value="Subscribe" class="btn"><br>
                    <?php
                    if(isset($_REQUEST['msg'])) {
                        echo "<h1 style='color:rgb(205, 28, 90);'>Thanks for subscribing.</h1>"."<br>";
                    }
                    ?>
                </form>
            </div>
            <div class="credit"> Created by <span style="color: pink;"> <i class="fas fa-at"></i>Shreya Bansal</span> || All Rights Reserved! </div>
        </div>
    </section>
</body>
</html>
