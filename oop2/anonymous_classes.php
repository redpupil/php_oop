<?php include 'inc/header.php'; ?>
<h2>Topics: Project List</h2>
<div class="content">
    <div class="topics">

    <?php
        //useful when simple, one-off objects need to be created.
        class SomeClass {}
        interface SomeInterface {}
        trait SomeTrait {}

        var_dump(new class(10) extends SomeClass implements SomeInterface {
            private $num;

            public function __construct($num)
            {
                $this->num = $num;
            }

            use SomeTrait;
        });
    ?>


    <?php
        //nesting
        class Outer
        {
            private $prop = 1;
            protected $prop2 = 2;

            protected function func1()
            {
                return 3;
            }

            public function func2()
            {
                return new class(/*$this->prop error*/) extends Outer {
                    private $prop3;

                    public function __construct($prop)
                    {
                        $this->prop3 = $prop;
                    }

                    public function func3()
                    {
                        return $this->prop2 + $this->prop3 + $this->func1();
                    }
                };
            }
        }

        echo (new Outer)->func2()->func3();
    ?>


    </div>
</div>
<?php include 'inc/footer.php'; ?>