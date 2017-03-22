<?php include 'inc/header.php'; ?>
<h2>Topics: Inheritance</h2>
<div class="content">
    <div class="topics">

    <?php
        class Animal{
            public $name;
            public function Greet(){
                return "Hello! My name is ".$this->name;
            }
        }

        class Dog extends Animal{
            public function Greet()
            {
                return "Hello, I'm a dog and my name is " . $this->name;
            }
        }

        $animal = new Animal();
        echo $animal->Greet();
        $animal = new Dog();
        $animal->name = "Bob";
        echo $animal->Greet()."<br/>";
    ?>
    <?php

    // The parent class has its properties and methods
    class Car {

        //A private property or method can be used only by the parent.
        private $model;

        // Public methods and properties can be used by both the parent and the child classes.
        public function setModel($model)
        {
            $this -> model = $model;
        }

        public function getModel()
        {
            return $this -> model;
        }
    }


    //The child class can use the code it inherited from the parent class,
    // and it can also have its own code
    class SportsCar extends Car{

        private $style = 'fast and furious';

        public function driveItWithStyle()
        {
            return 'Drive a '  . $this -> getModel() . ' <i>' . $this -> style . '</i>';
        }
    }


    //create an instance from the child class
    $sportsCar1 = new SportsCar();

    // Use a method that the child class inherited from the parent class
    $sportsCar1 -> setModel('Ferrari');

    // Use a method that was added to the child class
    echo $sportsCar1 -> driveItWithStyle();

    ?>


    </div>
</div>
<?php include 'inc/footer.php'; ?>