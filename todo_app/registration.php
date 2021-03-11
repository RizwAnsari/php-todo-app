<?php   
    require_once "app/util/autoloader.php";
    use app\Model\Model as Model;
    use app\util\HelperClasses\ValidateClass as validation;
    $tablemodel = new Model();
    $validation = new validation();

    $success_message = "";
    $error_message = "";

    if(isset($_POST["regUser"],$_POST["regEmail"],$_POST["regPass"])){
            if(empty($_POST["regUser"]) || empty($_POST["regEmail"]) || empty($_POST["regPass"])){
                $error_message = "Please check one or more fields are blank.";
            }else{
                $user = $validation->filterUser($_POST["regUser"]);
                $email = $validation->filterEmail($_POST["regEmail"]);
                $pass = $validation->filterPass($_POST["regPass"]);
                if($user && $email && $pass){
                    if(empty($tablemodel->existUser($email))){
                        $insertid = $tablemodel->makeUser($user,$email,$pass);
                        if($insertid){
                            // $success_message = "You registered yourself successfully.";
                            header("location:login.php");
                            exit;
                        }else{
                            $error_message = "You failed to register yourself.";
                        }
                    }else{
                        $error_message = "This email address already exists.";
                    }
                }else{
                    if(!$user){
                        $error_message = "Name should contain only English upper and lower case alphabets.";
                    }elseif (!$email) {
                        $error_message = "Invalid format of email address";
                    }elseif(!$pass){
                        $error_message = "Password should contain, minimum eight characters, at least one uppercase letter, one lowercase letter, one number and one special character.";
                    }
                }
            }
        }
        require_once "views/registration.php";
?>