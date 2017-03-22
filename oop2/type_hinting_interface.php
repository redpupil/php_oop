<?php include 'inc/header.php'; ?>
<h2>Topics: Type hinting for interfaces</h2>
<div class="content">
    <div class="topics">


    <?php

        class Bmw {

            protected $model;
            protected $rib;
            protected $height;

            // The properties are introduced to the class through the constructor
            public function __construct($model, $rib, $height) {
                $this->model = $model;
                $this->rib = $rib;
                $this->height = $rib;
            }

            // Calculate the tank volume for rectangular tanks
            public function calcTankVolume()
            {
                return $this -> rib * $this -> rib * $this -> height;
            }
        }

        // Type hinting ensures that the function gets only Bmw objects as arguments
        function calcTankPrice(Bmw $bmw, $pricePerGalon){

            return $bmw -> calcTankVolume() * 0.0043290 * $pricePerGalon . "$";

        }

        $bmw1 = new Bmw('62182791', 14, 21);
        echo calcTankPrice($bmw1,3);


    ?>
    </div>
</div>
<?php include 'inc/footer.php'; ?>