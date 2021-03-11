<?php 
    namespace app\Model;
    use app\Db\DbFactory;
    
    class Model{
        
        public function makeTodo($task,$userid){
            $sqlQuery = "INSERT INTO todotasks (tasks,userid) VALUES (:tasks,:userid)";
            // $result = (new DbUtil())->insertQuery($sqlQuery, array(':tasks'=>$task));
            $result = DbFactory::getDb1()->insertQuery($sqlQuery, array(':tasks'=>$task,':userid'=>$userid));
            return $result;
        }

        public function getTodo($userid){
            $sqlQuery = "SELECT * FROM todotasks where is_active = :is_active AND task_status = :task_status AND userid = :userid"; 
            $result =  DbFactory::getDb1()->selectQuery($sqlQuery, array(':is_active'=>1,':task_status'=>'open',':userid'=>$userid));
            return $result;
        }   

        public function removeTodo($removedTodoId,$userid){
            $sqlQuery = "UPDATE todotasks SET is_active = 0 WHERE id=:removedTodoId AND userid=:userid"; 
            return $result = DbFactory::getDb1()->updateQuery($sqlQuery,array(":removedTodoId"=>$removedTodoId,":userid"=>$userid));
        }   

        public function statusTodo($completedTodoId,$userid){
            $sqlQuery = "UPDATE todotasks SET task_status = 'close' WHERE id=:completedTodoId AND userid=:userid"; 
            return $result = DbFactory::getDb1()->updateQuery($sqlQuery,array(":completedTodoId"=>$completedTodoId,":userid"=>$userid));
        }   

        public function makeUser($regUser,$regEmail,$regPass){
            $sqlQuery = "INSERT INTO users (full_name,email,pass,is_active) VALUES (:full_name,:email,:pass,:is_active)";
            $result = DbFactory::getDb1()->insertQuery($sqlQuery, array(':full_name'=>$regUser,':email'=>$regEmail,':pass'=>MD5($regPass),':is_active'=>1));
            return $result;
        }  

        public function validateUser($logEmail,$logPass=null){
            $sqlQuery = "SELECT id,full_name,email,pass FROM users where email = :email AND pass = :pass";
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