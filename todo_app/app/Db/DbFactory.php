<?php
namespace app\Db;
use app\util\Constants;

    class DbFactory{

        public static $db1;
       
        static public function getDb1(){
            if(self::$db1 == null)
                self::$db1 = new DbUtil(Constants::HOST, Constants::USERNAME, Constants::PASSWORD, Constants::DATABASE);
                return self::$db1;
        }   
    }
?>