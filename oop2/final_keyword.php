<?php include 'inc/header.php'; ?>
<h2>Topics: Final Keyword</h2>
<div class="content">
    <div class="topics">

final keyword prevents child classes from overriding 
    <?php
        
    //final keyword in method
        class BaseClass {
        public function test() {
            echo "BaseClass::test() called\n";
        }

        final public function moreTesting() {
            echo "BaseClass::moreTesting() called\n";
        }
        }

        class ChildClass extends BaseClass {
           public function moreTesting() {
               echo "ChildClass::moreTesting() called\n";
           }
        }
        // Results in Fatal error: Cannot override final method BaseClass::moreTesting()
    ?>
        
    <?php
    //final class can't be extended
        final class BaseClass1 {
           public function test() {
               echo "BaseClass::test() called\n";
           }

           // Here it doesn't matter if you specify the function as final or not
           final public function moreTesting() {
               echo "BaseClass::moreTesting() called\n";
           }
        }

        class ChildClass1 extends BaseClass1 {
        }
        // Results in Fatal error: Class ChildClass may not inherit from final class (BaseClass)
    ?>
    
    </div>
</div>
<?php include 'inc/footer.php'; ?>