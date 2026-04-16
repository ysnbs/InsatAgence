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
    <link rel="stylesheet" href="../assets/style/styleSignUp.css">
    
    <style>
        .butt p{
            font-size: 11px;
            padding-top: 1em;
            width: 55%;
            margin: auto;
        }
    </style>
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
           <form action="../controller/signUpController.php" method="post">
                <div class="text">
                    <h3>Reset Password</h3>
                </div>
                <div class="input">
                    <input type="text" name="email" id="passport" placeholder="examlpe@gmail.com" require>
                    <input type="Password" placeholder="example: +216 505559320" name="n° tel" require>
                    

                </div>
                <div class="butt">
                    <input type="submit" value="Send Verification Email" id="verifMail">
                    <p>You will recieve an email where you can reset your password and sign up again</p>
                </div>

                
           </form>
        </div>
    </div>
</body>
</html>