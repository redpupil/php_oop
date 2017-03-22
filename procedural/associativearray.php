<?php include 'inc/header.php'; ?>
<h2>Topics: Associative Array</h2>
<div class="content">
    <div class="topics">


    <?php

        $action = array('finger'=>'hand', 'toes'=>'foot', 'teeth'=>'mouth');
        echo $action['finger'];
        echo gettype('finger');
        echo var_dump('finger');
        echo var_dump($action);
        
        
        echo "<hr/>";
        $age = array("karim"=>"54","Rahim"=>"65");
        foreach ($age as $key => $value) {
            echo "$key is ". "$value Years old <br/>";
        }
        
        
        
        //multi-d array
        echo "<hr/>";
        $cars = array(
            array("BMW",15,54),
            array("Audi",54,66),
            array("Mercedes",75,77),
            array("Volvo",95,17)
        );
        
        for ($row = 0; $row < 4; $row++) {
            echo "<p>Row number $row</p>";
        
        
        echo "<ul>";
        for ($col = 0; $col < 3; $col++) {
            echo "<li>".$cars[$row][$col]."</li>";
        }
        echo "</ul>";
        }

    ?>
    </div>
</div>
<?php include 'inc/footer.php'; ?>
