<?php include 'inc/header.php'; ?>
<h2>Topics: Project List</h2>
<div class="content">
    <div class="topics">


    <?php

        //useful when simple, one-off objects need to be created.

    // Pre PHP 7 code
    class Logger
    {
        public function log($msg)
        {
            echo $msg;
        }
    }

    $util->setLogger(new Logger());

    // PHP 7+ code
    $util->setLogger(new class {
        public function log($msg)
        {
            echo $msg;
        }
    });

    ?>
    </div>
</div>
<?php include 'inc/footer.php'; ?>