<?php include 'inc/header.php'; ?>
<h2>Topics: Method Chaining</h2>
<div class="content">
    <div class="topics">


    <?php
    //Method Caining => $object->method1()->method2()->method3()
    class fakeString
    {
        private $str;
        function __construct()
        {
            $this->str = "";
        }

        function addA()
        {
            $this->str .= "a";
            return $this;
        }

        function addB()
        {
            $this->str .= "b";
            return $this;
        }

        function getStr()
        {
            return $this->str;
        }
    }


    $a = new fakeString();


    echo $a->addA()->addB()->getStr();

    ?>
    </div>
</div>
<?php include 'inc/footer.php'; ?>