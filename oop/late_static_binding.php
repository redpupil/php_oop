<?php include 'inc/header.php'; ?>
<h2>Topics: Late Static Binding</h2>
<div class="content">
    <div class="topics">


    <?php

        //Preferred method to load classes
        spl_autoload_register(function ($class_name) {
            
            include './autoloading/'.$class_name . '.php';
            
        });
        
        class ChildBind extends LateBinding {
            public static function testClass(){
                return __CLASS__;
            }
        }
        
        
        $late = new LateBinding();
        $late->frontEnd();
        
        
        $newChild = new ChildBind();
        $newChild->frontEnd();
    ?>
    </div>
</div>
<?php include 'inc/footer.php'; ?>