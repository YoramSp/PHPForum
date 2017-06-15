<?php

class database
{
    private static $conn;

    public function __construct()
    {
        $dbHost = 'localhost';
        $database = 'forum';
        $user = 'Test';
        $password = 'test';

        try {
            self::$conn = new PDO("mysql:host=$dbHost;dbname=$database",$user, $password);
            // set the PDO error mode to exception
            self::$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//            Testing for conncection:
//            echo "connection succesfull";
        }
        catch(PDOException $e)
        {
            echo "Connection failed: " . $e->getMessage();
        }
    }

    public static function execute($query){
        $select = self::$conn->prepare($query);
        $select->execute();
        return $select->fetchALL();
    }

    public static function execute_no_fetch($query){
        $select = self::$conn->prepare($query);
        $select->execute();

    }

    public static function user($id){
        return self::execute("SELECT * FROM users WHERE id = '$id'");
    }
}