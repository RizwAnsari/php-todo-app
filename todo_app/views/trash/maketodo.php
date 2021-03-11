
<?php
    require_once "partials/header.php";
?>

        <div class="container mt-5">
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
            <h3>create your todo now<span><i class="fas fa-plus-circle"></i></span></h3>
            <form class="visibility" method="POST">
                <div class="d-flex flex-row">
                    <div class="flex-fill">
                        <input type="text" class="form-control formInput" id="todo" name="newtodo" placeholder="Type here to create your todo" required>    
                    </div>
                    <div>
                        <input type="submit" value="Create" class="form-control btn btn-primary formInput">
                    </div>
                </div>
            </form>
        </div>

        <div class='container'>
            <table class="table">
                <thead>
	                <tr>
                        <th class="table-dark">
                            Tasks
                        </th>
                        <th class="table-dark thwidth">
                            Created On
                        </th>
                        <th class="table-dark thwidth">
                            Actions
                        </th>
	                </tr>
                </thead>
                <tbody>
                        <?php
                            if(!empty($todoList)) { 
                                foreach($todoList as $row) {
                        ?>
                    <tr class="todoRow">
                        <td>
                            <?php  echo $row["tasks"]; ?>
                        </td>
                        <td>
                            <?php                            
                                // echo date('m/D/Y h:i:s A', strtotime ($row['crea_time'])); 
                                echo date('D-M-Y', strtotime ($row['crea_time'])); 
                            ?>
                        </td>
                        <td>
                            <form class="actionForm" onsubmit="return confirm('Do you really want to mark this todo task as completed?');" name="formcontact1" action="index.php" method="POST">       
                                <button class='btn btn-success btn-sm' value='<?php echo $row["id"]?>' name='completedTodoId'>
                                    <i class='fas fa-check-square'></i>
                                </button> 
                            </form>
                            <form class="actionForm" onsubmit="return confirm('Do you really want to remove this todo task?');" action="index.php" method="POST">
                                <button class='btn btn-danger btn-sm' value='<?php echo $row["id"]?>' name='removedTodoId'>
                                    <i class='fas fa-trash-alt'></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                        <?php
                            }
                        }
                        ?>
                </tbody>
            </table>
        </div>
</div>
<?php
    require_once "partials/footer.php";
?>