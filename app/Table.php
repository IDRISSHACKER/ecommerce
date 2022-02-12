<?php

class Table{

    private static function bdd(){
        return new PDO("mysql:host=localhost;dbname=ecommerce","root","root");
    }

    public static function fetch($tatement, $one = false){

        $request = self::bdd()->query($tatement);

        if($one){
            return $request->fetch();
        }else{
            return $request->fetchAll();
        }
    }

    public static function save($tatement, $params=[]){

        $request = self::bdd()->prepare($tatement);
        return $request->execute($params);
    }

}
