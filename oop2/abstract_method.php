<?php include 'inc/header.php'; ?>
<h2>Topics: Abstract Class & Method</h2>
<div class="content">
    <div class="topics">


    <?php

    /*An abstract class is just like an interface, but you can define methods in an abstract class whereas in an interface they are all abstract. Abstract classes can have both empty and working/concrete methods. In interfaces, functions defined there cannot have a body. In abstract classes, they can.*/

        //An abstract class is a class that has at least one abstract method.
        //When to declare abstract method?
        //When all the children of that class must implement this method but in different ways.

        abstract class Animal {
            //Abstract methods can only have names and arguments, and no other code.
            //Thus, we cannot create objects out of abstract classes. Instead, we need to create child classes that add the code into the bodies of the methods, and use these child classes to create objects.
            //Abstract methods cannot be private
            //properties couldn't be abstract
            abstract public function fourLegs();//only declaration


        }
        //The child classes that inherit from abstract classes must add bodies to the abstract methods.
        class Tiger extends Animal{

            public function fourLegs(){
                echo "I am a Big Cat! Tiger.<br/>";
            }
        }

        class Cow extends Animal{
            public function fourLegs(){
                echo "Hey now, Black cow!<br/>";
            }
        }



        $bigCat = new Tiger();
        $bigCat->fourLegs();

        $domestic = new Cow();
        $domestic->fourLegs();
    ?>


<?php
abstract class person {

    public $LastName;
    public $FirstName;
    public $BirthDate;

    abstract protected function write_info();
}

final class employee extends person{

    public $EmployeeNumber;
    public $DateHired;

    public function write_info(){
        //sql codes here
        echo "Writing ". $this->LastName . "'s info to emloyee dbase table <br>";
    }
}

final class student extends person{

    public $StudentNumber;
    public $CourseName;

    public function write_info(){
        //sql codes here
        echo "Writing ". $this->LastName . "'s info to student dbase table <br>";
    }
}

///----------
$personA = new employee;
$personB = new student;

$personA->FirstName="Joe";
$personA->LastName="Sbody";

$personB->FirstName="Ben";
$personB->LastName="Dover";

$personA->write_info();
// Writing Sbody's info to emloyee dbase table
$personB->write_info();
// Writing Dover's info to student dbase table
?>
    </div>
</div>
<?php include 'inc/footer.php'; ?>