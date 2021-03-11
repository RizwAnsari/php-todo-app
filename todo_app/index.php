<?php
    date_default_timezone_set('Asia/Kolkata');
    require_once "app/util/autoloader.php";
    use app\Model\Model as Model;
    use app\util\HelperClasses\ValidateClass as validation;
    use app\util\HelperClasses\Auth as Auth;

    $tablemodel = new Model();
    $validation = new validation();
    session_start();
    $success_message = "";
    $error_message = "";
    if(isset($_POST["newtodo"])){
        if(empty($_POST["newtodo"])){
            $error_message = "Please type your todo task.";
        }else{
            $task = $validation->filterTodoInput($_POST["newtodo"]);
            if($task){
                $insertid = $tablemodel->makeTodo($task);
                if($insertid){
                    $success_message = "You created Your todo task successfully.";
                }else{
                    $error_message = "You failed to create your todo task.";
                }
            }else{
                $error_message = "Only whitespaces are not allowed.";   
            }
        }
    }

    if(isset($_POST["removedTodoId"])){
        $removedTodoId = $_POST["removedTodoId"];
        $removedTodo = $tablemodel->removeTodo($removedTodoId);
        if($removedTodo){
            $success_message = "You removed your todo task successfully.";
        }else{
            $error_message = "You failed to remove your todo task.";
        }
    }

    if(isset($_POST["completedTodoId"])){

        $completedTodoId = $_POST["completedTodoId"];
        $completedTodo = $tablemodel->statusTodo($completedTodoId);
        if($completedTodo){
            $success_message = "You marked your todo task as completed successfully.";
        }else{
            $error_message = "You failed to mark your todo task as completed.";
        }
    }

   $todoList = $tablemodel->getTodo();
    
    if(!isset($_SESSION["loggedin"])){
        header("location: login.php");
    }

   require_once "./views/maketodo.php";
?>