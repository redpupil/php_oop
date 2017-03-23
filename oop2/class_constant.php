<?php include 'inc/header.php'; ?>
<h2>Topics: Project List</h2>
<div class="content">
    <div class="topics">


    <?php

        //define constant values on a per-class basis remaining the same and unchangeable.
        //visibility is public

        class MyClass{

            const CONSTANT = "constant value";

            function showConstant(){
                echo self::CONSTANT. '<br/>';
            }
        }

        echo MyClass::CONSTANT.'<br/>';

        $classname = "MyClass";

        echo $classname::CONSTANT.'<br/>';//as PHP 5.3.0

        $class = new MyClass();
        $class->showConstant();

        echo $class::CONSTANT.'<br/>'; //as PHP 5.3.0
    ?>
    </div>
</div>
<?php include 'inc/footer.php'; ?>