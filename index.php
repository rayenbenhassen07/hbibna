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

if (isset($_POST['submit'])){
    //echo $prenom . ' '.$nom.' '.$email.' '.$tel;
    $sql="INSERT INTO Commande(prenom,nom,email,tell,adresse) VALUES('$prenom','$nom','$email','$tel','$message')";
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

    <section class="feli">


    
    </section>






    <!--------------------------Contact------------------------------>
    <section class="contact" id="contact">
        <div class="main-contact">
            <h5>Shop24</h5>
            <h6>Let's Connect With Us</h6>
            <div class="icons">
                <ul type="none">
                    <a href="https://www.facebook.com/rayen.benhassen.54/" target="_blank"><i class='bx bxl-facebook-square'></i></a>
                    <a href="https://twitter.com/RayenBenhassen" target="d"><i class='bx bxl-twitter'></i></i></a>
                    <a href="https://www.instagram.com/rayenbenhassen12/?hl=fr" target="_blank"><i class='bx bxl-instagram' ></i></i></a>
                </ul>

            </div>
        
        </div>

        <div class="main-contact">
            <h5>Explore</h5>
            <ul type="none">
                <li><a href="#home" class="alli">Homme</a></li>
                <li><a href="featured">featured</a></li>
                <li><a href="new">New</a></li>
                <li><a href="contact">Contact</a></li>
            </ul>
        </div>

        <div class="main-contact">
            <h5>Our services</h5>
            <ul type="none">
                <li><a href="#home">Pricing</a></li>
                <li><a href="featured">Free Shipping</a></li>
                <li><a href="new">Gift Carts</a></li>
            </ul>
        </div>
        
        <div class="main-contact">
            <h5>Shopping</h5>
            <ul type="none"> 
                <li><a href="home" class="alli">Clothing Store</a></li>
                <li><a href="featured" class="alli">Trending Shoes</a></li>
                <li><a href="new" class="alli">Accessories</a></li>
                <li><a href="new" class="alli">Sale</a></li>
            </ul>
        </div>

    </section>
    <div class="last-text">
        <p>Copyright @ 2023 All rights reserved | this template is made with by rayen ben hassen</p>


    

        <script src="../js/script.js"></script>
        <script src="../js/add-to-cart.js"></script>
        <link rel="stylesheet" href="css/style.css">
        
        <link rel="stylesheet" href="css/formul.css">

        <script>
            const loader = document.querySelector('.loader');
        
            window.addEventListener("load", function(){
                loader.style.display="none";
            })
        </script>
        
        


</body>
</html>