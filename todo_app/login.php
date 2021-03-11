<?php
    require_once "app/util/autoloader.php";
    use app\Model\Model as Model;
    use app\util\HelperClasses\ValidateClass as validation;
    use app\util\HelperClasses\Auth as Auth;
    
    $tablemodel = new Model();
    $validation = new validation();

    $success_message = "";
    $error_message = "";

    session_start();

    if(Auth::loginStatus()) {
        header("Location: index");
        exit;
    }

    if(isset($_POST["logEmail"],$_POST["logPass"])){
        if(empty($_POST["logEmail"]) || empty($_POST["logPass"])){
            $error_message = "Please check one or more fields are blank.";
        }else{
            $email = $validation->filterEmail($_POST["logEmail"]);
            $pass = $validation->filterPass($_POST["logPass"]);
            if($email && $pass){
                if(Auth::authUser($tablemodel,$email,$pass)){
                    header("location:  index");
                    exit;
                }else{
                    $error_message = "Invalid email address or password.";
                }
            }else{
                if(!$email){
                    $error_message = "Invalid format of email address";
                }elseif(!$pass){
                    $error_message = "Password should contain, minimum eight characters, at least one uppercase letter, one lowercase letter, one number and one special character.";
                }
            }
        }
    }
    require_once "views/login.php";
?>