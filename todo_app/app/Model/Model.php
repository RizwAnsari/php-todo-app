<?php 
    namespace app\Model;
    use app\Db\DbFactory;
    
    class Model{
        
        public function makeTodo($task){
            $sqlQuery = "INSERT INTO todotasks ( tasks) VALUES (:tasks)";
            // $result = (new DbUtil())->insertQuery($sqlQuery, array(':tasks'=>$task));
            $result = DbFactory::getDb1()->insertQuery($sqlQuery, array(':tasks'=>$task));
            return $result;
        }

        public function getTodo(){
            $sqlQuery = "SELECT id,tasks,crea_time,is_active,task_status FROM todotasks where is_active = :is_active AND task_status = :task_status"; 
            $result =  DbFactory::getDb1()->selectQuery($sqlQuery, array(':is_active'=>1,':task_status'=>'open'));
            return $result;
        }   

        public function removeTodo($removedTodoId){
            $sqlQuery = "UPDATE todotasks SET is_active = 0 WHERE id=:removedTodoId"; 
            return $result = DbFactory::getDb1()->updateQuery($sqlQuery,array(":removedTodoId"=>$removedTodoId));
        }   

        public function statusTodo($completedTodoId){
            $sqlQuery = "UPDATE todotasks SET task_status = 'close' WHERE id=:completedTodoId"; 
            return $result = DbFactory::getDb1()->updateQuery($sqlQuery,array(":completedTodoId"=>$completedTodoId));
        }   

        public function makeUser($regUser,$regEmail,$regPass){
            $sqlQuery = "INSERT INTO users (u_name,email,pass,is_active) VALUES (:u_name,:email,:pass,:is_active)";
            $result = DbFactory::getDb1()->insertQuery($sqlQuery, array(':u_name'=>$regUser,':email'=>$regEmail,':pass'=>MD5($regPass),':is_active'=>1));
            return $result;
        }  

        public function validateUser($logEmail,$logPass=null){
            $sqlQuery = "SELECT id,u_name,email,pass FROM users where email = :email AND pass = :pass";
            $result = DbFactory::getDb1()->selectQuery($sqlQuery, array(':email'=>$logEmail,':pass'=>MD5($logPass)));
            return $result;
        }  

        public function existUser($email){
            $sqlQuery = "SELECT email FROM users where email = :email";
            $result = DbFactory::getDb1()->selectQuery($sqlQuery, array(':email'=>$email));
            return $result;
        }  
    }
?>