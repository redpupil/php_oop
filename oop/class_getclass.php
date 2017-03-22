<?php include 'inc/header.php'; ?>
<h2>Topics: __CLASS__ and get_class</h2>
<div class="content">
    <div class="topics">


    <?php

        //Preferred method to load classes
        spl_autoload_register(function ($class_name) {
            
            include './autoloading/'.$class_name . '.php';
            
        });
        
        class Phpchild extends Getclass{
            
            public function cms() {

            echo 'Child class constant and class name : '.__CLASS__.'<br/>';
            echo "Child Class Function and class name : ". get_class($this)."<br/>";
            

            }
            public function ourtMethod() {
                parent::backEnd();
            }
        }
        
        $php = new Phpchild();
        $php->backEnd();
        echo '<hr/>';
        $php->cms();
        echo '<hr/>';
        $php->ourtMethod();
    ?>
    </div>
</div>
<?php include 'inc/footer.php'; ?>