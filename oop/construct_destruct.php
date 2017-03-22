<?php include 'inc/header.php'; ?>
<h2>Topics: Project List</h2>
<div class="content">
    <div class="topics">


    <?php

        class UserData {
            public $user;
            public $userId;
            const NAME = "Md. Riazul Islam Khan";//Declare constant
            public static $age = "30"; // Declare Static property


            public function __construct($userName, $userId) {
                $this->user = $userName;
                $this->userId = $userId;
                
                echo "Constructor: Username is {$this->user} and user id is {$this->userId}";
            }
            
            public static function display() {
                //access constant
                echo 'Full name is: '.UserData::NAME;
                echo '<br/>Age is: '.self::$age; //access static property
            }
            
            public function __destruct() {
                unset($this->user);
                unset($this->userId);
            }
        }
        
        $user = "Max";
        $id = "34";
        
        $ur = new UserData($user, $id);
        echo '<br/>';
        //$ur->display();
        UserData::display();//access static method
    ?>
    </div>
</div>
<?php include 'inc/footer.php'; ?>