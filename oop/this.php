<?php include 'inc/header.php'; ?>
<h2>Topics: Project List</h2>
<div class="content">
    <div class="topics">


    <?php

        class Calculation {
            
            public $input;
            public $input2;
            public $output;
            
        function setInput($number1) {
            $this->input = (int) $number1;
        }
        
        function setInput2($number2) {
            $this->input2 = (int) $number2;
        }
        
        function getResult() {
            $this->output = 'The result is: '.$this->input * $this->input2;
            return $this->output;
        }
        
        }
        
        $calc = new Calculation();
        $calc->setInput(5);
        $calc->setInput2(5);
        echo $calc->getResult();
        
    ?>
    </div>
</div>
<?php include 'inc/footer.php'; ?>