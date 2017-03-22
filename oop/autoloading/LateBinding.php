<?php

class LateBinding{
    
    public static function frontEnd() {

        echo static::testClass()."<br/>";
        }
        
     /*
    //access static method using self::
    public function getFramework() {
        self::frontEnd();
        } */
        
    public static function testClass(){
        return __CLASS__;
    }
        
    }

?>

