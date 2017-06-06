<?php include 'inc/header.php'; ?>
<h2>Topics: Project List</h2>
<div class="content">
    <div class="topics">


    <?php

        class Person{
            const NAME = "Md. Riazul Islam khan";
            public static $age = 30;//define static
        
        //static method
        public static function displayPerson() {
            echo "Full Name is: ".Person::NAME; 
            echo '<br/>Age is: '.self::$age;//access static property
            }
        }
        
        $per = new Person;
        $per->displayPerson();
        echo '<br/>';
        echo Person::displayPerson();//access static method

    ?>
    </div>
</div>
<?php include 'inc/footer.php'; ?>