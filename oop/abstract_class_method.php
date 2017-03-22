<?php include 'inc/header.php'; ?>
<h2>Topics: Project List</h2>
<div class="content">
    <div class="topics">


    <?php

        //Abstract Class
        abstract class Student{
            
            public $name;
            public $age;
            
            public function details() {
                echo $this->name." is ". $this->age." years old.<br/>";
            }
            
            //Abstract Method
            abstract public function School() ;
        }
        
        //Access abstract class
        class Boy extends Student{
            
            public function describe() {
                return parent::details()." and I am a college student. <br/>";
            }
            
            //Override abstract method
            public function School(){
                return "I like to play cricket";
            }
        }
        
        
        $studentOne = new Boy();
        $studentOne->name = "Kamal";
        $studentOne->age = "23";
        echo $studentOne->describe();
        echo $studentOne->School();

    ?>
    </div>
</div>
<?php include 'inc/footer.php'; ?>