<?php include 'inc/header.php'; ?>
<h2>Topics: Project List</h2>
<div class="content">
    <div class="topics">


    <?php
        
       
        //Preferred method to load classes
        spl_autoload_register(function ($class_name) {
            
            include './autoloading/'.$class_name . '.php';
            
        });

        
        
        //$webmaster = new Web();
        //$webmaster->framework()->cms(); // Chaining method
        
        $casio = new Calculation();
        echo "Result is: ".$casio->getValue(5,8)->getResult();
        
        

    ?>
    </div>
</div>
<?php include 'inc/footer.php'; ?>