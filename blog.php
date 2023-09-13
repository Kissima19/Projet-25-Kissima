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
<section class="blo">
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

<!-- facilities -->
<section class="facilities">
    <h1>Our facilities</h1>
    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
    <div class="row">
        <div class="facilities-col">
            <img src="image3.avif" alt="">
            <h3>Delivery Our Domain</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam obcaecati molestiae esse!</p>
        </div>
        <div class="facilities-col">
            <img src="image0.avif" alt="">
            <h3>Delivery Our Domain</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam obcaecati molestiae esse!</p>
        </div>
        <div class="facilities-col">
            <img src="image1.avif" alt="">
            <h3>Delivery Our Domain</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam obcaecati molestiae esse!</p>
        </div>
    </div>
</section>

<section class="body"> 
    <div id="caroussel">
        <div class="images">
            <img src="dessin3.avif" alt="">
            <img src="conteneur.avif" alt="">
            <img src="image5.avif" alt="">
            <img src="image6.avif" alt="">
        </div>
            
        </div>
    </div>
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