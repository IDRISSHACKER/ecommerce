<?php
class Users extends Table
{

    public static function getUser($user)
    {
        $re = self::prepare("SELECT * FROM users WHERE email = ?", [$user], true);
        return $re;
    }
}
