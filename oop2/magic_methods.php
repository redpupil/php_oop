<?php include 'inc/header.php'; ?>
<h2>Topics: Magic Methods</h2>
<div class="content">
    <div class="topics">

        /*      __construct(), __destruct(), 
         *      __call(), __callStatic(), 
         *      __get(), __set(), 
         *      __isset(), __unset(),
         *      __sleep(), __wakeup(), 
         *      __toString(), __invoke(), 
         *      __set_state(), 
         *      __clone() 
         *      __debugInfo()  
         */
    <?php
    //Example #1 Sleep and wakeup
    
    //The intended use of __sleep() is to commit pending data or perform similar
    //cleanup tasks. Also, the function is useful if you have very large objects
    //which do not need to be saved completely.
    
    //The intended use of __wakeup() is to reestablish any database connections
    // that may have been lost during serialization and perform other reinitialization tasks.
        class Connection{
            protected $link;
            private $dsn, $username, $password;
            
            public function __construct($dsn,$username,$password) {
                
                $this->dsn = $dsn;
                $this->username = $username;
                $this->password = $password;
                $this->connect();
            }
            
            private function connect() {
                
                $this->link = new PDO($this->dsn, $this->username, $this->password);
            }
            
            public function __sleep() {
                
                return array('dsn', 'username', 'password');
            }
            
            public function __wakeup() {
                
                $this->connect();
            }
        }
    ?>
      
         
         
    <?php
    // __toString() 
    //public string __toString ( void )
    //The __toString() method allows a class to decide how it will react when it is 
    //treated like a string. For example, what echo $obj; will print. This method 
    //must return a string, as otherwise a fatal E_RECOVERABLE_ERROR level error is emitted.
    
    // Declare a simple class
        echo "<br/>";
        class TestClass
        {
            public $foo;

            public function __construct($foo)
            {
                $this->foo = $foo;
            }

            public function __toString()
            {
                return $this->foo;
            }
        }

        $class = new TestClass('Hello');
        echo "<br/><hr/>".$class."<br/>";
    ?>
         
         
    <?php
    //The __invoke() method is called when a script tries to call an object as a function.
    //mixed __invoke ([ $... ] )
        class CallableCalss{
            public function __invoke($x) {
                var_dump($x);
            }
        }
        
        $testObj = new CallableCalss();
        $testObj(5);
        echo "<br/>";
        var_dump(is_callable($testObj));
        echo "<br/><hr/>";
    ?>
         
         
    <?php
    //static object __set_state ( array $properties )
    
        class A
        {
        public $var1;
        public $var2;

        public static function __set_state($an_array) // As of PHP 5.1.0
        {
            $obj = new A;
            $obj->var1 = $an_array['var1'];
            $obj->var2 = $an_array['var2'];
            return $obj;
        }
        }

        $a = new A;
        $a->var1 = 5;
        $a->var2 = 'foo';

        eval('$b = ' . var_export($a, true) . ';'); // $b = A::__set_state(array(
                                                    //    'var1' => 5,
                                                    //    'var2' => 'foo',
                                                    // ));
        var_dump($b);
        echo "<br/><hr/>";
    ?>
         
    <?php
    //This method is called by var_dump() when dumping an object to get the 
    //properties that should be shown. If the method isn't defined on an object, 
    //then all public, protected and private properties will be shown.
    
    
        class C {
        private $prop;

        public function __construct($val) {
            $this->prop = $val;
        }

        public function __debugInfo() {
                return [
                    'propSquared' => $this->prop ** 2,
                ];
            }
        }

        var_dump(new C(42));
    ?>     
    </div>
</div>
<?php include 'inc/footer.php'; ?>