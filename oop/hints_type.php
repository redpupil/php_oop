<?php include 'inc/header.php'; ?>
<h2>Topics: Project List</h2>
<div class="content">
    <div class="topics">


    <?php
        
        //Preferred method to load classes
        spl_autoload_register(function ($class_name) {
            
            include './autoloading/'.$class_name . '.php';
            
        });

        $givehints = new Hints();
        $nums = array(
            array('Number one',10,10),
            array('Number two',20,20)
        );
        $givehints->getValue($nums);
        
        echo "<hr/>";
        echo "Object hints";
        $webobj = new Web();
        new PHP($webobj);
    ?>
    </div>
</div>
<?php include 'inc/footer.php'; ?>