<?php include 'inc/header.php'; ?>
<h2>Topics: Project List</h2>
<div class="content">
    <div class="topics">


    <?php

    //When an object is sent by argument, returned or assigned to 
    //another variable, the different variables are not aliases: 
    //they hold a copy of the identifier, which points to the same object.
  
        class A {
        public $foo = 1;
        }  

        $a = new A;
        $b = $a;     // $a and $b are copies of the same identifier
                     // ($a) = ($b) = <id>
        $b->foo = 2;
        echo $a->foo."<br/>";


        $c = new A;
        $d = &$c;    // $c and $d are references
                     // ($c,$d) = <id>

        $d->foo = 2;
        echo $c->foo."<br/>";


        $e = new A;

        function foo($obj) {
            // ($obj) = ($e) = <id>
            $obj->foo = 2;
        }

        foo($e);
        echo $e->foo."<br/><hr/>";

    ?>
        
        
    <?php
        ////A reference is not a pointer. However, an object handle IS a pointer.
        class Foo {
          private static $used;
          private $id;
          public function __construct() {
            $id = $used++;
          }
          public function __clone() {
            $id = $used++;
          }
        }

        $a = new Foo; // $a is a pointer pointing to Foo object 0
        $b = $a; // $b is a pointer pointing to Foo object 0, however, $b is a copy of $a
        $c = &$a; // $c and $a are now references of a pointer pointing to Foo object 0
        $a = new Foo; // $a and $c are now references of a pointer pointing to Foo object 1, $b is still a pointer pointing to Foo object 0
        unset($a); // A reference with reference count 1 is automatically converted back to a value. Now $c is a pointer to Foo object 1
        $a = &$b; // $a and $b are now references of a pointer pointing to Foo object 0
        $a = NULL; // $a and $b now become a reference to NULL. Foo object 0 can be garbage collected now
        unset($b); // $b no longer exists and $a is now NULL
        $a = clone $c; // $a is now a pointer to Foo object 2, $c remains a pointer to Foo object 1
        unset($c); // Foo object 1 can be garbage collected now.
        $c = $a; // $c and $a are pointers pointing to Foo object 2
        unset($a); // Foo object 2 is still pointed by $c
        $a = &$c; // Foo object 2 has 1 pointers pointing to it only, that pointer has 2 references: $a and $c;
        const ABC = TRUE;
        if(ABC) {
          $a = NULL; // Foo object 2 can be garbage collected now because $a and $c are now a reference to the same NULL value
        } else {
          unset($a); // Foo object 2 is still pointed to $c
        }
    ?>
    </div>
</div>
<?php include 'inc/footer.php'; ?>