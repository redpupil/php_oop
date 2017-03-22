<?php include 'inc/header.php'; ?>
<h2>Topics: Project List</h2>
<div class="content">
    <div class="topics">


    <?php

        function checkNum($number) {
            if ($number>1) {
                throw new Exception("value must be 1 or bellow");
            }
            return true;
        }
        
        try {
            checkNum(3);
            echo 'If you see this, the number is 1 or bellow';
            
        } 
        
        catch (Exception $exc) {
            echo 'Message: '.$exc->getMessage();
        }

    ?>
    </div>
</div>
<?php include 'inc/footer.php'; ?>