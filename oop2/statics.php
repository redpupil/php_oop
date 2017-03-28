<?php include 'inc/header.php'; ?>
<h2>Topics: Project List</h2>
<div class="content">
    <div class="topics">


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