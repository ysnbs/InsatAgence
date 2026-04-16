<?php 
    
    session_start();
    ini_set("display_errors",1);
    ini_set("display_startup_errors",1);
    error_reporting(E_ALL);

    require_once "../model/utilisateur.php";
    $nom = $_POST['nom']; 
    $prenom = $_POST['prenom']; 
    $email = $_POST['email']; 
    $password = $_POST['password'];
    $tel = $_POST['tel'];
    $role = $_POST['role'];
    $username = $nom ."_" . $prenom;

    if(isset($nom) && isset($prenom) && isset($email) && isset($password) && isset($tel) && isset($role)){
        $user = new utilisateur($nom,$prenom,$email,$password, $tel,$role);
        echo "hello";
        if($user->existeUser($email,$password)){
            header("Location: ../templates/interfaceSignIn.php");
            exit();
        }else{
            echo $nom;
            $user->addUser($username,$email,$password,$tel,$role);
            $_SESSION["username"]= $username;
            $_SESSION["role"]= $role;
            header("Location: ../templates/index.php");
            exit();
    
        }
    }
?>