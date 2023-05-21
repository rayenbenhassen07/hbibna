<?php

$dbhost = "hbibnaerayen.mysql.db";
$dbuser = "hbibnaerayen";
$dbpass = "Rayenbenhassen12345";
$dbname = "hbibnaerayen";

if (!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname)){
    die("failed connect");
}

$prenom = $_POST['prenom'];
$nom = $_POST['nom'];
$email = $_POST['email'];
$tel = $_POST['tel'];
$message = $_POST['message'];
$product = $_POST['product'];
$prixx = $_POST['prixx'];

if (isset($_POST['submit'])){
    //echo $prenom . ' '.$nom.' '.$email.' '.$tel;
    $sql="INSERT INTO Commande(prenom,nom,email,tell,adresse,product,prixx) VALUES('$prenom','$nom','$email','$tel','$message','$product','$prixx')";
    mysqli_query($con,$sql);
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta https-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="discription" content="Achat et vente en ligne de t-shirts pour homme sur le site hbibna.">
    <meta name="keywords"    content="hbibna.com,hbibna,habibna,tunisia,shop,store,hbibna shop">
    <link rel="icon" href="../img/logosolo2.png">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@100;200;300;500;600;700&family=Passion+One:wght@400;700;900&display=swap" rel="stylesheet">
    
    <title>hbibna</title>
</head>
<body>
    <div class="loader"></div>

    
    <!--------------------------header------------------------------>
    <header class="hh-home" id="header">
        <div class="piranalogo">
            <a href="../index.html"><img src="../img/hbibnalogoo.png" width="20px" ></a>
        </div> 
        <ul class="navlist" type="none" id="navlist">
            <li><a href="index.html" id="home">Home</a></li>
            <li><a href="shop_all/shop_all_1.html" id="shop">Shop</a></li>
            <li><a href="#contact" id="contact">Contact</a></li>
        </ul>

        <div class="header-icons">
            <a><i class='bx bx-shopping-bag' id="shopping-bag"></i></a>
            <div class="menu-icons" >
                <a href="#"><i class='bx bx-menu' id="menu-icons"></i></i></a>
            </div>
        </div>
    </header>

    <!--------------------------confirmer------------------------------>
    <section class="feliall">
        <div class="feli">
            <div class="confirmer-img"><img src="../img/Confirmed.png"  alt=""></div>
            <div class="confirmer-text">Merci pour votre achat , <br><br>Commande a été bien <span>confirmer</span></div>
        </div>

        <div class="shop-title">
            <h1>Vous pourriez aussi aimer</h>
        </div>

        <div class="featured-contient">  
            <div class="box">
                <a href="../products/product1.html">
                <img src="../img/koujina/product1/homme.jpg" alt="">
                <!--<div class="mark">addidas</div>-->
                <h5 class="titlee-product">Rechaud a gaz</h5>  
                <div class="stars">
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                </div>
                <h6 class="product-pricee">49dt</h6>
                <div class="stock">en stock</div>
                
                <div class="shopping-btn">
                        <a ><i class='bx bx-shopping-bag add-cart'></i></a>
                </div></a>
                <!--<button class="acheter-btn">Plus de détails</button>-->
            </div>
        
            
            <div class="box">
                <a href="../products/product2.html">
                <img src="../img/koujina/product2/homme.jpg" alt="">
                <!--<div class="mark">addidas</div>-->
                <h5 class="titlee-product">Electric Lunch Box</h5>  
                <div class="stars">
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                </div>
                <h6 class="product-pricee">44dt</h6>
                <div class="stock">en stock</div>
        
                <div class="shopping-btn">
                        <a><i class='bx bx-shopping-bag add-cart'></i></a>
                </div></a>
                <!--<button class="acheter-btn">Plus de détails</button>-->
            </div>

        
            
        </div>

    </section>


    <!----------------------------Cart---------------------------->
    <div class="cart">
        <h3 class="cart-title">Your Cart</h3>
        <div class="cart-content">

        </div>
        <div class="total">
            <div class="total-title">Total :</div>
            
            <div class="total-price">0dt</div>
        </div>

        <a href="formulaire.html"><button type="buttom" class="btn-buy" >Acheter Maintenant</button></a>

        <i class='bx bx-x' id="close-cart"></i>
        
    </div>






    <!--------------------------Contact------------------------------>
    <section class="contact" id="contact">
        <div class="main-contact">
            <h5>Hbibna.com</h5>
            <h6>Social Media</h6>
            <div class="icons">
                <ul type="none">
                    <a href="https://www.facebook.com/rayen.benhassen.54/" target="_blank"><i class='bx bxl-facebook-square'></i></a>
                    <a href="https://twitter.com/RayenBenhassen" target="d"><i class='bx bxl-twitter'></i></i></a>
                    <a href="https://www.instagram.com/rayenbenhassen12/?hl=fr" target="_blank"><i class='bx bxl-instagram' ></i></i></a>
                </ul>

            </div>
        
        </div>

        <div class="main-contact">
            <h5>Contactez-nous</h5>
            <ul type="none">
                <li><a href="../page-information/contacter-nous.html" class="alli">Contactez nous</a></li>
                <li><a href="../page-information/aide-et-faq.html">Aide & FAQ</a></li>
                
            </ul>
        </div>

        <div class="main-contact">
            <h5>Termes et politiques</h5>
            <ul type="none">
                <li><a href="../page-information/conditions-utilisateur.html">Conditions d'utilisation</a></li>
                <li><a href="../page-information/retours-echanges.html">Retours & échanges</a></li>
                <li><a href="../page-information/politique-de-confidentialite.html">Politique de Confidentialité</a></li>
            </ul>
        </div>

        <div class="main-contact">
            <h5>A propos du magasin</h5>
            <ul type="none"> 
                <li><a href="../page-information/a-propos.html" class="alli">À propos</a></li>
                <li><a href="../page-information/methode-payement.html" class="alli">Méthodes de payement</a></li>
                <li><a href="../page-information/expedition-manutention.html" class="alli">Expedition et manutention</a></li>
            </ul>
        </div>

    </section>

    <div class="last-text">
        
        <p>Copyright © 2023 hbibna.com All rights reserved | this template is made with by rayen ben hassen</p>
    </div>

    

        <script src="../js/script.js"></script>
        <script src="../js/add-to-cart.js"></script>
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/shop.css">

        <?php
            echo '<script>';
            echo 'localStorage.clear();';

            echo 'const loader = document.querySelector(\'.loader\');';

            echo 'window.addEventListener("load", function() {';
            echo 'loader.style.display = "none";';
            echo '});';

            echo '</script>';
        ?>
    
            
      
        
        


</body>
</html>