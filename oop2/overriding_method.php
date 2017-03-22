<?php include 'inc/header.php'; ?>
<h2>Topics: Overriding</h2>
<div class="content">
    <div class="topics">


    <?php

        Class A {
            public function display(){
                echo "Inside Class A";
            }

            //In order to prevent the method in the child class from overriding the parent’s methods, we can prefix the method in the parent with the final keyword.

        }

        Class B extends A {
            //Override method in child class
            public function display(){
                echo "Inside Class B <br/>";
                parent::display();
            }

        }

        $obj = new A();
        $obj->display();
        echo "<br/>";
        $obj2 = new B();
        $obj2->display();
        echo "<br/>";

    ?>
    </div>
</div>
<?php include 'inc/footer.php'; ?>