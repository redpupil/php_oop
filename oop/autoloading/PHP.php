<?php

class PHP{
    public $fromweb;
        
            //object of Web->access of all methods of Web class
            function __construct(Web $value) {
        
                $this->fromweb = $value;
                $this->fromweb->framework();
                $this->fromweb->cms();
    }
}

?>

