<?php

class Database
{
    private static $dbHost = "db5000282806.hosting-data.io";
    private static $dbName = "dbs276040";
    private static $dbUsername = "dbu73701";
    private static $dbUserpassword = "Obernai67210+";
    
    private static $connection = null;
    
    public static function connect()
    {
        if(self::$connection == null)
        {
            try
            {
              self::$connection = new PDO("mysql:host=" . self::$dbHost . ";dbname=" . self::$dbName , self::$dbUsername, self::$dbUserpassword);
            }
            catch(PDOException $e)
            {
                die($e->getMessage());
            }
        }
        return self::$connection;
    }
    
    public static function disconnect()
    {
        self::$connection = null;
    }

}
?>
