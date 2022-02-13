<?php

$error = false;
$errorMsg = "";
$success = false;

class UsersController extends Users
{

    public static function login()
    {
        global $error, $errorMsg, $success;

        if (!isset($_SESSION["userId"])) {
            if (isset($_POST["login"])) {
                if (!empty($_POST["email"]) and !empty($_POST["password"])) {
                    $email = htmlspecialchars($_POST["email"]);
                    $pass = $_POST["password"];

                    $user = self::getUser($email);

                    if ($user) {

                        $dbemail = $user["email"];
                        $dbpass = $user["password"];
                        $userId = $user["id"];

                        if (password_verify($pass, $dbpass)) {
                            $success = true;
                            header("Location: index.php");

                            $_SESSION["userId"] =  $userId;
                            $_SESSION["user"]   = $user;
                        } else {
                            $error = true;
                            $errorMsg = "Email ou mot de passe incorect :)";
                        }
                    } else {
                        $error = true;
                        $errorMsg = "Email ou mot de passe incorect :)";
                    }
                } else {
                    $error = true;
                    $errorMsg = "Veillez renseigner votre email & votre mot de passe :)";
                }
            }
        } else {
            header("Location: index.php");
        }
    }

    public static function signOut()
    {
        if (!isset($_SESSION["id"])) {

            unset($_SESSION["userId"]);
            unset($_SESSION["user"]);
            session_destroy();
        }
        header("Location: index.php");
    }
}
