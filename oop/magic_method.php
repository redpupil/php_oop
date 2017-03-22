<?php include 'inc/header.php'; ?>
<h2>Topics: Magic Methods</h2>
<div class="content">
    <div class="topics">


    <?php
        //__get($parameter);
        //__set($parameter, $value);
        //__call($parameter, $value);
        class Student{
            
            public $name;


            public function describe(){
                echo 'I am student <br/>';
            }
            
            public function __get($pm) {
                echo "$pm does not exist<br/>";
            }
            
            //assign value to undefined property
            public function __set($pm, $value) {
                echo "We set $pm->$value <br/>";
            }
            
            public function __call($pm, $value) {
                echo "There is no <strong>".$pm."</strong> method and arguments: ". implode(',', $value) ;
            }
        }
        
        
        $st = new Student();
        $st->describe();
        $st->Mark;
        $st->age = 45;//assing value into undefined property
        
        $st->notExistMethod('2','3','6');

    ?>
    </div>
</div>
<?php include 'inc/footer.php'; ?>