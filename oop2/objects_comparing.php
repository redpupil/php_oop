<?php include 'inc/header.php'; ?>
<h2>Topics: Project List</h2>
<div class="content">
    <div class="topics">


    <?php
//comparison operator (==), object variables are compared in a simple manner, 
//namely: Two object instances are equal if they have the same attributes and 
//values (values are compared with ==), and are instances of the same class.

//When using the identity operator (===), object variables are identical if and only if 
//they refer to the same instance of the same class.
        function bool2str($bool)
        {
            if ($bool === false) {
                return 'FALSE';
            } else {
                return 'TRUE';
            }
        }

        function compareObjects(&$o1, &$o2)
        {
            echo 'o1 == o2 : ' . bool2str($o1 == $o2) . "<br/>";
            echo 'o1 != o2 : ' . bool2str($o1 != $o2) . "<br/>";
            echo 'o1 === o2 : ' . bool2str($o1 === $o2) . "<br/>";
            echo 'o1 !== o2 : ' . bool2str($o1 !== $o2) . "<br/>";
        }

        class Flag
        {
            public $flag;

            function Flag($flag = true) {
                $this->flag = $flag;
            }
        }

        class OtherFlag
        {
            public $flag;

            function OtherFlag($flag = true) {
                $this->flag = $flag;
            }
        }

        $o = new Flag();
        $p = new Flag();
        $q = $o;
        $r = new OtherFlag();

        echo "Two instances of the same class\n<br/>";
        compareObjects($o, $p);

        echo "\n<br/><hr/>Two references to the same instance\n<br/>";
        compareObjects($o, $q);

        echo "\n<br/><hr/>Instances of two different classes\n<br/>";
        compareObjects($o, $r);

    ?>
    </div>
</div>
<?php include 'inc/footer.php'; ?>