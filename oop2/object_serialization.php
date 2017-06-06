<?php include 'inc/header.php'; ?>
<h2>Topics: Project List</h2>
<div class="content">
    <div class="topics">


    <?php

        //serialize() returns a string containing a byte-stream 
        //representation of any value that can be stored in PHP. 
        //unserialize() can use this string to recreate the original 
        //variable values. Using serialize to save an object will save 
        //all variables in an object. 
    
        //Note that static members of an object are not serialized.
        echo '<pre>';
        
        $single = array('cat','dog','fish');
        
        print_r($single);
        
         echo $ser = serialize($single);
        
    ?>
    </div>
</div>
<?php include 'inc/footer.php'; ?>