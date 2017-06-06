<?php include 'inc/header.php'; ?>
<h2>Topics: Project List</h2>
<div class="content">
    <div class="topics">


    <?php

        //limitation of self::
        class A {
        public static function who() {
            echo __CLASS__."-> From Base Class";
        }
        public static function test() {
            self::who();
        }
        }

        class B extends A {
            public static function who() {
                echo __CLASS__;
            }
        }

        B::test();

    ?>
        
    <?php
    // static:: simple usage
    echo "<br/><hr/>";
    class C {
        public static function who() {
            echo __CLASS__;
        }
        public static function test() {
            static::who(); // Here comes Late Static Bindings
        }
    }

    class D extends C {
        public static function who() {
            echo __CLASS__."-> From Child Class.";
        }
    }

    D::test();
    ?>

    </div>
</div>
<?php include 'inc/footer.php'; ?>