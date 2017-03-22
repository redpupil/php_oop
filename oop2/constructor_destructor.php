<?php include 'inc/header.php'; ?>
<h2>Topics: Project List</h2>
<div class="content">
    <div class="topics">


        <?php
        //Constructor
        class BaseClass {
            public function __construct() {
                echo "In BaseClass constructor "."<br/>";
            }
            //Destructor
            public function __destruct() {
                echo "Destroying BaseClass" ."<br/><hr/><br/>";
            }
        }

        class SubClass extends BaseClass {
            public function __construct() {
                parent::__construct();
                //parent::__destruct();
                echo "In SubClass constructor"."<br/>";

            }
            public function __destruct() {
                echo "Destroying SubClass" ."<br/><hr/><br/>";
            }

        }

        //Constructor called during instantiation
        $obj = new BaseClass();
        $obj = new SubClass();

        ?>



        <?php
        //Another Example
        class Animal
        {
            public $name = "No-name animal";

            public function __construct($name)
            {
                echo "I'm alive!"."<br/>";
                $this->name = $name;
            }

            public function __destruct()
            {
                echo "I'm dead now :(";
            }
        }

        $animal = new Animal("Bob");
        echo "Name of the animal: " . $animal->name;
        ?>
    </div>
</div>
<?php include 'inc/footer.php'; ?>