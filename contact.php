<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Livraire-Sans-Frontiere</title>

    <!--font awesome cdn link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <!--bootstrap cdn link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.1/css/bootstrap.min.css">

    <!--css link-->
    <link rel="stylesheet" href="style.css">
</head>
<body>
<section class="cont">
    <nav>
        <a href="index.html"><img src="logoi.png" alt="logo"></a>
        <div class="nav-links" id="navLinks">
            <i class="fa fa-times" onclick="hideMenu"></i>
            <ul>
                <li><a href="index.html">HOME</a></li>
                <li><a href="./about.html">ABOUT</a></li>
                <li><a href="./service.html">SERVICES</a></li>
                <li><a href="./blog.html">BLOG</a></li>
                <li><a href="./contact.html">CONTACT</a></li>
            </ul>
        </div>
        <i class="fa fa-bars" onclick="showMenu"></i>
    </nav>
</section>

<section class="contact-us">
    <div class="row">
        <div class="contact-col">
            <div>
                <i class="fa fa-home"></i>
                <span>
                    <h5>XYZ Road, ABC Building</h5>
                    <p>Bobo-Dioulasso, Burkina Faso</p>
                </span>
            </div>
            <div>
                <i class="fa fa-phone"></i>
                <span>
                    <h5>+226 0123456789</h5>
                    <p>Monday to Monday, 6AM to 8PM</p>
                </span>
            </div>
            <div>
                <i class="fa fa-envelope-o"></i>
                <span>
                    <h5>delivery@colis.com</h5>
                    <p>Email us your query</p>
                </span>
            </div>
        </div>
<div class="contact-col">
    <form action="index.php" method="post">
        <input type="text" name="name" placeholder="Enter your name" required>
        <input type="email" name="email" placeholder="Enter your email address" required>
        <input type="text" name="subject" placeholder="Enter your subject" required>
        <textarea rows="8" name="Message" placeholder="Message" required></textarea>
        <button type="submit" class="hero-btn red-btn">Send Message</button>
    </form>
</div>
    </div>
</section>

<!--------------------------- call to action ---------------------------------------->
<section class="cta">
    <h1>Enroll For Our Various Online Delivery <br> Anywhere From The Burkina</h1>
    <a href="" class="hero-btn">CONTACT US</a>
</section>
    
<!--------------------------------------- footer ----------------------------------->
<section class="footer">
    <h4>About Us</h4>
    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Odio, perspiciatis magnam iusto 
    veritatis ipsa quam <br> delectus soluta rerum, quasi reprehenderit maxime dolores velit molestias?</p>
    <div class="icons">
        <i class="fa fa-facebook"></i>
        <i class="fa fa-twitter"></i>
        <i class="fa fa-instagram"></i>
        <i class="fa fa-linkedin"></i>
        <i class="fa fa-whatsapp"></i>
    </div>
    <p>Made with <i class="fa fa-heart-o"></i> by Easy Turtorials</p>
</section>


    











<!-- link js -->
<script src="script.js"></script>
</body>
</html>