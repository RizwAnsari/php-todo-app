<?php
    namespace app\util\HelperClasses;

    class ValidateClass{
        
        public function filterTodoInput($newTodo){
            $newTodo = filter_var(trim($newTodo), FILTER_SANITIZE_STRING);
            if($newTodo){
                return $newTodo;
            } else{
                return false;
            }
        } 
        
        public function filterUser($user){
            $user = filter_var(trim($user),FILTER_SANITIZE_STRING);
            if(filter_var($user,FILTER_VALIDATE_REGEXP,array("options"=>array("regexp"=>"/^[A-Z]+$/i")))){
                return $user;
            }else{
                return false;
            }
        }

        public function filterEmail($email){
            $email = filter_var(trim($email), FILTER_SANITIZE_EMAIL);
            if(filter_var($email,FILTER_VALIDATE_EMAIL)){
                return $email;
            }else{
                return false;
            }
        }

        public function filterPass($pass){
            $pass = filter_var(trim($pass), FILTER_SANITIZE_STRING);
            if(filter_var($pass,FILTER_VALIDATE_REGEXP,array("options"=>array("regexp"=>"^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$^")))){
                return $pass;
            }else{
                return false;
            }
        }

    }
?>