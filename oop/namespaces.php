<?php include 'inc/header.php'; ?>
<h2>Topics: Project List</h2>
<div class="content">
    <div class="topics">


    <?php

        include "autoloading/Namespaces.php";

        use \Khan\Mars\Namespaces as ns; //Allias

        //new \Khan\Mars\Namespaces();
        new ns(); // Using Allias

        echo HTML;
        echo \Khan\Mars\CSS;
        echo \Khan\Mars\coding();
    ?>
    </div>
</div>
<?php include 'inc/footer.php'; ?>