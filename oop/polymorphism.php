<?php include 'inc/header.php'; ?>
<h2>Polymorphism</h2>
<div class="content">
    <div class="topics">


    <?php
    /*When we start to extend classes and add functionality which wasn't there
     previously and even override existing methods, is called polymorphism.

     ==>Inheritance and overridden methods.     */
    
        class UserData {
            public $user;
            public $userId;
            
            public function __construct($userName, $userId) {
                $this->user = $userName;
                $this->userId = $userId;
                
            }
            
            public function display() {
                 echo "Username is {$this->user} and user id is {$this->userId}";
            }
            
        }
        
        class Admin extends UserData {
            //Admin class(child/subclass) inherits UserData Class(parent/superclass)
            public $level;
            
            public function display() {
                 echo "Username is {$this->user} and user id is {$this->userId} and previlege {$this->level}";
            }
        }
        
        $user = "Max";
        $id = "34";
        $ur = new UserData($user, $id);
        echo '<br/>';
        $ur->display();
        echo '<br/>';
        
        $user = "Admin";
        $id = "1";
        $admin = new Admin($user, $id);
        $admin->level = "Administrator";
        $admin->display();
        
        echo '<br/>';
        if($admin instanceof UserData){
            echo 'inherited';
        }

    ?>
    </div>
</div>
<?php include 'inc/footer.php'; ?>