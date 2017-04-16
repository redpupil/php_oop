<?php include 'inc/header.php'; ?>
<h2>Topics: Object Iteration</h2>
<div class="content">
    <div class="topics">


    <?php

        class MyClass{
            
            public $var1 = 'value 1';
            public $var2 = 'value 2';
            public $var3 = 'value 3';
            
            protected $protected = 'protected var';
            private $private = 'private var';
            
            function iterateVisible() {
                echo "MyClass::iterateVisible:<br/>";
                foreach ($this as $key => $value) {
                    print "$key=>$value<br/>";
                }
            }
        
        }
        
        $class = new MyClass();
        
        foreach ($class as $key => $value) {
            print "$key => $value<br/>";
        }
        
        echo "<br/>";
        
        $class->iterateVisible();

    ?>
    </div>
</div>
<?php include 'inc/footer.php'; ?>