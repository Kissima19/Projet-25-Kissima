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
<section class="serv">
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
    
<!--our services-->
<section class="services">
    <h1>Our Services</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
    <div class="row">
        <div class="services-col">
            <img src="conteneurs3.avif" alt="">
            <div class="layer">
                <h3>BOBO-DIOULASSO</h3>
            </div>
        </div>
        <div class="services-col">
            <img src="image0.avif" alt="">
            <div class="layer">
                <h3>OUAGADOUGOU</h3>
            </div>
        </div>
        <div class="services-col">
            <img src="image1.avif" alt="">
            <div class="layer">
                <h3>KOUDOUGOU</h3>
            </div>
        </div>
    </div>
</section>

<section class="services">
    <h1>Nous disposons des conteneurs dans les differents ports d'Afrique</h1>
    <p>et nous assurons les formalités de vos marchandises aux pret des services de Douanes</p>
    <div class="conteneur">
        <div class="serv-col">
            <img src="conteneur.avif" alt="">
            <h3>Nous sommes disponible dans les ports de Ghana, C.I, Lome et la Guinee</h3>
        </div>
        <div class="serv-col">
            <img src="conteneurs2.avif" alt="">
            <h3>Nous traitons les dossiers de vos differents marchandises au prets des services de Douanes</h3>
        </div>
        
    </div>
</section>

<section class="services">
    <h1>International Delivery</h1>
    <p>Nos services sont disponible partout dans le monde, on a des livreur partout</p>
    <div class="services-col">
        <img src="carte2.avif" alt="">
        <div class="layer">
            <h3>Nous livrons partout dans le monde, en Afrik, aux USA, en EU et en Asi</h3>
        </div>
    </div>
    <h1>Nous sommes disponible dans les differents Etats pour tout vos besoins</h1>
    <div class="row">
        <div class="services-col h3">
            <h2>EUROPE</h2>
            <h3>Angleterre</h3>
            <h3>Allemagne</h3>
            <h3>France</h3>
            <h3>Espagne</h3>
            <h3>Italie</h3>
        </div>
        <div class="services-col h3">
            <h2>AMERIQUE</h2>
            <h3>Califoni</h3>
            <h3>Washingtone</h3>
            <h3>Brezil</h3>
            <h3>Colombie</h3>
            <h3>Argentine</h3>
        </div>
        <div class="services-col h3">
            <h2>ASIE</h2>
            <h3>Russie</h3>
            <h3>Chine</h3>
            <h3>Inde</h3>
            <h3>Kazakhstan</h3>
            <h3>Arabi Saoudite</h3>
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