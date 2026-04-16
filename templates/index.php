<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Saira:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:opsz,wght@12..96,200..800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Saira:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../assets/style/indexStyle.css">
    <link rel="stylesheet" href="../assets/style/navbar.css">
</head> 
<body>
<?php require("navbar.php"); ?>

    <!-- partie slider d'image  -->

    <main>
        <div class="text-container">
            <div class="text-part">
                <h1>To travel is to live.</h1>
                <p>Travel makes one modest. You see what a tiny place you occupy in the world.</p>
            </div>
            <div class="button">
                <a href="interfaceSignIn.php">Join Us</a>
            </div>
        </div>
        <div class="sliderContainer">
            <figure>
                    <img src="../assets/Images/imageMain/img1.jpeg"  alt="">
                    <img src="../assets/Images/imageMain/img2.jpeg"  alt="">
                    <img src="../assets/Images/imageMain/img7.jpg"  alt="">
                    <img src="../assets/Images/imageMain/img4.jpeg" alt="">
                    <img src="../assets/Images/imageMain/img5.jpeg" alt="">
                    <img src="../assets/Images/imageMain/img6.jpeg" alt="">
                    <img src="../assets/Images/imageMain/img8.jpg" alt="">
                    <img src="../assets/Images/imageMain/img9.avif" alt="">
                    <img src="../assets/Images/imageMain/img10.jpg" alt="">
                    <img src="../assets/Images/imageMain/img14.jpg" alt="">
                    <img src="../assets/Images/imageMain/img1.jpeg"  alt="">
            </figure>
            <span class="overlay"></span>
            <span class="overlay2"></span>
        </div>
    </main>


    <!-- end of main  -->

    <!-- start of after main  -->
    <div class="feat">

         <div class="textGeneral">
             <p>Core Features</p>
             <p>Find <span>Travel Perfection</span></p>
             <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum vero numquam tenetur perspiciatis, amet magnam aperiam autem unde excepturi quo, alias expedita ut temporibus exercitationem dolore at beatae rerum consequuntur.</p>
 
         </div>
        <div class="featureContainer">
        <div class="featureCardContainer">

            <div class="featureCard">
                <span></span>
                <i class="fa-solid fa-map-location-dot"></i>
                <h3>Choose Your Destination</h3>
                <p>Select from hundreds of amazing destinations worldwide, tailored to your travel style and budget.</p>
                <p>250+ Destinations</p>
            </div>

            <div class="featureCard">
                <span></span>
                <i class="fa-solid fa-calendar-check"></i>
                <h3>Book Your Trip Easily</h3>
                <p>Simple and fast booking process with flexible dates and secure online payment options.</p>
                <p>500+ Bookings</p>
            </div>

            <div class="featureCard">
                <span></span>
                <i class="fa-solid fa-headset"></i>
                <h3>24/7 Customer Support</h3>
                <p>Our travel experts are available anytime to assist you before, during, and after your trip.</p>
                <p>Rated 4.9/5</p>
                <span></span>
            </div>

            <div class="featureCard">
                <span></span>
                <i class="fa-solid fa-star"></i>
                <h3>Best Price Guarantee</h3>
                <p>Enjoy top-quality experiences at competitive prices with exclusive deals and discounts.</p>
                <p>Best Deals</p>
            </div>

        </div>
    </div>
        

        
    </div>
    <!-- start of discovery part  -->
    <div class="discovery">
        <div class="discoveryContainer">
            <div class="discoveryText">
                <div>

                    <h1>Explore a different way to travel</h1>
                    <p>Discover new cultures and have a wonderful rest with Backpack Story! Select the country you’d like to visit and provide our agents with estimated time – they’ll find and offer the most suitable tours and hotels.</p>
                    <p>During our work we organized countless journeys for our clients. We started as a small tour bureau, and soon we expanded our offers list. Today we have valuable experience travelling and we can advise the most stunning resorts, cities and countries to visit!</p>
                    <img src="../assets/Images/imageMain/signature.jpg" alt="">
                </div>
            </div>
            <div class="discoveryImg">
                <img src="../assets/Images/Project developpement web/Swisse/touristische_b04.jpg" alt="">
                <img src="../assets/Images/Project developpement web/Swisse/68f8c6b3eba00.jpg" alt="">
            </div>
        </div>

    </div>


    <!-- discovery part 2  -->
    <div class="discovery2">
        <div class="discoveryContainer2">
            <div class="discoveryImg2">
            </div>
            <div class="discoveryText2">
                <div>
                    <p>Travel early and travel often. Live abroad, if you can. Understand cultures other than your own. As your understanding of other cultures increases, your understanding of yourself and your own culture will increase exponentially. "</p>
                    <p>a good traveler has no fixed plans , and is not intent on arriving</p>
                </div>
            </div>
        </div>

    </div>



    <!-- end of discorery part -->





<!-- start of the part that has a background mountain -->
        <div class="bgMountain">
            <span></span>
            <div class="bgMountainText">
                <p>Buy a Tour Without</p>
                <h1>Leaving Your Home</h1>
                <p>Using our website, you can easily find and book any tour you want. Mobile users will definitely enjoy our app available on all devices.</p>
                <button><a href="offeres.php">Book Now</a></button>
            </div>
        </div>
<!-- end of the part that has a background mountain -->


    <!-- start of top destination  -->


    <div class="topDestinationContainer">
        <div class="textGeneral topDestText">
            <p>Top Destination</p>
            <p>Explore <span>Top Destination</span></p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum vero numquam tenetur perspiciatis, amet magnam aperiam autem unde excepturi quo, alias expedita ut temporibus exercitationem dolore at beatae rerum consequuntur.</p>
        </div>
        <div class="destGrid">
            <div class="one">
                
                <img src="../assets/Images/imageMain/image3.jpg" class="bg" alt="">
                <span class="gridLayer"></span>
                <div class="place">
                    <h3>italy</h3>
                    <h2>Caspian Valley</h2>
                </div>
                <div class="nbre">18 Tours</div>
            </div>
            <div class="two">
                
                <img src="../assets/Images/imageMain/london.webp" class="bg" alt="">
                <span class="gridLayer"></span>
                <div class="place">
                    <h3>England</h3>
                    <h2>London</h2>
                </div>
                <div class="nbre">15 Tours</div>
            </div>
            <div class="three">
                
                <img src="../assets/Images/imageMain/russia.jpg" class="bg" alt="">
                <span class="gridLayer"></span>
                <div class="place">
                    <h3>Moscow</h3>
                    <h2>RUSSIA</h2>
                </div>
                <div class="nbre">18 Tours</div>
            </div>
            <div class="four">
                
                <img src="../assets/Images/imageMain/florida.jpg" class="bg" alt="">
                <span class="gridLayer"></span>
                <div class="place">
                    <h3>Florida</h3>
                    <h2>America</h2>
                </div>
                <div class="nbre">18 Tours</div>
            </div>
        </div>
    </div>


    <!-- end of destination  -->
    
         <!-- start of collaboration part  -->
    <div class="collaboration">
        <!-- <div class="text">
            <h2>Our Partners</h2>
        </div> -->
        <div class="carousel">
            <div class="groupe">
                <div class="card">
                    <img src="../assets/Images/Logo/Air-Canada-Logo.png" alt="">
                </div>
                <div class="card">
                    <img src="../assets/Images/Logo/Air_France_Logo.svg.png" alt="">
                </div>
                <div class="card">
                    <img src="../assets/Images/Logo/British_Airways-Logo.wine.png" alt="">
                </div>
                <div class="card">
                    <img src="../assets/Images/Logo/Turkish_Airlines_logo_2019_compact.svg.png" alt="">
                </div>
                <div class="card">
                    <img src="../assets/Images/Logo/Tunisair_(logo).svg" alt="">
                </div>
                <div class="card">
                    <img src="../assets/Images/Logo/Qatar_Airways_logo.svg.png" alt="">
                </div>
                <div class="card">
                    <img src="../assets/Images/Logo/Qantas-Logo.png" alt="">
                </div>
                <div class="card">
                    <img src="../assets/Images/Logo/Japan-Airlines-logo.webp" alt="">
                </div>

            </div>
            <div class="groupe">
                <div class="card">
                    <img src="../assets/Images/Logo/Air-Canada-Logo.png" alt="">
                </div>
                <div class="card">
                    <img src="../assets/Images/Logo/Air_France_Logo.svg.png" alt="">
                </div>
                <div class="card">
                    <img src="../assets/Images/Logo/British_Airways-Logo.wine.png" alt="">
                </div>
                <div class="card">
                    <img src="../assets/Images/Logo/Turkish_Airlines_logo_2019_compact.svg.png" alt="">
                </div>
                <div class="card">
                    <img src="../assets/Images/Logo/Tunisair_(logo).svg" alt="">
                </div>
                <div class="card">
                    <img src="../assets/Images/Logo/Qatar_Airways_logo.svg.png" alt="">
                </div>
                <div class="card">
                    <img src="../assets/Images/Logo/Qantas-Logo.png" alt="">
                </div>
                <div class="card">
                    <img src="../assets/Images/Logo/Japan-Airlines-logo.webp" alt="">
                </div>

            </div>

        </div>
    </div>
<!-- end of collaboration part  -->



    <!-- start of best packs part  -->
    <div class="packContainer">
        <div class="textGeneral topDestText">
            <!-- <p>Top Destination</p> -->
             <p></p>
            <p>Our <span>Best Tours</span></p>
            <p>Discovery Tour provides a variety of great tours to travelers throughout the world. We offer top deals at affordable prices and we can create the most unforgettable holiday for you!</p>
        </div>

        <div class="packCardBigContainer">
            <div class="packCardContainer">

                <div class="packCard">
                    <div class="packImage">
                        <img src="https://images.unsplash.com/photo-1534447677768-be436bb09401" alt="">
                        <p class="discount">15% Off</p>
                    </div>
                    <div class="packText">
                        <h2>New York City Escape</h2>
                        <p class="price">$1,850</p>
                        <p>Experience the vibrant life of NYC with guided tours,shopping,and iconic landmarks.</p>
                        <ul>
                            <li>4.8 Rating</li>
                            <li>Free Cancellation</li>
                        </ul>
                        <hr>
                        <div>
                            <div class="location">
                                <i class="fa-solid fa-location-dot"></i>
                                <span>New York, USA</span>
                            </div>
                            <div class="time">
                                <i class="fa-regular fa-clock"></i>
                                <span>7 Days - 6 Nights</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="packCard">
                    <div class="packImage">
                        <img src="https://images.unsplash.com/photo-1502602898657-3e91760cbb34" alt="">
                        <p class="discount">10% Off</p>
                    </div>
                    <div class="packText">
                        <h2>Paris Romantic Getaway</h2>
                        <p class="price">$2,200</p>
                        <p>Enjoy a romantic escape in Paris with guided tours and fine dining.</p>
                        <ul>
                            <li>5.0 Rating</li>
                            <li>Breakfast Included</li>
                        </ul>
                        <hr>
                        <div>
                            <div class="location">
                                <i class="fa-solid fa-location-dot"></i>
                                <span>Paris, France</span>
                            </div>
                            <div class="time">
                                <i class="fa-regular fa-clock"></i>
                                <span>6 Days - 5 Nights</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="packCard">
                    <div class="packImage">
                        <img src="https://images.unsplash.com/photo-1512453979798-5ea266f8880c" alt="">
                        <p class="discount">12% Off</p>
                    </div>
                    <div class="packText">
                        <h2>Dubai Luxury Adventure</h2>
                        <p class="price">$2,500</p>
                        <p>Discover Dubai with desert safari and luxury experiences.</p>
                        <ul>
                            <li>4.7 Rating</li>
                            <li>All Inclusive</li>
                        </ul>
                        <hr>
                        <div>
                            <div class="location">
                                <i class="fa-solid fa-location-dot"></i>
                                <span>Dubai, UAE</span>
                            </div>
                            <div class="time">
                                <i class="fa-regular fa-clock"></i>
                                <span>5 Days - 4 Nights</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="packCard">
                    <div class="packImage">
                        <img src="https://images.unsplash.com/photo-1507525428034-b723cf961d3e" alt="">
                        <p class="discount">18% Off</p>
                    </div>
                    <div class="packText">
                        <h2>Bali Tropical Retreat</h2>
                        <p class="price">$1,600</p>
                        <p>Relax in Bali’s beaches with spa and nature tours.</p>
                        <ul>
                            <li>4.9 Rating</li>
                            <li>Free Airport Pickup</li>
                        </ul>
                        <hr>
                        <div>
                            <div class="location">
                                <i class="fa-solid fa-location-dot"></i>
                                <span>Bali, Indonesia</span>
                            </div>
                            <div class="time">
                                <i class="fa-regular fa-clock"></i>
                                <span>8 Days - 7 Nights</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="packCard">
                    <div class="packImage">
                        <img src="https://images.unsplash.com/photo-1529260830199-42c24126f198" alt="">
                        <p class="discount">14% Off</p>
                    </div>
                    <div class="packText">
                        <h2>Rome Historical Tour</h2>
                        <p class="price">$1,900</p>
                        <p>Explore Rome’s history and ancient landmarks.</p>
                        <ul>
                            <li>4.6 Rating</li>
                            <li>Guide Included</li>
                        </ul>
                        <hr>
                        <div>
                            <div class="location">
                                <i class="fa-solid fa-location-dot"></i>
                                <span>Rome, Italy</span>
                            </div>
                            <div class="time">
                                <i class="fa-regular fa-clock"></i>
                                <span>7 Days - 6 Nights</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="packCard">
                    <div class="packImage">
                        <img src="https://images.unsplash.com/photo-1506744038136-46273834b3fb" alt="">
                        <p class="discount">20% Off</p>
                    </div>
                    <div class="packText">
                        <h2>Maldives Honeymoon</h2>
                        <p class="price">$3,200</p>
                        <p>Luxury villas, crystal waters, and unforgettable sunsets.</p>
                        <ul>
                            <li>5.0 Rating</li>
                            <li>All Inclusive</li>
                        </ul>
                        <hr>
                        <div>
                            <div class="location">
                                <i class="fa-solid fa-location-dot"></i>
                                <span>Maldives</span>
                            </div>
                            <div class="time">
                                <i class="fa-regular fa-clock"></i>
                                <span>6 Days - 5 Nights</span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    






    </div>
</div>
    </div>
   <!-- end of best packs part  -->
    <!-- end of this part  -->




    <!-- start of bondroll  -->
    <div class="bondroll">
        <div class="bondrollContainer">
            <div class="bondrollCard">
                <i class="fa-solid fa-house-flag"></i>
                <h3>20,000 + Properties</h3>
                <p>Contrary to popular belief lorem test</p>
            </div>
            <div class="bondrollCard">
                <i class="fa-solid fa-money-check-dollar"></i>
                <h3>Trust and Safety</h3>
                <p>Contrary to popular belief lorem test</p>
            </div>
            <div class="bondrollCard">
                <i class="fa-solid fa-gift"></i>
                <h3>Best Prices Guarantee</h3>
                <p>Contrary to popular belief lorem test</p>
            </div>
        </div>
    </div>

    <!-- end of bondroll  -->




















    <footer>
        <div class="footerOne">
            ©2022 Copyright Reserved 
        </div>
        <hr>
        <div class="footerTwo">Designed by Finest Web Geek</div>
    </footer>


    <script src="script.js"></script>
</body>
</html>
