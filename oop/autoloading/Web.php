<?php

class Web{
    
    public function framework() {

            echo 'Laravel is most popular framework<br/>';
            return $this; //must return instance
        }
        
    public function cms() {

            echo 'Wordpress is most popular CMS<br/>';
            return $this; //must return instance

        }
}

?>

