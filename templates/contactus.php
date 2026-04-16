<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" href="../node_modules/bootstrap-icons/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../assets/style/navbar.css">
    <link rel="stylesheet" href="../assets/style/footer.css">
    <link rel="stylesheet" href="../assets/style/contactus2.css">
    
</head>
<body>
    <?php require "navbar.php" ?>
    <br>
    <div class="mainContainer">     
        <div class="firstPart">
            <div class="partie-fou9">
                <h1>Get In Touch</h1>
                <p>I'd like to hear from you!</p>
                <p>If you have any inquiries or just want to say hi , please use the contact From!</p>
            </div>

            <div class="partie-bas">
                <div>
                    <i class="bi bi-envelope"></i>
                    <a href="mailto:Societe@gmail.com">Societe@gmail.com</a>
                </div>
                <div>
                    <i class="bi bi-hand-thumbs-up"></i>
                    <ul>   
                        <li><i class="bi bi-facebook"></i></li>
                        <li><i class="bi bi-linkedin"></i></li>
                        <li><i class="bi bi-instagram"></i></li>
                        <li><i class="bi bi-twitter"></i></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="secondPart">
            <form action="../controller/contactUsController.php" method="POST" class="row g-3">
                <div class="col-md-6">
                    <label for="inputEmail4" class="form-label">First Name</label>
                    <input type="email" class="form-control" id="inputEmail4">
                </div>
                <div class="col-md-6">
                    <label for="inputPassword4" class="form-label">Last Name</label>
                    <input type="TEXT" class="form-control" >
                </div>
                <div class="col-12">
                    <label for="inputAddress" class="form-label">Email</label>
                    <input type="text" class="form-control" id="inputAddress" placeholder="email@example.com">
                </div>
                <div class="col-12">
                    <label for="inputAddress2" class="form-label">Message</label>
                    <textarea name="" id=""  class="form-control"></textarea>
                </div>
                
                <div class="col-12 lastElement">
                    <button type="submit" class="btn btn-primary">Send</button>
                </div>
            </form>

        </div>
    </div>
    <?php require "footer.php"; ?>
</body>
</html>