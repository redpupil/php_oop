<?php include 'inc/header.php'; ?>
<h2>Topics: Object Cloning</h2>
<div class="content">
    <div class="topics">


    <?php

        spl_autoload_register(function ($class_name){
            include "./autoloading/".$class_name.".php";
        });

        $java = new Language();
        $java->setCat("OOP");
        $java->setFramework("Spring");

        //Shallow Clone Object
        $perl = clone $java;
        $perl->setFramework("Catalyst");

        echo $java->getCat()."<br/>";
        echo $java->getFramework()."<br/>";

        echo $perl->getCat()."<br/>";
        echo $perl->getFramework();


    ?>
    </div>
</div>
<?php include 'inc/footer.php'; ?>