<?php include 'inc/header.php'; ?>
<h2>Topics: Project List</h2>
<div class="content">
    <div class="topics">


    <?php

    spl_autoload_register(function ($class_name) {

        include './autoloading/'.$class_name . '.php';

    });

    $db = new Database();
    $db->setDriver("mysql");
    $db->connect("host","user","db","pass");
    ?>
    </div>
</div>
<?php include 'inc/footer.php'; ?>