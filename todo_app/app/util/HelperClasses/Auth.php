<?php
    namespace app\util\HelperClasses;

    class Auth{

        static public function loginStatus(){
            if(isset($_SESSION["loggedin"]) && isset($_SESSION["userid"])){
                return $_SESSION["userid"];
            }else{
                return false;
            }
        }

        static public function authUser($model,$userEmail,$userPass){
            $getUser = $model->validateUser($userEmail,$userPass);
            if(count($getUser)>0){
                $_SESSION["loggedin"] = true;
                $_SESSION["userid"] = $getUser[0]["id"];
                $_SESSION["username"] = $getUser[0]["full_name"];
                return true;
                    
            }else{
                return false;
            }
        }

    }
?>