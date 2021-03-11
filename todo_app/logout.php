<?php
    session_start();
    if(isset($_POST["logout"])){
        $logout = $_POST["logout"];
        if($logout=="true"){
            // session_unset();
            $_SESSION = array();
            session_destroy();
            // $success_message = "Successfully loged out."; 
            header("location: login.php");
            exit;
        }
        else{
            $error_message = "Failed to logout.";
        }
    }
?>