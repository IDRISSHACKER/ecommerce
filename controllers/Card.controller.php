<?php

require dirname(__DIR__) . "/app/Card.php";

class CardController extends Card
{

    public static function addCard()
    {
        if (!empty($_SESSION["userId"])) {
        } else {
            if (!empty($_GET["post"])) {
                $post = $_GET["post"];
                header("Location: index.php?view=login&redirection=$post");
            }
        }
    }
}
