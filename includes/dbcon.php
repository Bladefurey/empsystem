<?php
class Database{
    private static $dbName="hrsystem";
    private static $dbHost="localhost";
    private static $dbUsername="root";
    private static $dbPassword="";
    private static $cont=null;
    public function __construct(){

    }
    public static function connect(){
        if (null==self::$cont){
            try{
                self::$cont = new PDO("mysqli:host=".self::$dbHost.";"."dbname=".self::$dbName,self::$dbUsername,self::$dbPassword);
            }
            catch(PDOException $e){
                die($e->getMessage());
            }
        }
        return self::$cont;
    }
    public static function disconnect(){
        self::$cont=null;
    }
}
?>