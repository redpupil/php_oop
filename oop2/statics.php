<?php include 'inc/header.php'; ?>
<h2>Topics: Project List</h2>
<div class="content">
    <div class="topics">

    <?php
        class Foo
        {
            public static $my_static = 'foo';

            public function staticValue() {
                return self::$my_static;
            }
        }

        class Bar extends Foo
        {
            public function fooStatic() {
                return parent::$my_static;
            }
        }


        print Foo::$my_static . "\n";

        $foo = new Foo();
        print $foo->staticValue() . "\n";
        print $foo->my_static . "\n";      // Undefined "Property" my_static

        print $foo::$my_static . "\n";
        $classname = 'Foo';
        print $classname::$my_static . "\n"; // As of PHP 5.3.0

        print Bar::$my_static . "\n";
        $bar = new Bar();
        print $bar->fooStatic() . "\n";
    ?>


    <?php
    //The main cases in which we consider the use of static methods and properties are when we need them as counters and for utility classes.

    class Utilis {
        // Hold the number of cars.
        static public $numberOfCars = 0;

        // Add 1 to the number of cars each time the method is called.
        static public function add1ToCars()
        {
            self::$numberOfCars++;
        }
    }

    echo Utilis::$numberOfCars;

    Utilis::add1ToCars();
    echo Utilis::$numberOfCars;

    Utilis::add1ToCars();
    echo Utilis::$numberOfCars;

    Utilis::add1ToCars();
    echo Utilis::$numberOfCars;

    ?>

    <?php
    class Utility {
        // The method uses PHP's header function to redirect the user.
        static public function redirect($url)
        {
            header("Location: $url");
            exit;
        }
    }

    //Utility::redirect("www.google.com");

    ?>

    <?php
    class User
    {
        public $name;
        public $age;
        public static $minimumPasswordLength = 6;

        public function Describe()
        {
            return $this->name . " is " . $this->age . " years old";
        }

        public static function ValidatePassword($password)
        {
            if(strlen($password) >= self::$minimumPasswordLength)
                return true;
            else
                return false;
        }
    }

    $password = "test";
    if(User::ValidatePassword($password))
        echo "Password is valid!";
    else
        echo "Password is NOT valid!";
    ?>
    </div>
</div>
<?php include 'inc/footer.php'; ?>