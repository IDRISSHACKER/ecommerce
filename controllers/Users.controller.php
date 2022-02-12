<?php

$error = false;
$errorMsg = "";
$success = false;

class UsersController extends Users{

    public static function login(){
        global $error, $errorMsg, $success;

        if(!isset($_SESSION["userId"])){
            if(isset($_POST["login"])){
                if(!empty($_POST["email"]) AND !empty($_POST["password"])){
                    $email = $_POST["email"];
                    $pass = $_POST["password"];

                    $user = self::getUser($email);
                    
                    if(count($user) > 0){

                        $dbemail = $user["email"];
                        $dbpass = $user["password"];
                        $userId = $user["id"];

                        if($pass === $dbpass){
                            $success = true;

                            $_SESSION["userId"] =  $userId;
                            $_SESSION["user"]   = $user;

                        }else{
                            $error = true;
                            $errorMsg = "Email ou mot de passe incorect :)";
                        }
                    }else{
                        $error = true;
                        $errorMsg = "Email ou mot de passe incorect :)";
                    }
                }
            }
        }else{
            header("Location: index.php");
        }


    }
}