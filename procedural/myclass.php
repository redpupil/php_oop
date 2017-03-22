<?php include 'inc/header.php'; ?>
<h2>Topics: Project List</h2>
<div class="content">
	<div class="topics">


		<?php

            class Clothes{
                public $color = "blue";
                public $price;

                public function pants(){
                    //$this-> means anything(property or function) inside this class.
                    echo "You called me using this keyword. The color is: ".$this->color;

                }
                public function shirt(){
                    echo "<br/> Access function using 'this' Keyword".$this->pants();
                }

                public function cost($value){
                    echo "<br/> The price is: ".$this->price = $value;
                }
            }

            $blueShirt = new Clothes(); //creates object/instance
            $blueShirt->color = "Red";//assign default value
            echo $blueShirt->shirt(); //calling function using the object
            echo $blueShirt->cost(30); //calling function using the object

           
        ?>
	</div>
</div>
<?php include 'inc/footer.php'; ?>