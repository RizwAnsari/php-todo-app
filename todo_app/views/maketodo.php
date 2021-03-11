
<?php
    require_once "partials/header.php";
?>                      
        <div class="container mt-3">
            <h3 class="lead">create your todo now<span><i class="fas fa-plus-circle plus"></i></span></h3>
            <form class="visibility" method="POST" action="index.php">
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
            <div class="container-fluid">
            <div class="row mb-4">
                <?php
                    if(!empty($todoList)) { 
                        foreach($todoList as $row) {
                ?>
                <div class="col-sm-6 col-md-4 col-xxl-2 pop-up">
                    <div class="date">
                    <?php                            
                        echo date('D-M-Y h:i:s A', strtotime ($row['crea_time'])); 
                    ?>
                    </div>
                    <div class="actions">
                        <form class="actionForm" onsubmit="return confirm('Do you really want to mark this todo task as completed?');" name="formcontact1" action="index.php" method="POST">       
                            <button class='btn btn-success btn-sm actionButton' value='<?php echo $row["id"]?>' name='completedTodoId'>
                                <i class='fas fa-check-square'></i>
                            </button> 
                        </form>
                        <form class="actionForm" onsubmit="return confirm('Do you really want to remove this todo task?');" action="index.php" method="POST">
                            <button class='btn btn-danger btn-sm actionButton' value='<?php echo $row["id"]?>' name='removedTodoId'>
                                <i class='fas fa-trash-alt'></i>
                            </button>
                        </form>
                    </div>
                    <div class="todo">
                        <?php  echo $row["tasks"]; ?>
                    </div>
                </div>
                <?php 
                    }
                }
                ?>
            </div>
            </div>
        </div>
</div>
<?php
    require_once "partials/footer.php";
?>