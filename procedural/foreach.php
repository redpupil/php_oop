<?php include 'inc/header.php'; ?>
<h2>Topics: Project List</h2>
<div class="content">
    <div class="topics">


    <?php
        
        $colors = array("red","green","blue");
        foreach ($colors as $value) {
            echo "Color is: $value <br/>";
        }
        
        
        //modify array elements using reference(&)
        $arr = array(1, 2, 3, 4);
        foreach ($arr as &$value) {
            $value = $value * 2;
            echo $value;
        }
        // $arr is now array(2, 4, 6, 8)
        unset($value); // break the reference with the last element


    ?>
    </div>
</div>
<?php include 'inc/footer.php'; ?>