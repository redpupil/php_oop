<?php include 'inc/header.php'; ?>
<h2>Topics: Object Serialization</h2>
<div class="content">
    <div class="topics">


    <?php

    spl_autoload_register(function ($class_name){
        include "./autoloading/".$class_name.".php";
    });

    $pro = new Programming();
    $ser = serialize($pro);
//  Store and retrieve data same format
//  file_put_contents("programming.txt",$ser);//Create file
//  echo $ser;
    $getcont = file_get_contents("programming.txt"); //Read file
    $unser = unserialize($getcont);
    echo "<pre>";
    print_r($unser);
    echo "<pre>";

    ?>
    </div>
</div>
<?php include 'inc/footer.php'; ?>