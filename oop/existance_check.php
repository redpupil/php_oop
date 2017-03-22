<?php 
include 'inc/header.php'; 
include './existance_check_1.php'; 
?>
<h2>Topics: Project List</h2>
<div class="content">
    <div class="topics">


    <?php
    //Check class   
    if (class_exists("Student")) {
        
        $st = new Student();
        
        //Check method
        if (method_exists($st, 'describessssss!')) {
            $st->describe();
        } else {
            echo "Method not found!";
        }
        
        
    } else {
        echo "Class not found!";
    }
        
        
        
    ?>
    </div>
</div>
<?php include 'inc/footer.php'; ?>