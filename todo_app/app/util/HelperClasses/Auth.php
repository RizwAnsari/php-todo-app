<?php
    namespace app\util\HelperClasses;

    class Auth{

        static public function authUser($model,$userEmail,$userPass){
            $getUser = $model->validateUser($userEmail,$userPass);
            if(count($getUser)>0){
                $_SESSION["loggedin"] = true;
                $_SESSION["userid"] = $getUser[0]["id"];
                $_SESSION["username"] = $getUser[0]["u_name"];
                // $success_message = "Successfully logged in.";
                // header("location:  index.php");
                // exit;
                return true;
                    
            }else{
                // return "Invalid email address or password";
                return false;
            }
        }
    }
?>