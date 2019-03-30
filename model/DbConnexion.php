<?php

abstract class DbConnexion
{
    protected static $_db;

    public function __construct()
    {
        try
        {
            $db = new PDO('mysql:host=localhost;dbname=forteroche', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
            self::$_db = $db;
        }
        catch(Exeption $e)
        {
            echo 'fail';
        }

    }
}
