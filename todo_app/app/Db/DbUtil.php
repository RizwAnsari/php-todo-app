<?php
    namespace app\Db;
    Class DbUtil {
        private $connection ;
            
            public function __construct($host, $username, $password, $database){

                try{  
                    // $this->connection = new PDO('mysql:host='.host.'; dbname='.database.';charset=utf8', username, password);
                    $this->connection =  new \PDO('mysql:host='.$host.'; dbname='.$database.';charset=utf8', $username,  $password);
                } catch(Exception $e){  
                    error_log($e->getMessage(), 3, "log/log.txt");
                }
            }

            public function insertQuery($query, $params = null){
                try{ 
                    if($this->connection){
                        $pdo_statement = $this->connection->prepare( $query );
                        $pdo_statement->execute($params);
                        return $pdo_statement ? $this->connection->lastInsertId() : false;
                    }
                } catch(Exception $e){
                    error_log($e->getMessage());
                }
                return false;
            }

            public function selectQuery($query,$params = null){

                try{ 
                    if($this->connection){
                        $pdo_statement = $this->connection->prepare( $query );
                        $pdo_statement->execute($params);
                        return $pdo_statement ? $pdo_statement->fetchAll() : false;
                    }
                } catch(Exception $e){
                    error_log($e->getMessage());
                }    
                return false;  
            }

            public function updateQuery($query,$params=null){
                try{ 
                    if($this->connection){
                        $pdo_statement = $this->connection->prepare( $query );
                        $pdo_statement->execute($params);
                        return $pdo_statement ? true : false;
                    }
                } catch(Exception $e){
                    error_log($e->getMessage());
                }
                return false; 
            }

            public function deleteQuery($query,$params=null){
                try{ 
                    if($this->connection){
                        $pdo_statement = $this->connection->prepare( $query );
                        $pdo_statement->execute($params);
                        return $pdo_statement ? true : false;
                    }

                } catch(Exception $e){
                    error_log($e->getMessage()); 
                }
                return false; 
            }
    }
?>