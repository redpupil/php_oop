<?php include 'inc/header.php'; ?>
<h2>Topics: Project List</h2>
<div class="content">
    <div class="topics">


    <?php

        class Person {
            public $name;
            public $age;
            
            public function __construct($personName,$personAge) {
                $this->name = $personName;
                $this->age = $personAge;
            }        
            function personDetails(){
                echo "Person name is {$this->name} and age is {$this->age}";
            }
            
        }
        
        $personOne = new Person("Abdul", "23");
        $personOne->personDetails();
        

    ?>
    </div>
</div>
<?php include 'inc/footer.php'; ?>