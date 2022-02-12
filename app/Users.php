<?php
class Users extends Table{

    public static function getUser($email){

        return self::fetch("SELECT * FROM users", true);

    }
}