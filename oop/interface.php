<?php include 'inc/header.php'; ?>
<h2>Topics: Project List</h2>
<div class="content">
    <div class="topics">


    <?php
        
        //Declare interface
        interface School {
            //Declare function without body
            public function mySchool(); 
                
        }
        //Another interface
        interface College {
            
            public function myCollege(); 
                
        }
        //Another interface
        interface Varsity {
            public function myVarsity();
        }
        
        
        //implements multiple interface in one class
        class Teacher implements School, College, Varsity{
            
            public function __construct() {
                $this->mySchool();
                $this->myCollege();
                $this->myVarsity();
            }
            
            //Override function
            public function mySchool() {
                echo 'I am a school teacher<br/>';
            }
            //Override function
            public function myCollege(){
                echo 'I am a college teacher<br/>';
            }
            //Override function
            public function myVarsity(){
                echo 'I am a varsity teacher<br/>';
            }
        }
        
        
        //implements multiple interface in one class
        class Girl implements School, College, Varsity{
            
            public function __construct() {
                $this->mySchool();
                $this->myCollege();
                $this->myVarsity();
            }
            //Override function
            public function mySchool() {
                echo 'I am a school girl<br/>';
            }
            //Override function
            public function myCollege(){
                echo 'I am a college girl<br/>';
            }
            //Override function
            public function myVarsity(){
                echo 'I am a varsity girl';
            }
        }
        
        
        //Not allowed to create object of interface
        $teacher = new Teacher();
        $student = new Cleaner();
    ?>
    </div>
</div>
<?php include 'inc/footer.php'; ?>