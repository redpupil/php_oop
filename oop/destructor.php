<?php include 'inc/header.php'; ?>
<h2>Topics: Project List</h2>
<div class="content">
    <div class="topics">


    <?php

        class Person {
            public $name;
            public $age;
            public $id;


            public function __construct($personName,$personAge) {
                $this->name = $personName;
                $this->age = $personAge;
            }        
            function setId($myId){
                $this->id = $myId;
            }
            
            public function __destruct() {
                if(!empty($this->id)){
                    echo 'Destructor function';
                    
                    //e.g. mysql_close();
                }
            }
            
        }
        
        $personOne = new Person("Abdul", "23");
        $personOne->setId(12);
        unset($personOne);
        

    ?>
    </div>
</div>
<?php include 'inc/footer.php'; ?>