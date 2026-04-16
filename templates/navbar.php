<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../assets/style/navbar.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body>


    <header>
        <!-- partie fou9aneya  -->
        <div class="partOne container-block">
            <div class="logo">
                <img src="../assets/Images/logo.jpeg" alt="">
                <p>WorldLink <span>Travel</span></p>
            </div>
            <div class="partieTel">
                <i class="fa-solid fa-phone"></i>
                <div class="text">
                    <p>+216 52 760 246</p>
                    <p>+216 50 559 320</p>
                </div>
            </div>
            <div class="partieLocalisation">
                <i class="fa-solid fa-location-dot"></i>
                <div class="text">
                    <p>2130 INSAT centre urbain</p>
                    <p>BEN AROUS, CA 94117-1080</p>
                </div>
            </div>
            <div class="button">
                <a href="interfaceSignUp.php">Find your tour</a>
            </div>
        </div>

    </header>
    <!-- partie loutaneya  -->
    <div class="partTwo">
        <ul>
            <?php if(isset($_SESSION['role']) && $_SESSION['role']=="entreprise") : ?>
                <li><a href="adminPanel.php" class="admin">Admin's Panel</a></li>
            <?php endif; ?>
            <li><a href="index.php">Home</a></li>
            <li><a href="offeres.php">Our Offers</a></li>
            <li><a href="ClientReview.php">Avis Clients</a></li>
            <li><a href="destination.php">Destination</a></li>
            <li><a href="historique.php">Historique</a></li>
            <li class="last"><a href="contactus.php" >Contact</a></li>
        </ul>
    </div>






</body>
</html>