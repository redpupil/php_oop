
<?php include 'inc/header.php'; ?>
<h2>Topics: explode() & implode()</h2>
<div class="content">
    <div class="topics">


    <?php
        //explode — Split a string by string
        $mystr = "We are learning PHP";
        print_r(explode(" ",$mystr));
        echo "<hr/>";
        $str = explode(" ", $mystr);
        echo $str[2];
        

        echo "<hr/>";
        //implode — Join array elements with a string
        $myArr = array("We","are","learnig","PHP");
        echo implode(",",$myArr);
    ?>
    </div>
</div>
<?php include 'inc/footer.php'; ?>