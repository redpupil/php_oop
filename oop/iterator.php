<?php include 'inc/header.php'; ?>
<h2>Topics: Project List</h2>
<div class="content">
    <div class="topics">


    <?php
    
    class Person{
        public $name = "Mark";
        public $age = "36";
        public $skill = "webentwickler";
        
        private $email = "webentwickler@gmail.com";//can be accessed in class. NOT outside this class
        protected  $password = "123";//accessed in class and sublcass. NOT outside this class
        
        
        public function iteratorInner() {
            echo "<hr/>";
            echo "Inside class<br/>";
            
            foreach ($this as $key => $value) {
                echo "<pre>". "$key => $value"."</pre>";
            }
        }
    }
    
    $personObj = new Person();
    foreach ($personObj as $key => $value) {
        
        echo "<pre>". "$key => $value"."</pre>";    
    }
    
    //Access all propertiy using object->method()
    $personObj->iteratorInner();
    
    ?>

    </div>
</div>
<?php include 'inc/footer.php'; ?>