<?php
require "Table.php";

class Articles extends Table{

    public static function getArticles(){

        return self::fetch("SELECT * FROM article ORDER BY id DESC");
    }

    public static function getArticle($id){
        
        return self::fetch("SELECT * FROM article WHERE id = $id", true);
    }

    public static function setArticle($title, $price, $qtt, $desc, $img){
        return self::save("INSERT INTO article(titre, image, prix, qte, description) VALUES(?,?,?,?,?)",[$title, $img, $price, $qtt, $desc]);
    }
}