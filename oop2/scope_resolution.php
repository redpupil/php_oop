<?php include 'inc/header.php'; ?>
<h2>Topics: Scope Resolution Operator</h2>
<div class="content">
    <div class="topics">


    <?php

    //is a token that allows access to static, constant
    //Three special keywords self, parent and static are used to access properties or methods from inside the class definition.

    //Example #1 :: from outside the class definition
    class MyClass {
        const CONST_VALUE = 'A constant value';
    }

    $classname = 'MyClass';
    echo $classname::CONST_VALUE."<br/>"; // As of PHP 5.3.0

    echo MyClass::CONST_VALUE."<hr/>";
    ?>



     <?php
    //Example #2 :: from inside the class definition
        class OtherClass extends MyClass
        {
            public static $my_static = 'static var';

            public static function doubleColon() {
                echo parent::CONST_VALUE . "<br/>";
                echo self::$my_static . "<br/>";
            }
        }

        $classname = 'OtherClass';
        $classname::doubleColon(); // As of PHP 5.3.0

        OtherClass::doubleColon();
      ?>



      <?php
        //Example #3 Calling a parent's method
        class MyFirstClass
        {
            protected function myFunc() {
                echo "MyFirstClass::myFunc()"."<br/>";
            }
        }

        class AnotherClass extends MyFirstClass
        {
            // Override parent's definition
            public function myFunc()
            {
                // But still call the parent function
                parent::myFunc();
                echo "AnotherClass::myFunc()"."<br/>";
            }
        }

        $class = new AnotherClass();
        $class->myFunc();
      ?>
    </div>
</div>
<?php include 'inc/footer.php'; ?>