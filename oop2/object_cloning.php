<?php include 'inc/header.php'; ?>
<h2>Topics: Object Cloning</h2>
<div class="content">
    <div class="topics">


    <?php
    /*If you want to directly copy objects in php, then it will copy by reference, 
     * not by value. Means if you will change main object data then copied object 
     * will be affected. Also if you change value of the copied object then 
     * main object value will be changed. So if you want to create copy of the 
     * object which should never referenced to original object then you can take 
     * help of object cloning in php. */
    
    //Cloning is used to create a genuine copy of an object. 
    //Assigning an object to another variable does not create a copy
    
    //shallow copy of the object. This means that internal objects of the 
    //cloned object will not be cloned, unless you explicitly instruct the 
    //object to clone these internal objects too
        class SubObject
        {
            static $instances = 0;
            public $instance;

            public function __construct() {
                $this->instance = ++self::$instances;
            }

            public function __clone() {
                $this->instance = ++self::$instances;
            }
        }

        class MyCloneable
        {
            public $object1;
            public $object2;

            function __clone()
            {
                // Force a copy of this->object, otherwise
                // it will point to same object.
                $this->object1 = clone $this->object1;
            }
        }

        $obj = new MyCloneable();

        $obj->object1 = new SubObject();
        $obj->object2 = new SubObject();

        $obj2 = clone $obj;


        print("Original Object:<br/>");
        print_r($obj);

        print("<br/>Cloned Object:<br/>");
        print_r($obj2);

    ?>
    <?php
    //using clone keyword
    echo "<hr/><br/>";
    class test
        {
        public $a;
        private $b;
        function __construct($a, $b)
        {
        $this->a = $a;
        $this->b = $b;
        }
        }
        $a = new test("riaz" , "khan");
        $b = $a; //Copy of the object
        $c = clone $a; //clone of the object
        $a->a = "no khan";
        print_r($a);
        print_r($b);
        print_r($c);
    ?>
    <?php
    //Using __clone magic method
    //Magic method clone executes when object cloning is performed. 
    //As soon as php execute statement $c = clone $a, __clone method invoked.
        echo "<hr/><br/>";
        class test1
        {
        public $a;
        private $b;
        function __construct($a, $b)
        {
        $this->a = $a;
        $this->b = $b;
        }
        function __clone()
        {
        $this->a = "c";
        }
        }
        $a = new test1("riaz" , "khan");
        $b = $a; //Copy of the object
        $c = clone $a; //clone of the object
        $a->a = "no khan";
        print_r($a);
        print_r($b);
        print_r($c);
        print_r($a);
    ?>
    </div>
</div>
<?php include 'inc/footer.php'; ?>