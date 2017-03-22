<?php include 'inc/header.php'; ?>
<h2>Topics: Project List</h2>
<div class="content">
    <div class="topics">


    <?php

    // The function can only get array as an argument.
    function calcNumMilesOnFullTank(array $models)
    {
        foreach($models as $item)
        {
            echo $carModel = $item[0];
            echo " : ";
            echo $numberOfMiles = $item[1] * $item[2];
            echo "<br />";
        }
    }

    //calcNumMilesOnFullTank("Toyota");//will generate fatal error

    $models = array(
        array('Toyota', 12, 44),
        array('BMW', 13, 41)
    );

    calcNumMilesOnFullTank($models);

    ?>

    <?php
        //Object type hinting
    //we put the name of the class in front of the argument name in the function.

    class Car{
        protected $driver;

        // The constructor can only get Driver objects as arguments.
        public function __construct(Driver $driver) {
            $this->driver = $driver;
        }
    }

    class Driver{}

    $driver1 = new Driver();
    $car1 = new Car($driver1);

    /*is_bool - to find out whether a variable is a boolean (true or false).
is_int - to find out whether a variable is an integer.
is_float - to find out whether a variable is a float (3.14, 1.2e3 or 3E-10).
is_null - to find out whether a variable is null.
is_string - to find out whether a variable is a string.*/

    ?>
    <?php
        //basic type(int,float, string, bool) hinting. php7 support scalar type hinting.

    class Bar
    {
        protected $model;

        // string type hinting
        public function setModel(string $model)
        {
            $this->model = $model;
        }
    }

    ?>
    </div>
</div>
<?php include 'inc/footer.php'; ?>