<?php

abstract class Connection
{       
    private static $conn;
    
    public static function getConn()
    {
        if (self::$conn === null) {
            self::$conn = new PDO('mysql: host=localhost; dbname=db_mvc2;', 'root', 'kiraFE22022006');
        }

        return self::$conn;
    }
}