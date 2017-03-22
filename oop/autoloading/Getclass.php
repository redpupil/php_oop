<?php

abstract class Getclass{
    
    public function backEnd() {

            echo 'Base class constant and class name : '.__CLASS__.'<br/>';
            echo "Base Class Function and class name : ". get_class($this)."<br/>";
        }
        
    }

?>

