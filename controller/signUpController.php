<?php
    session_start();
    require_once "../model/utilisateur.php";
    ini_set("display_errors",1);
    ini_set("display_startup_errors",1);
    error_reporting(E_ALL);
    $email = $_POST['email'];
    $password = $_POST['password'];
    if (isset($email) && isset($email)){
        $user = new utilisateur();
        if($user->existeUser($email,$password)){
            $user->remplirUserFromDB($email,$password);
            $_SESSION['username'] = $user->getUsername();
            $_SESSION['role'] = $user->getRole();
            header("Location: ../templates/index.php");
            exit();
        }else{
            header("Location: ../templates/interfaceSignUp.php?pb=true");
            exit();
        }
    }

?>