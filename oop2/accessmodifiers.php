<?php include 'inc/header.php'; ?>
<h2>Topics: Project List</h2>
<div class="content">
    <div class="topics">


    <?php

        /*
         *Private members can only be accessed from inside the class itself.

         *Protected members can only be accessed from inside the class it self and its child classes.

         *Public members can be accessed from anywhere - outside the class, inside the class it self and from child classes.
         * */

    class Car {

        //the private access modifier denies access to the method from outside the class’s scope
        private $model;

        //the public access modifier allows the access to the method from outside the class
        public function setModel($model)
        {
            //validate that only certain car models are assigned to the $carModel property
            $allowedModels = array("Mercedes benz","BMW");

            if(in_array($model,$allowedModels))
            {
                $this -> model = $model;
            }
            else
            {
                $this -> model = "not in our list of models.";
            }
        }

        public function getModel()
        {
            return "The car model is  " . $this -> model;
        }
    }


    $mercedes = new Car();
    //Sets the car’s model
    $mercedes -> setModel("Mercedes benz");
    //Gets the car’s model
    echo $mercedes -> getModel();


    ?>


    <?php
    /**
     * Define MyClass
     */
    class MyClass
    {
        // Contructors must be public
        public function __construct() { }

        // Declare a public method
        public function MyPublic() { }

        // Declare a protected method
        protected function MyProtected() { }

        // Declare a private method
        private function MyPrivate() { }

        // This is public
        function Foo()
        {
            $this->MyPublic();
            $this->MyProtected();
            $this->MyPrivate();
        }
    }

    $myclass = new MyClass;
    $myclass->MyPublic(); // Works
    //$myclass->MyProtected(); // Fatal Error
    //$myclass->MyPrivate(); // Fatal Error
    $myclass->Foo(); // Public, Protected and Private work


    /**
     * Define MyClass2
     */
    class MyClass2 extends MyClass
    {
        // This is public
        function Foo2()
        {
            $this->MyPublic();
            $this->MyProtected();
            //$this->MyPrivate(); // Fatal Error
        }
    }

    $myclass2 = new MyClass2;
    $myclass2->MyPublic(); // Works
    $myclass2->Foo2(); // Public and Protected work, not Private
    ?>
    </div>
</div>
<?php include 'inc/footer.php'; ?>