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

<section class="sub-header">
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
    <h1>About Us</h1>
</section>
    
<!-------------------------------------- about us content -------------------------------------->
<section class="about-us">
    <div class="row">
        <div class="about-col">
            <h1>World's Biggest Deliver</h1>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deleniti voluptates eveniet 
                corporis a ut consectetur praesentium temporibus molestiae aliquid, obcaecati perspiciatis 
                nulla quae neque et placeat. Quis sunt cupiditate corporis tempore maxime eaque, accusamus 
                vitae velit rem aliquid commodi quam nisi voluptatum temporibus saepe possimus delectus ullam 
                iusto explicabo, vero recusandae. Consectetur rerum omnis animi fugit!</p>
                <a href="" class="hero-btn red-btn">EXPLORE NOW</a>
        </div>
        <div class="about-col">
            <img src="fdd.avif" alt="">
        </div>
    </div>
</section>

<section class="about-us">
    <h1>Nos agents sont disponibles 7jrs/7jr et de 6h a 21h partout au Faso</h1>
    <div class="row">
        <div class="about-col">
            <img src="lg0.avif" alt="">
        </div>
        <div class="about-col">
            <p>Nous sommes disponible dans toutes les grandes villes du Burkina Faso. On present a Bobo-Dioulasso 
            ou nous avons notre siege, a Ouagadougou ou nous avons differents etablissements, a Koudougou on a egalement
            des agents motives et performant pour vous faire parvenir vos differents colis, a Ouahigouya on a egalement 
            une Equipe prete a intervenir pour vos besoins, Tenkodogo on a egalement des agents, a Banfora un groupe performant
            d'agents est egalement disponible pour vous. <br> Dans les grandes villes on a des agents disponibles pour vos 
            courses et commissions de la maison</p>
            <a href="" class="hero-btn red-btn">EXPLORE NOW</a>
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