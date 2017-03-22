
/**
 * Created by PhpStorm.
 * User: khan
 * Date: 2/22/17
 * Time: 3:06 PM
 */
<?php include 'inc/header.php'; ?>
<h2>Topics: Interface</h2>
<div class="content">
    <div class="topics">
/*
        */

        <?php
        //Object interfaces allow you to create code which specifies which methods a class must implement, without having to define how these methods are handled.
        //A completely abstract class that defines a protocol for object interactions

        interface CanFly {
            public function fly();
        }

        interface CanSwim {
            public function swim();
        }

        class Bird {
            public function info() {
                echo "I am a {$this->name}\n";
                echo "I am an bird\n";
            }
        }

        /**
         * some implementations of birds
         */
        class Dove extends Bird implements CanFly {
            var $name = "Dove";
            public function fly() {
                echo "I fly\n";
            }
        }

        class Penguin extends Bird implements CanSwim {
            var $name = "Penguin";
            public function swim() {
                echo "I swim\n";
            }
        }

        class Duck extends Bird implements CanFly, CanSwim {
            var $name = "Duck";
            public function fly() {
                echo "I fly\n";
            }
            public function swim() {
                echo "I swim\n";
            }
        }

        /**
         * a simple function to describe a bird
         */
        function describe($bird) {
            if ($bird instanceof Bird) {
                $bird->info();
                if ($bird instanceof CanFly) {
                    $bird->fly();
                }
                if ($bird instanceof CanSwim) {
                    $bird->swim();
                }
            } else {
                die("This is not a bird. I cannot describe it.");
            }
        }

        // describe these birds please
        describe(new Penguin);
        echo "---\n";

        describe(new Dove);
        echo "---\n";

        describe(new Duck);

        ?>
    </div>
</div>
<?php include 'inc/footer.php'; ?>
