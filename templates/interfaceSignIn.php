<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playwrite+NZ+Basic:wght@100..400&display=swap" rel="stylesheet">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&family=Playwrite+NZ+Basic:wght@100..400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="../assets/style/styleSignIn.css">
    

</head>
<body>

    
    <div class="background"></div>
    <div class="overlay"></div>
    <div class="container">
        <div class="one">
            <div class="up">
                <h3>World Link travel</h3>
            </div>
            <div class="down">
                <h2>Welcome!</h2>
                <h3>To our Website</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aspernatur possimus quibusdam nemo, illo aperiam velit reiciendis tempora voluptatum labore, ad ut consequatur recusandae asperiores unde, et nesciunt temporibus saepe. Unde.</p>
                <div class="list">
                    <div>
                        <ul>
                            <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>


        </div>




        <div class="two">
           <form action="../controller/signInController.php" method="POST">
                <div class="text">
                    <h3>Sign In</h3>
                </div>
                <div class="input">
                    <div class="nom">
                        <input type="text" name="nom" id="passport" placeholder="First Name" require autocomplete="off">
                        <input type="text" placeholder="Last Name" name="prenom" require autocomplete="off">
                    </div>
                    <div>
                        <input type="email" name="email" id="email" placeholder="email@example.com" require autocomplete="off">
                        <input type="Password" placeholder="Password" name="password" require autocomplete="off">
                        <input type="text" placeholder="example : +216 50559320" name="tel" require autocomplete="off">
                    </div>
                    


                    <div>

                    </div>
                </div>
                <div class="radio">
                    <div>
                        <input type="radio" id="utilisateur" value="client" name="role">
                        <label for="utilisateur">Client</label>
                    </div>
                    <div>
                        <input type="radio" id="entreprise" value="entreprise" name="role" >
                        <label for="entreprise">Entreprise</label>
                    </div>
                </div>
                <div class="butt">
                    <input type="submit" value="Sign In" id="signIn">
                    <div>
                        <p>Don't have an account?</p>
                        <a href="interfaceSignUp.php">Sign Up</a>
                    </div>
                </div>
                
           </form>
        </div>
    </div>
</body>
</html>