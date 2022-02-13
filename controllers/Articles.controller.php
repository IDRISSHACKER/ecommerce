<?php
require "../controllers/utils/upload.php";

$error = 0;
$msgError = "";
$success = 0;

class ArticleController extends Articles{

    public static function uploadArticle(){
        global $error, $msgError, $success;
        if(isset($_SESSION["userId"])){
        if(isset($_POST["upload"])){
            if(!empty($_POST["title"]) 
            AND !empty($_POST["prix"]) 
            AND !empty($_POST["qtt"]) 
            AND !empty($_POST["desc"])
            ){
                $file = $_FILES["img"];
                $upload = uploadFile::upload($file);
                
                if($upload){
                    
                    $title = htmlspecialchars($_POST["title"]);
                    $prix  = htmlspecialchars($_POST["prix"]);
                    $qtt   = htmlspecialchars($_POST["qtt"]);
                    $img   = $upload;
                    $desc  = htmlspecialchars($_POST["desc"]);

                   
                    
                    if(self::setArticle($title, $prix, $qtt, $desc, $img)){
                    $success = 1;
                    }else{
                        $error = 1;
                        $msgError = "Erreur lors de la mise en ligne de l'article";
                    }
                }else{
                    $error = 1;
                    $msgError = "Veillez choisir un fichier image avec une taille inferieur à 3mo";
                }
                
            }else{
                $error = 1;
                $msgError = "Veillez remplir tous les champs";
            }
        }
    }else{
            header("Location: index.php");
        }
        
    }
}