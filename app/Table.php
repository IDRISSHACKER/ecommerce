<?php
require "App.php";

class Table
{

    public static function fetch($tatement, $one = false)
    {

        $request = App::bdd()->bdd()->query($tatement);

        if ($one) {
            return $request->fetch();
        } else {
            return $request->fetchAll();
        }
    }

    public static function save($tatement, $params = [])
    {

        $request = App::bdd()->bdd()->prepare($tatement);
        return $request->execute($params);
    }

    public static function prepare($tatement, $params = [], $one = true)
    {

        $request = App::bdd()->bdd()->prepare($tatement);
        $request->execute($params);

        return $one ? $request->fetch() : $request->fetchAll();
    }
}
