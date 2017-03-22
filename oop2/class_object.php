<?php include 'inc/header.php'; ?>
<h2>Topics: Class & Object</h2>
<div class="content">
    <div class="topics">


    <?php

        //Class name must be CamelCase
        class Animal {

            //property declaration
            protected $name;
            protected $favorite_food;
            protected $sound;
            protected $id;


            public static $number_of_animals = 0;//changed value is stored for next use
            //Access-> ClassName::Static_var

            //Method declaration
            public function whichAnimal($value){
                echo $this->name = $value;
            }


        }

        $dog = new Animal();
        $dog->whichAnimal("Doggy");

    ?>
    </div>
</div>
<?php include 'inc/footer.php'; ?>