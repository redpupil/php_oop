<?php include 'inc/header.php'; ?>
<h2>Topics: Project List</h2>
<div class="content">
    <div class="topics">


    <?php

        echo 'Today is '.date('d/m/Y').'<br/>';
        echo 'Today is '.date('l').'<br/>';
        echo 'Default time is '.date('h:i:sa').'<br/>';
                
        date_default_timezone_set('Asia/Dhaka');
        echo 'Dhaka time is '.date('h:i:sa').'<br/>';
        echo date_default_timezone_get().'<br/>';
        
        //create Unix timestamp
        $customtime = mktime(11, 14, 54, 8, 12, 2014);
        echo 'Created date is '. date("Y-m-d h:i:sa" , $customtime)."<br/>";
        
        //strtotime()->used to convert a human readable string to a Unix time.
        $unixtime = strtotime("10:11am May 20 2016");
        echo "Birthday ". date("Y-m-d h:i:sa", $unixtime);
        
        
    ?>
    </div>
</div>
<?php include 'inc/footer.php'; ?>