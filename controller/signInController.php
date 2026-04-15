<?php 

    require_once "../model/utilisateur.php";
    $nom = $_POST['nom']; 
    $prenom = $_POST['prenom']; 
    $email = $_POST['email']; 
    $password = $_POST['password'];
    $tel = $_POST['tel'];
    $passport = $_POST['passport']; 


    if(isset($nom) && isset($prenom) && isset($email) && isset($password) && isset($tel) && isset($passport)){
        $user = new utilisateur();
        
    }
?>