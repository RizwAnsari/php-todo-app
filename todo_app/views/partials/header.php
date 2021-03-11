<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
        <link rel="stylesheet" href="./assets/css/style.css?v=1.0.2">
        <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    </head>
    <body>
    <div class="container-fluid">
    <nav class="navbar navbar-expand-md navbar-light bg-light p-0">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><i class="fas fa-clipboard-list"></i> To/\Do</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <!-- <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li> -->
            </ul>
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <?php if(isset($_SESSION["loggedin"])){?>
                <li class="nav-item">
                <li class="nav-item dropdown dropstart">
                    <a class="nav-link" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-user-circle fa-2x"></i>
                    </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li class="lead">
                                <?php echo ($_SESSION["username"]); ?>
                            </li>
                            <li>
                            <form action="logout.php" method="POST">       
                                <button class='nav-link active btn p-0' value='true' name='logout'>
                                    Logout
                                </button> 
                            </form>
                            </li>
                        </ul>
                    </li>
                </li>
                <?php }else{ ?>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="login">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="registration">Register</a>
                </li>
                <?php } ?>
            </ul>
            </div>
        </div>
    </nav>
</div>

<div class="container mt-3">
    <?php if(strlen($success_message)>0){ ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <?php 
                echo $success_message; 
            ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php } ?>
    <?php if(strlen($error_message)>0){ ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <?php echo $error_message; ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php } ?>
</div>