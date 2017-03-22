<?php include 'inc/header.php'; ?>
<h2>Topics: Setters and Getters</h2>
<div class="content">
    <div class="topics">


    <?php
        //access private property through __get and __set methods
        //Bucky
        class Language {

            private $nativeLanguage;

            //setter
            public function setNativeLanguage($value){

                $this->nativeLanguage = $value;
            }

            //getter
            /**
             * @return mixed
             */
            public function getNativeLanguage(){
                return $this->nativeLanguage;
            }
        }

        $native = new Language();

        echo $native->getNativeLanguage();

        $native->setNativeLanguage("First native language: English <br/>");
        echo $native->getNativeLanguage();

        $native->setNativeLanguage("Second native language: Deutsch <br/> <br/><hr/><br/>");
        echo $native->getNativeLanguage();

    ?>

    <?php
        class MyClass {
            private $myName;

            public function __set($name, $value){
                echo 'Setting '.$name .' to '.$value."<br/>";
                $this->myName = $value;
            }

            public function __get($name){
                echo 'Getting '.$name .$this->myName;

            }

            public function __isset($name){
                echo "<br/><br/>Is ".$name.' set? ';
                return isset($this->myName);
            }

        }

        $myObject = new MyClass();
        $myObject->name = " Khan";
        echo $myObject->name;

        var_dump(isset($myObject->name));

    ?>
    </div>
</div>
<?php include 'inc/footer.php'; ?>